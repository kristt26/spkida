<div class="row" ng-app="app" ng-controller="AnalisaController">
    <div class="col-md-12">
        <div class="box" ng-show="view=='karyawan'">
            <div class="box-header">
                <h3 class="box-title">Alternatif</h3>
                <!-- <div class="box-tools">
                    <a href="<?php echo site_url('pembobotan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div> -->
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>nama</th>
                        </tr>
                        <tr ng-repeat="item in karyawans">
                            <td>
                                <div class="animated-checkbox">
                                    <label>
                                        <input type="checkbox" ng-model="item.check" ng-change="additem(item)"><span
                                            class="label-text"> </span>
                                    </label>
                                </div>
                            </td>
                            <td>{{item.nama}}</td>
                        </tr>
                    </table>
                    <button class="btn btn-info pull-right" ng-click="next()">Next</button>
                </div>

            </div>
        </div>
        <div ng-show="view=='bobot'">
            <div class="col-md-6" ng-repeat="itemkriteria in kriteria">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">{{itemkriteria.kriteria}}</h4>
                        <!-- <div class="box-tools">
                            <a href="<?php echo site_url('pembobotan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                        </div> -->
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr ng-repeat="item in itemkriteria.item">
                                    <td class="align-middle" style="width:20%">{{item.alternatif.nama}}</td>
                                    <td>
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/9">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/8">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/7">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/6">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/5">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/4">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/3">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="1/2">
                                                </td>
                                                <td>
                                                    =
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="2">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="3">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="4">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="5">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="6">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="7">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="8">
                                                </td>
                                                <td>
                                                    <input type="radio"
                                                        name="optionsRadios{{itemkriteria.idkriteria}}{{$index+1}}"
                                                        id="optionsRadios1" ng-model="item.bobot"
                                                        ng-change="setNilai(item)" value="9">
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
                                    <td class="align-middle text-right" style="width:20%">
                                        {{item.alternatif1.nama}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </box>

                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-warning" ng-click="checkcr()">Check CR</button>
                <button class="btn btn-primary" ng-click="simpan()">Simpan</button>
            </div>
        </div>
        <div ng-show="view=='hasil'">
            <div class="col-md-6" ng-repeat="itemkriteria in datas.datahitung">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">{{itemkriteria.name}}</h4>
                        <!-- <div class="box-tools">
                            <a href="<?php echo site_url('pembobotan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                        </div> -->
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>{{itemkriteria.name}}</td>
                                        <td ng-repeat="item in datas.candidates">
                                            {{item}}
                                        </td>
                                        <td>Priority</td>
                                    </tr>
                                </thead>
                                <tbody ng-repeat="bobot1 in itemkriteria.matrix">
                                    <tr>
                                        <td>
                                            {{datas.candidates[$index]}}
                                        </td>
                                        <td ng-repeat="item in bobot1">
                                            {{item}}
                                        </td>
                                        <td>
                                            {{itemkriteria.eigen[$index]}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible" ng-show="itemkriteria.cr<0.1">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-check"></i>Nilai CR: {{itemkriteria.cr}} (Konsisten)</h4>
                                </div>
                                <div class="alert alert-danger alert-dismissible" ng-show="itemkriteria.cr>0.1">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-ban"></i>Nilai CR: {{itemkriteria.cr}} (Tidak Konsisten)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    </box>

                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-warning" ng-click="back()">Back</button>
                <button class="btn btn-primary" ng-click="simpan()">Simpan</button>
            </div>
        </div>
    </div>
</div>