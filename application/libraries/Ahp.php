<?php
// use Bardiz12\AHPDss\Constants;
// use Bardiz12\AHPDss\MatrixCalculator;

class Ahp
{
    public const QUANTITATIVE = 1;
    public const QUALITATIVE = 0;
    public $criterias = [];
    public $rawCriteria  = [];
    public $relativeMatrix = [];
    public $eigenVector = [];
    public $candidates = [];
    public $criteriaPairWise = [];
    public $finalMatrix = [];
    public $finalRanks = [];
    public $concistencybobot = [];
    public $bobomatrix = [];
    public $CR;
    public static $ir = [
        0.00,
        0.00,
        0.58,
        0.90,
        1.12,
        1.24,
        1.32,
        1.41,
        1.45,
        1.49,
        1.51,
        1.48,
        1.56,
        1.57,
        1.59
    ];

    public function __construct(){

    }
    /**
     * @var array
     */
    public function setCriterias($criterias){
        //$this->criterias = $criterias;
        //return $this;
    }

    public static function getIR($matrix_size){
        return isset(self::$ir[$matrix_size-1]) ? self::$ir[$matrix_size-1] : null;
    }
    

    public function addQuantitativeCriteria($criteria_name){
        $this->criterias[] = ['name'=>$criteria_name,'type'=>self::QUANTITATIVE];
        return $this;
    }
    
    public function addQualitativeCriteria($criteria_name){
        $this->criterias[] = ['name'=>$criteria_name,'type'=>self::QUALITATIVE];
        return $this;
    }

    public function getResult(){
        return (object)$this->finalRanks;
    }

    public function setRelativeInterestMatrix(array $matrix){
        $size = count($this->criterias);
        if($size != count($matrix)) throw new \ErrorException('matrix size should be '.$size."x".$size);
        foreach ($matrix as $i => $m) {
            if($size != count($m)) throw new \ErrorException('matrix size should be '.$size."x".$size);
            for ($j=0; $j < count($m); $j++) { 
                if($i == $j){
                    if($matrix[$i][$j] != 1){
                        throw new \ErrorException('matrix diagonal should have value : 1');
                    }
                }else{
                    if($matrix[$i][$j] != null){
                        $matrix[$j][$i] = 1 / $matrix[$i][$j];
                    }else{
                        $matrix[$i][$j] = 1 / $matrix[$j][$i];
                    }
                }
                //echo $matrix[$i][$j]." ";
            }
            //echo "\n";
        }
        $this->bobomatrix=$matrix;
//        $matrix = MatrixCalculator::multiply($matrix,$matrix);
        $do = $this->normalizeRelativeInterestMatrixAndCountEigen($matrix);
        
        $this->relativeMatrix = $do['matrix'];
        //print_r($do['matrix']);
        $this->eigenVector = $do['eigen'];
        $this->setPrioritiVektor($this->bobomatrix, $do['eigen']);
        $this->checkconcistencyindex();
        //print_r($this->eigenVector);
        return $this;
    }

    public function setPrioritiVektor($matrix, $eigen)
    {
        for ($i=0; $i < count($matrix); $i++) { 
            for ($j=0; $j < count($matrix); $j++) { 
                $matrix[$j][$i] = $eigen[$i] * $matrix[$j][$i];
            }
        }
        $this->concistencybobot = $matrix;
    }

    public function checkconcistencyindex()
    {
        $dmax = 0;
        for ($i=0; $i < count($this->concistencybobot); $i++) { 
            for ($j=0; $j < count($this->concistencybobot); $j++) { 
                if($i===$j){
                    $nilai = array_sum($this->concistencybobot[$i]);
                    $row = $this->concistencybobot[$i][$j];
                    $dmax += $nilai/$row;
                }
            }
        }
        $dmax = $dmax/count($this->concistencybobot);
        $CI = ($dmax - count($this->concistencybobot))/(count($this->concistencybobot)-1);
        $this->CR = $CI/$this->getIR(count($this->concistencybobot));
    }


    public function setCandidates(array $candidates){
        $this->candidates = $candidates;
    }

    public function setCriteriaPairWise($criteria_name,array $matrix){
        $id = array_search($criteria_name,array_column($this->criterias,'name'));
        if(!is_numeric($id)) throw new \ErrorException('Criteria \''.$criteria_name.'\' not found');

        return $this->criterias[$id]['type'] == self::QUALITATIVE ? $this->setCriteriaPairWiseQualitative($criteria_name,$matrix) : $this->setCriteriaPairWiseQuantitative($criteria_name,$matrix);
    }

    public function setBatchCriteriaPairWise(array $matrix){
        $this->criteriaPairWise = [];
        foreach ($matrix as $key => $value) {
            $this->setCriteriaPairWise($key,$value);
        }
        return $this;
    }

    public function debug($print=true){
        $deb = "Kriteria : \n";
        foreach($this->criterias as $i => $k){
            $k = (Object) $k;
            $deb.= $k->name." - ".$k->type."\n";;
        }
        $deb.= "\nKandidat:\n";
        foreach ($this->candidates as $key => $k) {
            $deb.= $k."\n";
        }
        $deb.= "\nMatriks Perbandingan Kriteria:\n";
        foreach ($this->relativeMatrix as $key => $m) {
            foreach ($m as $k => $m2) {
                $deb.= \number_format($m2,6)." ";
            }
            $deb.= "\n";
        }

        $deb.= "\nPairWise Kriteria :\n";
        foreach($this->criteriaPairWise as $name => $c){
            $deb.= $name."\n";
            foreach ($c['matrix'] as $key => $value) {
                if(!is_array($value)){
                    $deb.= $value." ";
                }else{
                    foreach ($value as $k => $a) {
                        $deb.= \number_format($a,6)." ";
                    }
                }
                $deb.= \number_format($c['eigen'][$key],6)." ";
                $deb.= "\n";
            }
            $deb.= isset($c['cr']) ? "Consistency Ratio = ".$c['cr'] : '';
            $deb.= "\n\n";
        }
        if($print) echo $deb;
        return $deb;
    }

    public function finalize(){
        if(count($this->criteriaPairWise) != count($this->criterias)) throw new \ErrorException('Error');

        $m1 = [];
        //($this->criteriaPairWise);
        $ranks = [];
        for ($i=0; $i < count($this->candidates); $i++) {
            $m1[$i] = [];
            $j = 0;
            $r = ['name'=>$this->candidates[$i],'value'=>0];
            foreach ($this->criteriaPairWise as $key => $criteriaPairWise) {
                $m1[$i][$j] = $criteriaPairWise['eigen'][$i];
                $r['value'] += $m1[$i][$j] * $this->eigenVector[$j];
                //echo $m1[$i][$j]." ";
                $j++;
            }
            $ranks[] = $r;
            //echo "\n";
        }
        $this->finalRanks = $ranks;
        $this->finalMatrix = $m1;
        //print_r($m1);
        return $this;


    }

    public function setCriteriaPairWiseQuantitative($criteria_name,array $matrix){
        if(count($matrix) != count($this->candidates)) throw new \ErrorException('Quantitative Pairwise should have matrix sized '.$size."x1");
        $tot = array_sum($matrix);
        $matrix_eigen = [];
        foreach ($matrix as $key => $value) {
            if(is_array($value)) throw new \ErrorException('Quantitative Pairwise should have matrix sized '.$size."x1");  

            $matrix_eigen[] = $value / $tot;
        }
        $this->criteriaPairWise[$criteria_name]['eigen'] = $matrix_eigen;
        $this->criteriaPairWise[$criteria_name]['matrix'] = $matrix;
        return $this;
    }

    public function setCriteriaPairWiseQualitative($criteria_name,$matrix){
        
        $size = count($this->candidates);
        if($size != count($matrix)) throw new \ErrorException('matrix size should be '.$size."x".$size);
        foreach ($matrix as $i => $m) {
            if($size != count($m)) throw new \ErrorException('matrix size should be '.$size."x".$size);
            for ($j=0; $j < count($m); $j++) { 
                if($i == $j){
                    if($matrix[$i][$j] != 1){
                        throw new \ErrorException('matrix diagonal should have value : 1');
                    }
                }else{
                    if($matrix[$i][$j] != null){
                        $matrix[$j][$i] = 1 / $matrix[$i][$j];
                    }else{
                        $matrix[$i][$j] = 1 / $matrix[$j][$i];
                    }
                }
                //echo $matrix[$i][$j]." ";
            }
            //echo "\n";
        }
        // $criteria_name;
        $this->rawCriteria[$criteria_name] = $matrix;
        $this->criteriaPairWise[$criteria_name] = $this->normalizeRelativeInterestMatrixAndCountEigen($matrix);
        // $this->criteriaPairWise[$criteria_name]['cr'] = $this->concistencyCheck($matrix,$this->criteriaPairWise[$criteria_name]['eigen']);
        return $this;
    }

    public function normalizeRelativeInterestMatrixAndCountEigen($matrix){
        $s = count($matrix);
        $tot = [];
        
        for ($i=0; $i < $s; $i++) {  
            for ($j=0; $j < $s; $j++) { 
                if(!isset($tot[$j])){
                    $tot[$j] = 0;
                }
                $tot[$j]+=$matrix[$i][$j];
            }
        }
        //print_r($tot);
        $eigen = [];
        for ($i=0; $i < $s; $i++) { 
            $eigen[$i] = 0;
            for ($j=0; $j < $s; $j++) { 
                //echo $matrix[$i][$j]." ";
                $matrix[$i][$j] /= $tot[$j];
                $eigen[$i] += $matrix[$i][$j];
                
            }
            $eigen[$i] /= $s;
            //echo "\n";
        }
        return ['matrix'=>$matrix,'eigen'=>$eigen];
        //return $this;
    }

    public function concistencyCheck($matrix,$eigen){
        $s = count($matrix);
        $dmax = 0;
        for ($i=0; $i < $s; $i++) { 
            $e = 0;
            for ($j=0; $j < $s; $j++) { 
                //if(!isset($tot[$j])){
                    //$tot[$j] = 0;
                //}
                $e+= $matrix[$j][$i];
            }
            $dmax+= $e * $eigen[$i];
            
        }
        $ci = ($dmax - $s)/($s - 1);
        
        $cr = $ci / $this->getIR($s);
        // $cr."\n";
        return $cr;
    }

    

}
