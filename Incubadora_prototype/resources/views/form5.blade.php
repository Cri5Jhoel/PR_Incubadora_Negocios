@extends('layouts.app')
@section('script')

@stop
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


        angular.element(document).ready(() => {
            let userId = "{{ Auth::user()->id }}";
            let teamId = "{{ Auth::user()->teamId }}";
            $http.get(`/forms5/${teamId}`).then((result) => {
                $scope.forms = result.data;
                $scope.parseArrayValues();
            })
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
        }


        $scope.postTeam = () => {
            $http.post('/teams', $scope.team).then((result) => {
                console.log(result.data);
                alert("Equipo creado");
            })
        }
        $scope.postForm = () => {
            $scope.checkRadios();
            alert(document.getElementById("input5").value);
            let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope.input4 + ";" + $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" + $scope.input8 + ";" + $scope.input9 + ";" + $scope.input10 + ";" + $scope.input11 + ";" + $scope.input12 + ";" + $scope.input13 + ";" + $scope.input14 + ";" + $scope.input15 + ";" + $scope.input16 + ";" + $scope.input17 + ";" + $scope.input18 + ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope.input21 + ";" + $scope.input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";";
            $scope.forms.formText = texto;
            $http.put('/forms5', $scope.forms).then((result) => {
                console.log(result.data);
                alert("Formulario creado");
            })

        }
        $scope.checkRadios = () => {
            $scope.checkRadio1();
            $scope.checkRadio2();
        }
        $scope.checkRadio1 = () => {
            let inf1 = "";
            let radio1 = document.getElementsByName('radio1');
            for (let i = 0; i < radio1.length; i++) {
                if (radio1[i].checked) {
                    inf1 = radio1[i].value;
                }
            }
            if ( inf1=="option1"){
                $scope.input1 = 'option1';
                $scope.input2 = ' ';
            }else if ( inf1=="option2"){
                $scope.input1 = ' ';
                $scope.input2 = 'option2';
            }
        }
        $scope.checkRadio2 = () => {
            let inf2 = "";
            let radio2 = document.getElementsByName('radio2');
            for (let i = 0; i < radio2.length; i++) {
                if (radio2[i].checked) {
                    inf2 = radio2[i].value;
                }
            }
            if ( inf2=="option1"){
                $scope.input3 = 'option1';
                $scope.input4 = ' ';
            }else if ( inf2=="option2"){
                $scope.input3 = ' ';
                $scope.input4 = 'option2';
            }
        }
    });
</script>
<div class="container" ng-app="myApp" ng-controller="myCtrl">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-card">
                <div id="content" class="p-4 p-md-4 pt-5">
                    <form action="#" class="form">
                        <h1 class="text-center">Precio y Viabilidad del Negocio</h1>
                        <h4 class="text-center app-subtitle">Estrategias de precio de lanzamiento al mercado</h4>
                        <div>
                            <h5>Estas cuatro estrategias se clasifican en función de su precio inicial (lanzamiento al mercado) y el precio en el futuro. ¿Cuáles te parecen interesantes para tu negocio?</h5>
                            <div class="input-group">
                                <label for="username" class="text-left" style="background: #971c2e;padding: 30px;color: white;margin-block-end: 15px;">Alto</label>
                                <div class="row" style="margin-inline-start: 1px;">
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input1" id="input1" name="radio1" value="option1" type="radio">
                                            <label class="hasLabel" for="radio1">Estrategia Descremado</label>
                                        </div>
                                    </checkbox>
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" ng-model="input2" id="input2" name="radio1" value="option2" type="radio">
                                            <label class="hasLabel" for="radio1">Estrategia Premium</label>
                                        </div>
                                    </checkbox>
                                </div>
                                <div class="input-group">
                                    <label for="username" class="text-left" style="background: #971c2e;padding: 30px;color: white;margin-block-end: 15px;">Bajo</label>
                                    <div class="row">
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="border: 1px dashed black;padding: 21px 10px 0px 10px;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" ng-model="input3" id="input3" name="radio2" value="option1" type="radio">
                                                <label class="hasLabel" for="radio2">Estrategia Económica</label>
                                            </div>
                                        </checkbox>
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" ng-model="input4" id="input4" name="radio2" value="option2" type="radio">
                                                <label class="hasLabel" for="radio2">Estrategia de Penetración</label>
                                            </div>
                                        </checkbox>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Otras estrategias de precio</h4>
                        <br>
                        <div>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6 ">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input5" id="input5" name="mdnegocio" value="1" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio1">Precios Psicológicos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input6" id="input6" name="mdnegocio2" value="2" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio2">Estrategia de mercado</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input7" id="input7" name="mdnegocio3" value="3" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio3">Estrategia de líneas de productos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input8" id="input8" name="mdnegocio4" value="4" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio4">Estrategia de agrupación</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input9" id="input9" name="mdnegocio5" value="5" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio5">Estrategia de competición</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input10" id="input10" name="mdnegocio6" value="6" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio6">Estrategia de impresora y tinta</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input11" id="input11" name="mdnegocio7" value="7" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio7">Estrategia de productos opcionales</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" ng-model="input12" id="input12" name="mdnegocio8" value="8" type="checkbox">
                                        <label class="hasLabel" for="mdnegocio8">Precios marcados por el cliente</label>
                                    </div>
                                </checkbox>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea y define la mejor estrategia de precios para cada segmento de mercado seleccionando las estrategias seleccionadas, puedes crear una personalizada</h4>
                                <textarea type="" class="form-control " name="" ng-model="input13" id="input13" aria-describedby="helpId" placeholder=""></textarea>
                                <br>
                                <textarea type="" class="form-control " name="" ng-model="input14" id="input14" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Otras estrategias de precio</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Realiza una encuesta para saber si tus clientes, están dispuestos a pagar por tu producto . Utiliza como referencia el PDF base para la encuesta, el mismo debes solicitarlo a tu mentor</h4>
                                <input type="text" class="form-control" name="" ng-model="input15" id="input15" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Lifetime Value Retention</h4>
                        <div>
                            <div class="">
                                <div class="mb-3">
                                    <label for="" class="form-label">Frecuencia</label>
                                    <input type="text" class="form-control" name="" ng-model="input16" id="input16" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Duración</label>
                                    <input type="text" class="form-control" name="" ng-model="input17" id="input17" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Valor del pedido</label>
                                    <input type="text" class="form-control" name="" ng-model="input18" id="input18" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">LTV</label>
                                    <input type="text" class="form-control" name="" ng-model="input19" id="input19" aria-describedby="helpId" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Menciona las actividades de retención, para mantener a tus clientes</h4>
                        <div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input20" id="input20" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input21" id="input21" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input22" id="input22" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input23" id="input23" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Relación LTV y CAC</h4>
                        <div>
                            <div class="mb-3">
                                <label for="" class="form-label">Relación LTV/CAC</label>
                                <input type="text" class="form-control" name="" ng-model="input24" id="input24" aria-describedby="helpId" placeholder="" readonly>
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