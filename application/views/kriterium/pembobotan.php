<div class="row" ng-app="app" ng-controller="PembobotanController">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bobot Kriteria</h3>
            	<!-- <div class="box-tools">
                    <a href="<?php echo site_url('kriterium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div> -->
            </div>
            <div class="box-body">
                <table class="table table-hover">
                    <tr ng-repeat = "item in element">
                        <td class="align-middle" style="width:20%">{{item.kriteria.kriteria}}</td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/9">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/8">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/7">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/6">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/5">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/4">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/3">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="1/2">
                                    </td>
                                    <td>
                                        =
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="2">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="3">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="4">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="5">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="6">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="7">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="8">
                                    </td>
                                    <td>
                                        <input type="radio" name="optionsRadios{{$index+1}}" id="optionsRadios1" ng-model="item.bobot" ng-change="setNilai(item)" value="9">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        9
                                    </td>
                                    <td>
                                        8
                                    </td>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        6
                                    </td>
                                    <td>
                                        7
                                    </td>
                                    <td>
                                        8
                                    </td>
                                    <td>
                                        9
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="align-middle text-right"  style="width:20%">{{item.kriteria1.kriteria}}</td>
                    </tr>
                </table>
                <div>
                    <button class="btn btn-warning" ng-click="checkcr()">Check CR</button>
                    <button class="btn btn-primary pull-right" ng-click="simpan()">Simpan</button>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-md-6" ng-show="datas.CR">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Bobot Kriteria</h3>
                        <!-- <div class="box-tools">
                            <a href="<?php echo site_url('kriterium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                        </div> -->
                    </div>
                    <div class="box-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td ng-repeat="item in datas.criterias">
                                        {{item.name}}
                                    </td>
                                </tr>
                            </thead>
                            <tbody ng-repeat="item in datas.criterias">
                                <tr>
                                    <td>
                                        {{item.name}}
                                    </td>
                                    <td ng-repeat="bobot in datas.bobomatrix[$index]">
                                        {{bobot}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Matriks Normal</h3>
                        <!-- <div class="box-tools">
                            <a href="<?php echo site_url('kriterium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                        </div> -->
                    </div>
                    <div class="box-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td ng-repeat="item in datas.relativecriteria">
                                        {{item.name}}
                                    </td>
                                </tr>
                            </thead>
                            <tbody ng-repeat="item in datas.criterias">
                                <tr>
                                    <td>
                                        {{item.name}}
                                    </td>
                                    <td ng-repeat="bobot in datas.matrixnormal[$index]">
                                        {{bobot}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-md-12">
        <div class="alert alert-success alert-dismissible" ng-show="datas.CR<0.1">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Nilai CR: {{datas.CR}} (Konsisten)</h4>
              </div>
        <div class="alert alert-danger alert-dismissible"  ng-show="datas.CR>0.1">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i>Nilai CR: {{datas.CR}} (Tidak Konsisten)</h4>
        </div>
    </div>
</div>
