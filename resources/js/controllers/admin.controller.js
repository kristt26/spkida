(function (angular) {
  'use strict'
  angular.module('ctrl', [])
    .controller('PembobotanController', PembobotanController);

  function PembobotanController($scope, $http, helperServices, KriteriaService) {
    $scope.datas = [];
    $scope.model = {};
    $scope.element = [];
    KriteriaService.get().then(x => {
        for (let index = 0; index < x.length-1; index++) {
            var item = {};
            item.kriteria = x[index];
            for (let index1 = index+1; index1 < x.length; index1++) {
                item.kriteria1 = x[index1];
                $scope.element.push(angular.copy(item));
            }
        }
    //   $.LoadingOverlay("hide");
    })
    $scope.setNilai = (item)=>{
        if(item.bobot.length>1){
            var a = item.bobot.split("/");
            var nilai = 
            item.nilai = 1/ parseInt(a[item.bobot.length-2]);
            item.nama = item.kriteria.kriteria;
        }else{
            item.nilai = parseFloat(item.bobot);
            item.nama = item.kriteria.kriteria;
        }
        console.log(item.bobot);
    }
    $scope.checkcr = ()=>{
        KriteriaService.checkcr($scope.element).then(x => {
            $scope.datas=x;
            $scope.datas.relativecriteria = angular.copy($scope.datas.criterias);
            var item = {name: 'Priority'};
            $scope.datas.matrixnormal = angular.copy($scope.datas.relativeMatrix)
            $scope.datas.relativecriteria.push(angular.copy(item));
            for (let index = 0; index < $scope.datas.relativeMatrix.length; index++) {
                $scope.datas.matrixnormal[index].push(angular.copy($scope.datas.eigenVector[index]));
            }
        })
    }
    $scope.simpan = ()=>{
        KriteriaService.post($scope.element).then(x =>{
            
        })
    }
  }
})(window.angular);