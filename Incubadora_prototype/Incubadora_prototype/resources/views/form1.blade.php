@extends('layouts.app')
@section('content')
<script type="text/javascript">
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http) {

        $scope.forms = {};

        $scope.input1 = "";
        $scope.input2 = "";
        $scope.input3 = "";
        $scope.input4 = "";
        $scope.input5 = "";
        $scope.input6 = "";
        $scope.input7 = "";
        $scope.input8 = "";
        $scope.input9 = "";
        $scope.input10 = "";
        $scope.input11 = "";
        $scope.input12 = "";
        $scope.input13 = "";
        $scope.input14 = "";
        $scope.input15 = "";
        $scope.input16 = "";
        $scope.input17 = "";
        $scope.input18 = "";
        $scope.input19 = "";
        $scope.input20 = "";
        $scope.input21 = "";
        $scope.input22 = "";
        $scope.input23 = "";
        $scope.input24 = "";
        $scope.input25 = "";
        $scope.input26 = "";
        $scope.input27 = "";
        $scope.input28 = "";
        $scope.input29 = "";
        $scope.input30 = "";
        $scope.input31 = "";
        $scope.input32 = "";
        $scope.input33 = "";
        $scope.input34 = "";
        $scope.input35 = "";
        $scope.input36 = "";
        $scope.input37 = "";
        $scope.input38 = "";
        $scope.input39 = "";
        $scope.input40 = "";
        $scope.input41 = "";
        $scope.input42 = "";
        $scope.input43 = "";
        $scope.input44 = "";
        $scope.input45 = "";
        $scope.input46 = "";
        $scope.input47 = "";
        $scope.input48 = "";
        $scope.input49 = "";
        $scope.input50 = "";
        $scope.input51 = "";
        $scope.input52 = "";
        $scope.input53 = "";
        $scope.input54 = "";
        $scope.input55 = "";
        $scope.input56 = "";
        $scope.input57 = "";
        $scope.input58 = "";
        $scope.input59 = "";
        $scope.input60 = "";
        $scope.input61 = "";
        $scope.input62 = "";
        $scope.input63 = "";
        $scope.input64 = "";
        $scope.input65 = "";
        $scope.input66 = "";
        $scope.input67 = "";
        $scope.input68 = "";
        $scope.input69 = "";
        $scope.input70 = "";
        $scope.input71 = "";
        $scope.input72 = "";
        $scope.input73 = "";
        $scope.input74 = "";
        $scope.input75 = "";
        $scope.input76 = "";
        $scope.input77 = "";
        $scope.input78 = "";
        $scope.input79 = "";
        $scope.input80 = "";
        $scope.input81 = "";
        $scope.input82 = "";
        $scope.input83 = "";
        $scope.input84 = "";
        $scope.input85 = "";
        $scope.input86 = "";
        $scope.input87 = "";
        $scope.input88 = "";
        $scope.input89 = "";
        $scope.input90 = "";
        $scope.input91 = "";
        $scope.input92 = "";
        $scope.input93 = "";
        $scope.input94 = "";
        $scope.input95 = "";
        $scope.input96 = "";
        $scope.input97 = "";
        $scope.input98 = "";
        $scope.input99 = "";
        $scope.input100 = "";
        $scope.input101 = "";
        $scope.input102 = "";
        $scope.input103 = "";
        $scope.input104 = "";
        $scope.input105 = "";
        $scope.input106 = "";
        $scope.input107 = "";
        $scope.input108 = "";
        $scope.input109 = "";
        $scope.input110 = "";
        $scope.input111 = "";
        $scope.input112 = "";





        angular.element(document).ready(() => {
            let teamId = 4;
            $http.get(`/forms1/${teamId}`).then((result) => {
                $scope.forms = result.data;
                $scope.parseArrayValues();
            })

            // $http.put('/forms', $scope.form).then((result) => {
            //     $scope.forms = result.data;
            //     $scope.parseArrayValues();
            // })
        });

        $scope.parseArrayValues = () => {
            let formText = $scope.forms.formText;
            let formTextArray = formText.split(';');
            $scope.input1 = formTextArray[0];
            $scope.input2 = formTextArray[1];
            $scope.input3 = formTextArray[2];
            $scope.input4 = formTextArray[3];
            $scope.input5 = formTextArray[4];
            $scope.input6 = formTextArray[5];
            $scope.input7 = formTextArray[6];
            $scope.input8 = formTextArray[7];
            $scope.input9 = formTextArray[8];
            $scope.input10 = formTextArray[9];
            $scope.input11 = formTextArray[10];
            $scope.input12 = formTextArray[11];
            $scope.input13 = formTextArray[12];
            $scope.input14 = formTextArray[13];
            $scope.input15 = formTextArray[14];
            $scope.input16 = formTextArray[15];
            $scope.input17 = formTextArray[16];
            $scope.input18 = formTextArray[17];
            $scope.input19 = formTextArray[18];
            $scope.input20 = formTextArray[19];
            $scope.input21 = formTextArray[20];
            $scope.input22 = formTextArray[21];
            $scope.input23 = formTextArray[22];
            $scope.input24 = formTextArray[23];
            $scope.input25 = formTextArray[24];
            $scope.input26 = formTextArray[25];
            $scope.input27 = formTextArray[26];
            $scope.input28 = formTextArray[27];
            $scope.input29 = formTextArray[28];
            $scope.input30 = formTextArray[29];
            $scope.input31 = formTextArray[30];
            $scope.input32 = formTextArray[31];
            $scope.input33 = formTextArray[32];
            $scope.input34 = formTextArray[33];
            $scope.input35 = formTextArray[34];
            $scope.input36 = formTextArray[35];
            $scope.input37 = formTextArray[36];
            $scope.input38 = formTextArray[37];
            $scope.input39 = formTextArray[38];
            $scope.input40 = formTextArray[39];
            $scope.input41 = formTextArray[40];
            $scope.input42 = formTextArray[41];
            $scope.input43 = formTextArray[42];
            $scope.input44 = formTextArray[43];
            $scope.input45 = formTextArray[44];
            $scope.input46 = formTextArray[45];
            $scope.input47 = formTextArray[46];
            $scope.input48 = formTextArray[47];
            $scope.input49 = formTextArray[48];
            $scope.input50 = formTextArray[49];
            $scope.input51 = formTextArray[50];
            $scope.input52 = formTextArray[51];
            $scope.input53 = formTextArray[52];
            $scope.input54 = formTextArray[53];
            $scope.input55 = formTextArray[54];
            $scope.input56 = formTextArray[55];
            $scope.input57 = formTextArray[56];
            $scope.input58 = formTextArray[57];
            $scope.input59 = formTextArray[58];
            $scope.input60 = formTextArray[59];
            $scope.input61 = formTextArray[60];
            $scope.input62 = formTextArray[61];
            $scope.input63 = formTextArray[62];
            $scope.input64 = formTextArray[63];
            $scope.input65 = formTextArray[64];
            $scope.input66 = formTextArray[65];
            $scope.input67 = formTextArray[66];
            $scope.input68 = formTextArray[67];
            $scope.input69 = formTextArray[68];
            $scope.input70 = formTextArray[69];
            $scope.input71 = formTextArray[70];
            $scope.input72 = formTextArray[71];
            $scope.input73 = formTextArray[72];
            $scope.input74 = formTextArray[73];
            $scope.input75 = formTextArray[74];
            $scope.input76 = formTextArray[75];
            $scope.input77 = formTextArray[76];
            $scope.input78 = formTextArray[77];
            $scope.input79 = formTextArray[78];
            $scope.input80 = formTextArray[79];
            $scope.input81 = formTextArray[80];
            $scope.input82 = formTextArray[81];
            $scope.input83 = formTextArray[82];
            $scope.input84 = formTextArray[83];
            $scope.input85 = formTextArray[84];
            $scope.input86 = formTextArray[85];
            $scope.input87 = formTextArray[86];
            $scope.input88 = formTextArray[87];
            $scope.input89 = formTextArray[88];
            $scope.input90 = formTextArray[89];
            $scope.input91 = formTextArray[90];
            $scope.input92 = formTextArray[91];
            $scope.input93 = formTextArray[92];
            $scope.input94 = formTextArray[93];
            $scope.input95 = formTextArray[94];
            $scope.input96 = formTextArray[95];
            $scope.input97 = formTextArray[96];
            $scope.input98 = formTextArray[97];
            $scope.input99 = formTextArray[98];
            $scope.input100 = formTextArray[99];
            $scope.input101 = formTextArray[100];
            $scope.input102 = formTextArray[101];
            $scope.input103 = formTextArray[102];
            $scope.input104 = formTextArray[103];
            $scope.input105 = formTextArray[104];
            $scope.input106 = formTextArray[105];
            $scope.input107 = formTextArray[106];
            $scope.input108 = formTextArray[107];
            $scope.input109 = formTextArray[108];
            $scope.input110 = formTextArray[109];
            $scope.input111 = formTextArray[110];
            $scope.input112 = formTextArray[111];
        }


        $scope.postTeam = () => {
            $http.post('/teams', $scope.team).then((result) => {
                console.log(result.data);
                alert("Equipo creado");
            })
        }
        $scope.postForm = () => {
            let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope.input4 + ";" + $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" + $scope.input8 + ";" + $scope.input9 + ";" + $scope.input10 + ";" + $scope.input11 + ";" + $scope.input12 + ";" + $scope.input13 + ";" + $scope.input14 + ";" + $scope.input15 + ";" + $scope.input16 + ";" + $scope.input17 + ";" + $scope.input18 + ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope.input21 + ";" + $scope.input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";" + $scope.input25 + ";" + $scope.input26 + ";" + $scope.input27 + ";" + $scope.input28 + ";" + $scope.input29 + ";" + $scope.input30 + ";" + $scope.input31 + ";" + $scope.input32 + ";" + $scope.input33 + ";" + $scope.input34 + ";" + $scope.input35 + ";" + $scope.input36 + ";" + $scope.input37 + ";" + $scope.input38 + ";" + $scope.input39 + ";" + $scope.input40 + ";" + $scope.input41 + ";" + $scope.input42 + ";" + $scope.input43 + ";" + $scope.input44 + ";" + $scope.input45 + ";" + $scope.input46 + ";" + $scope.input47 + ";" + $scope.input48 + ";" + $scope.input49 + ";" + $scope.input50 + ";" + $scope.input51 + ";" + $scope.input52 + ";" + $scope.input53 + ";" + $scope.input54 + ";" + $scope.input55 + ";" + $scope.input56 + ";" + $scope.input57 + ";" + $scope.input58 + ";" + $scope.input59 + ";" + $scope.input60 + ";" + $scope.input61 + ";" + $scope.input62 + ";" + $scope.input63 + ";" + $scope.input64 + ";" + $scope.input65 + ";" + $scope.input66 + ";" + $scope.input67 + ";" + $scope.input68 + ";" + $scope.input69 + ";" + $scope.input70 + ";" + $scope.input71 + ";" + $scope.input72 + ";" + $scope.input73 + ";" + $scope.input74 + ";" + $scope.input75 + ";" + $scope.input76 + ";" + $scope.input77 + ";" + $scope.input78 + ";" + $scope.input79 + ";" + $scope.input80 + ";" + $scope.input81 + ";" + $scope.input82 + ";" + $scope.input83 + ";" + $scope.input84 + ";" + $scope.input85 + ";" + $scope.input86 + ";" + $scope.input87 + ";" + $scope.input88 + ";" + $scope.input89 + ";" + $scope.input90 + ";" + $scope.input91 + ";" + $scope.input92 + ";" + $scope.input93 + ";" + $scope.input94 + ";" + $scope.input95 + ";" + $scope.input96 + ";" + $scope.input97 + ";" + $scope.input98 + ";" + $scope.input99 + ";" + $scope.input100 + ";" + $scope.input101 + ";" + $scope.input102 + ";" + $scope.input103 + ";" + $scope.input104 + ";" + $scope.input105 + ";" + $scope.input106 + ";" + $scope.input107 + ";" + $scope.input108 + ";" + $scope.input109 + ";" + $scope.input110 + ";" + $scope.input111 + ";" + $scope.input112;
            $scope.forms.formText = texto;
            $http.put('/forms1', $scope.forms).then((result) => {
                console.log(result.data);
                alert("Formulario creado");
            })
            
        }
        $scope.myFunc = function() {
            
        };
    });
    // angular.module('myApp', [])
    //     .controller('myCtrl', ['$scope', function($scope) {

    //         $scope.clickButton = function() {

    //         };
    //     }]);
</script>
<div class="container" ng-app="myApp" ng-controller="myCtrl">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-card">
                <div id="content" class="p-4 p-md-5 pt-5">
                    <form action="#" class="form">
                        <h1 class="text-center">Propuesta de Valor</h1>
                        <h4 class="text-center app-subtitle">Árbol de problemas</h4>
                        <div>

                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás resolviendo?</h4>
                                <input ng-change="myFunc()" type="text" class="form-control" name="" ng-model="input1" id="input1" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="table-responsive">
                                <h4>¿Cuáles son las principales razones por las que existe este problema?</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Razon 1</label>
                                                    <input type="text" class="form-control" name="" ng-model="input2" id="input2" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Razon 2</label>
                                                    <input type="text" class="form-control" name="" ng-model="input3" id="input3" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Razon 3</label>
                                                    <input type="text" class="form-control" name="" ng-model="input4" id="input4" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Causa 1</td>
                                            <td>Causa 2</td>
                                            <td>Causa 3</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input5" id="input5" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input6" id="input6" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input7" id="input7" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input8" id="input8" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input9" id="input9" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input10" id="input10" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input11" id="input11" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input12" id="input12" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input13" id="input13" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input14" id="input14" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input15" id="input15" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input16" id="input16" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input17" id="input17" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input18" id="input18" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input19" id="input19" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input20" id="input20" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input21" id="input21" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input22" id="input22" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Relación Problema/Solución</h4>
                        <div>
                            <div class="table-responsive">
                                <h5>De entre y razones y causas que has enumerado, elige aquellos que quieras que tu negocio resuelva</h5>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input23" id="input23" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input24" id="input24" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input25" id="input25" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input26" id="input26" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input27" id="input27" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input28" id="input28" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input29" id="input29" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input30" id="input30" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input31" id="input31" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input32" id="input32" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input33" id="input33" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input34" id="input34" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input35" id="input35" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input36" id="input36" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input37" id="input37" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cómo va a intentar solucionar tu negocio esos problemas?</h4>
                                <textarea type="" class="form-control " name="" ng-model="input38" id="input38" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Oferta</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza la descripción de tu solución para crear tu producto/servicio.</h4>
                                <textarea type="" class="form-control " name="" ng-model="input39" id="input39" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Segmento</h4>
                        <div>
                            <h4>¿Cuáles son los distintos grupos de personas que utilizarán o comprarán tu producto/servicio)? Esos son tus segmentos de mercado.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="1" type="checkbox" ng-model="input40" id="input40">
                                        <label class="hasLabel" for="mdnegocio1">B2B</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio2" value="1" type="checkbox" ng-model="input41" id="input41">
                                        <label class="hasLabel" for="mdnegocio2">B2C</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio3" value="1" type="checkbox" ng-model="input42" id="input42">
                                        <label class="hasLabel" for="mdnegocio3">B2G</label>
                                    </div>
                                </checkbox>
                                <h5>Si marcaste B2C</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input43" id="input43" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input44" id="input44" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                        <input type="text" class="form-control" name="" ng-model="input45" id="input45" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <h5>Si marcaste B2B</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input46" id="input46" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables de comportamiento</h4>
                                        <input type="text" class="form-control" name="" ng-model="input47" id="input47" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables de crecimiento</h4>
                                        <input type="text" class="form-control" name="" ng-model="input48" id="input48" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Describe el segmento, considerando todas las variables</h4>
                                        <input type="text" class="form-control" name="" ng-model="input49" id="input49" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Problema</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Enumera todos los problemas que se encuentran tus clientes en la actual oferta de mercado.</h4>
                                <input type="" class="form-control " name="" ng-model="input50" id="input50" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input51" id="input51" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input52" id="input52" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input53" id="input53" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input54" id="input54" aria-describedby="helpId" placeholder=""></input>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuáles son los beneficios que tu solución puede dar a cada segmento de cliente?</h4>
                                <input type="" class="form-control " name="" ng-model="input55" id="input55" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input56" id="input56" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input57" id="input57" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input58" id="input58" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input59" id="input59" aria-describedby="helpId" placeholder=""></input>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Tamaño del mercado</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Haz una estimación del tamaño del mercado para cada uno de tus segmentos de mercado.</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuánta gente entraría dentro de este segmento de mercado?</label>
                                    <input type="text" class="form-control" name="" ng-model="input60" id="input60" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías llegar?</label>
                                    <input type="text" class="form-control" name="" ng-model="input61" id="input61" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes a los que podrás llegar</label>
                                    <input type="text" class="form-control" name="" ng-model="input62" id="input62" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto en vez de los de tus competidores?</label>
                                    <input type="text" class="form-control" name="" ng-model="input63" id="input63" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes que podrían estar interesados en comprar tu producto</label>
                                    <input type="text" class="form-control" name="" ng-model="input64" id="input64" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Acciones necesarias</h4>
                        <div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Funcional</small>
                                <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes quieren obtener?</h4>
                                <input type="" class="form-control " name="" ng-model="input65" id="input65" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input66" id="input66" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input67" id="input67" aria-describedby="helpId" placeholder=""></input>
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Personal</small>
                                <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                                <input type="" class="form-control " name="" ng-model="input68" id="input68" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input69" id="input69" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input70" id="input70" aria-describedby="helpId" placeholder=""></input>
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Social</small>
                                <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                                <input type="" class="form-control " name="" ng-model="input71" id="input71" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input72" id="input72" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" ng-model="input73" id="input73" aria-describedby="helpId" placeholder=""></input>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Selección de resultados</h4>
                        <div>
                            <div class="table-responsive">
                                <h4>De entre todas las acciones, elige aquellas que tus clientes valoren más. Luego califique la importancia de un 0 a un 100%</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Accion</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Segmento</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">% de Importancia</label>

                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input74" id="input74" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input75" id="input75" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input76" id="input76" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input77" id="input77" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input78" id="input78" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input79" id="input79" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input80" id="input80" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input81" id="input81" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input82" id="input82" placeholder="">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <h4>¿Cómo de insatisfecho está este segmento de mercado con la oferta de mercado actual para conseguir lo que necesitas?</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Accion</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">Segmento</label>

                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">% de Importancia</label>

                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input83" id="input83" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input84" id="input84" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input85" id="input85" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input86" id="input86" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input87" id="input87" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input88" id="input88" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input89" id="input89" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input90" id="input90" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input91" id="input91" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input92" id="input92" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input93" id="input93" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input94" id="input94" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input95" id="input95" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input96" id="input96" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input97" id="input97" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input98" id="input98" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input99" id="input99" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input100" id="input100" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input101" id="input101" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input102" id="input102" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input103" id="input103" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input104" id="input104" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input105" id="input105" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input106" id="input106" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input107" id="input107" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input108" id="input108" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input109" id="input109" placeholder="">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Decisión del segmento a enfocarse en base a importancia e insatisfacción del mercado</label>
                                <input type="text" class="form-control" name="" ng-model="input110" id="input110" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora puedes redactar la propuesta de valor</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza el ejemplo para escribir la presentación de tu Propuesta de Valor para cada uno de los segmentos de mercado que has elegido.</h4>
                                <label for="">Estructura recomendada</label>
                                <textarea type="" class="form-control " name="" ng-model="input111" id="input111" aria-describedby="helpId" placeholder=""></textarea>
                                <label for="">Redacta en este recuadro tu propuesta de valor</label>
                                <textarea type="" class="form-control " name="" ng-model="input112" id="input112" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        @if (Auth::user()->userType == 'teacher')
                        @endif
                        @if (Auth::user()->userType == 'student')
                        <div class="d-flex justify-content-center">
                            <button type="submit" ng-click="postForm()" class="btn btn-success">Guardar</button>
                        </div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection