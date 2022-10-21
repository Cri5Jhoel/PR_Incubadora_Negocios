@extends('layouts.app')
@section('script')

@stop
@section('content')

<div class="container" ng-app="myApp" ng-controller="myCtrl">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-card">
                <div id="content" class="p-4 p-md-5 pt-5">

                    <form action="#" class="form">
                        <h1 class="text-center">Modelo de Negocio y Marketing</h1>
                        <h4 class="text-center app-subtitle">Responde a las siguientes preguntas evaluando en qué punto de la escala se encuentra cada segmento de cliente</h4>
                        <div>
                            <div>
                                <h4>¿Este segmento de mercado paga por nuestro producto o servicio?</h4>
                                <div class="row">
                                    <input type="text" class="form-control" name="" ng-model="input1" id="input1" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio1" ng-model="input2" id="input2" value="option1">
                                            <label class="form-check-label" for="radio1">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio1" ng-model="input3" id="input3" value="option2">
                                            <label class="form-check-label" for="radio1">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio1" ng-model="input4" id="input4" value="option3">
                                            <label class="form-check-label" for="radio1">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio1" ng-model="input5" id="input5" value="option4">
                                            <label class="form-check-label" for="radio1">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio1" ng-model="input6" id="input6" value="option5">
                                            <label class="form-check-label" for="radio1">Sí</label>
                                        </div>
                                    </div>


                                    <input type="text" class="form-control" name="" ng-model="input7" id="input7" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio2" ng-model="input8" id="input8" value="option1">
                                            <label class="form-check-label" for="radio2">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio2" ng-model="input9" id="input9" value="option2">
                                            <label class="form-check-label" for="radio2">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio2" ng-model="input10" id="input10" value="option3">
                                            <label class="form-check-label" for="radio2">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio2" ng-model="input11" id="input11" value="option4">
                                            <label class="form-check-label" for="radio2">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio2" ng-model="input12" id="input12" value="option5">
                                            <label class="form-check-label" for="radio2">Sí</label>
                                        </div>
                                    </div>
                                    <!-- !-->
                                    <input type="text" class="form-control" name="" ng-model="input13" id="input13" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio3" ng-model="input14" id="input14" value="option1">
                                            <label class="form-check-label" for="radio3">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio3" ng-model="input15" id="input15" value="option2">
                                            <label class="form-check-label" for="radio3">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio3" ng-model="input16" id="input16" value="option3">
                                            <label class="form-check-label" for="radio3">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio3" ng-model="input17" id="input17" value="option4">
                                            <label class="form-check-label" for="radio3">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio3" ng-model="input18" id="input18" value="option5">
                                            <label class="form-check-label" for="radio3">Sí</label>
                                        </div>
                                    </div>
                                </div>
                                <h4>¿Con qué frecuencia paga este segmento?</h4>
                                <div class="row">
                                    <input type="text" class="form-control" name="" ng-model="input19" id="input19" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio4" ng-model="input20" id="input20" value="option1">
                                            <label class="form-check-label" for="radio4">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio4" ng-model="input21" id="input21" value="option2">
                                            <label class="form-check-label" for="radio4">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio4" ng-model="input22" id="input22" value="option3">
                                            <label class="form-check-label" for="radio4">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio4" ng-model="input23" id="input23" value="option4">
                                            <label class="form-check-label" for="radio4">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio4" ng-model="input24" id="input24" value="option5">
                                            <label class="form-check-label" for="radio4">Sí</label>
                                        </div>
                                    </div>


                                    <input type="text" class="form-control" name="" ng-model="input25" id="input25" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio5" ng-model="input26" id="input26" value="option1">
                                            <label class="form-check-label" for="radio5">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio5" ng-model="input27" id="input27" value="option2">
                                            <label class="form-check-label" for="radio5">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio5" ng-model="input28" id="input28" value="option3">
                                            <label class="form-check-label" for="radio5">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio5" ng-model="input29" id="input29" value="option4">
                                            <label class="form-check-label" for="radio5">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio5" ng-model="input30" id="input30" value="option5">
                                            <label class="form-check-label" for="radio5">Sí</label>
                                        </div>
                                    </div>
                                    <!-- !-->
                                    <input type="text" class="form-control" name="" ng-model="input31" id="input31" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio6" ng-model="input32" id="input32" value="option1">
                                            <label class="form-check-label" for="radio6">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio6" ng-model="input33" id="input33" value="option2">
                                            <label class="form-check-label" for="radio6">No mucho</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio6" ng-model="input34" id="input34" value="option3">
                                            <label class="form-check-label" for="radio6">N/S</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio6" ng-model="input35" id="input35" value="option4">
                                            <label class="form-check-label" for="radio6">Probablemente</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio6" ng-model="input36" id="input36" value="option5">
                                            <label class="form-check-label" for="radio6">Sí</label>
                                        </div>
                                    </div>
                                </div>
                                <h4>¿Vendes directamente a este segmento de mercado?</h4>
                                <div class="row">
                                    <input type="text" class="form-control" name="" ng-model="input37" id="input37" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio7" ng-model="input38" id="input38" value="option1">
                                            <label class="form-check-label" for="radio7">Varios intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio7" ng-model="input39" id="input39" value="option2">
                                            <label class="form-check-label" for="radio7">Dos intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio7" ng-model="input40" id="input40" value="option3">
                                            <label class="form-check-label" for="radio7">Un intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio7" ng-model="input41" id="input41" value="option4">
                                            <label class="form-check-label" for="radio7">Venta directa</label>
                                        </div>
                                    </div>


                                    <input type="text" class="form-control" name="" ng-model="input411" id="input411" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio8" ng-model="input42" id="input42" value="option1">
                                            <label class="form-check-label" for="radio8">Varios intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio8" ng-model="input43" id="input43" value="option2">
                                            <label class="form-check-label" for="radio8">Dos intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio8" ng-model="input44" id="input44" value="option3">
                                            <label class="form-check-label" for="radio8">Un intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio8" ng-model="input45" id="input45" value="option4">
                                            <label class="form-check-label" for="radio8">Venta directa</label>
                                        </div>
                                    </div>
                                    <!-- !-->
                                    <input type="text" class="form-control" name="" ng-model="input46" id="input46" aria-describedby="helpId" placeholder="">
                                    <div class="flex">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio9" ng-model="input47" id="input47" value="option1">
                                            <label class="form-check-label" for="radio9">Varios intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio9" ng-model="input48" id="input48" value="option2">
                                            <label class="form-check-label" for="radio9">Dos intermediarios</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio9" ng-model="input49" id="input49" value="option3">
                                            <label class="form-check-label" for="radio9">Un intermediario</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="radio9" ng-model="input50" id="input50" value="option4">
                                            <label class="form-check-label" for="radio9">Venta directa</label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <h4 class="text-center app-subtitle">Modelo de negocios</h4>
                        <div>
                            <h4>Selecciona todos los modelos de negocio que podrían interesarte para tu empresa.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check1" value="1" type="checkbox" ng-model="input51" id="input51">
                                        <label class="hasLabel" for="check1">Venta directa</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check2" value="1" type="checkbox" ng-model="input52" id="input52">
                                        <label class="hasLabel" for="check2">Suscripción</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check3" value="1" type="checkbox" ng-model="input53" id="input53">
                                        <label class="hasLabel" for="check3">Pay as you Go</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check4" value="1" type="checkbox" ng-model="input54" id="input54">
                                        <label class="hasLabel" for="check4">Alquiler</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check5" value="1" type="checkbox" ng-model="input55" id="input55">
                                        <label class="hasLabel" for="check5">Broker</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check6" value="1" type="checkbox" ng-model="input56" id="input56">
                                        <label class="hasLabel" for="check6">Low-Touch</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check7" value="1" type="checkbox" ng-model="input57" id="input57">
                                        <label class="hasLabel" for="check7">Saas</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check8" value="1" type="checkbox" ng-model="input58" id="input58">
                                        <label class="hasLabel" for="check8">Modelo de datos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check9" value="1" type="checkbox" ng-model="input59" id="input59">
                                        <label class="hasLabel" for="check9">Modelo de publicidad</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="check10" value="1" type="checkbox" ng-model="input60" id="input60">
                                        <label class="hasLabel" for="check10">Producto como servicio</label>
                                    </div>
                                </checkbox>


                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Conceptualización del modelo de negocios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Escribe una breve descripción de lo que te interesa de cada uno de los modelos de negocio que has seleccionado.</h4>
                                <textarea type="text" class="form-control" name="" ng-model="input61" id="input61" aria-describedby="helpId" placeholder=""></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input62" id="input62" aria-describedby="helpId" placeholder=""></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input63" id="input63" aria-describedby="helpId" placeholder=""></textarea>
                                <textarea type="text" class="form-control" name="" ng-model="input64" id="input64" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Creación del modelo de negocios</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea y define el mejor modelo de negocio para cada segmento de mercado seleccionando los modelos que te interesen de la lista (máx. 3) y escribe una breve descripción.</h4>
                                <textarea type="" class="form-control " name="" ng-model="input65" id="input65" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Embudo de MKT</h4>
                        <div>
                            <h4>Parte superior del embudo</h4>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="" ng-model="input66" id="input66" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input67" id="input67" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input68" id="input68" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input69" id="input69" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input70" id="input70" aria-describedby="helpId" placeholder="">
                            </div>
                            <h4>Parte media del embudo</h4>
                            <div>
                                <input type="text" class="form-control" name="" ng-model="input71" id="input71" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input72" id="input72" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input73" id="input73" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input74" id="input74" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input75" id="input75" aria-describedby="helpId" placeholder="">
                            </div>
                            <h4>Parte inferior del embudo</h4>
                            <div>
                                <input type="text" class="form-control" name="" ng-model="input76" id="input76" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input77" id="input77" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input78" id="input78" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input79" id="input79" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input80" id="input80" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="table-responsive">
                                <h4>Selecciona las actividades en las que deseas centrarte en cada nivel del embudo.</h4>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">TOFU</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">MOFU</label>
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <label for="" class="form-label">BOFU</label>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input81" id="input81" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input82" id="input82" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input83" id="input83" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input84" id="input84" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input85" id="input85" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input86" id="input86" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input87" id="input87" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input88" id="input88" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input89" id="input89" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input90" id="input90" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input91" id="input91" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input92" id="input92" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora calcúla tu embudo en cada etapa, respondiendo las siguientes preguntas</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos visitantes esperas recibir al mes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input93" id="input92" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos clientes potenciales, esperas obtener al mes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input94" id="input94" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="form-label">¿Cuántos clientes reales, esperas obtener al mes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input95" id="input95" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora calculemos el CAC</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuánto te costará llevar a cabo todas las actividades de marketing en un mes?</h4>
                                <input type="text" class="form-control" name="" ng-change="func1()" ng-model="input96" id="input96" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="table-responsive">
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                            </th>
                                            <th scope="col">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <h5 for="" class="form-label">CAC </h5>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" ng-model="input98" id="input98" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="mb-3">
                                <h4 for="" class="text-left">Ahora por cada segmento de mercado, explica por qué el modelo que has elegido es el adecuado y cómo planeas llegar a ellos.</h4>
                                <textarea type="text" class="form-control" name="" ng-model="input97" id="input97" aria-describedby="helpId" placeholder=""></textarea>
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
                        $scope.input411 = "";
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




                        angular.element(document).ready(() => {
                            let teamId = 4;
                            $http.get(`/forms4/${teamId}`).then((result) => {
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
                            $scope.input411 = formTextArray[41];
                            $scope.input42 = formTextArray[42];
                            $scope.input43 = formTextArray[43];
                            $scope.input44 = formTextArray[44];
                            $scope.input45 = formTextArray[45];
                            $scope.input46 = formTextArray[46];
                            $scope.input47 = formTextArray[47];
                            $scope.input48 = formTextArray[48];
                            $scope.input49 = formTextArray[49];
                            $scope.input50 = formTextArray[50];
                            $scope.input51 = formTextArray[51];
                            $scope.input52 = formTextArray[52];
                            $scope.input53 = formTextArray[53];
                            $scope.input54 = formTextArray[54];
                            $scope.input55 = formTextArray[55];
                            $scope.input56 = formTextArray[56];
                            $scope.input57 = formTextArray[57];
                            $scope.input58 = formTextArray[58];
                            $scope.input59 = formTextArray[59];
                            $scope.input60 = formTextArray[60];
                            $scope.input61 = formTextArray[61];
                            $scope.input62 = formTextArray[62];
                            $scope.input63 = formTextArray[63];
                            $scope.input64 = formTextArray[64];
                            $scope.input65 = formTextArray[65];
                            $scope.input66 = formTextArray[66];
                            $scope.input67 = formTextArray[67];
                            $scope.input68 = formTextArray[68];
                            $scope.input69 = formTextArray[69];
                            $scope.input70 = formTextArray[70];
                            $scope.input71 = formTextArray[71];
                            $scope.input72 = formTextArray[72];
                            $scope.input73 = formTextArray[73];
                            $scope.input74 = formTextArray[74];
                            $scope.input75 = formTextArray[75];
                            $scope.input76 = formTextArray[76];
                            $scope.input77 = formTextArray[77];
                            $scope.input78 = formTextArray[78];
                            $scope.input79 = formTextArray[79];
                            $scope.input80 = formTextArray[80];
                            $scope.input81 = formTextArray[81];
                            $scope.input82 = formTextArray[82];
                            $scope.input83 = formTextArray[83];
                            $scope.input84 = formTextArray[84];
                            $scope.input85 = formTextArray[85];
                            $scope.input86 = formTextArray[86];
                            $scope.input87 = formTextArray[87];
                            $scope.input88 = formTextArray[88];
                            $scope.input89 = formTextArray[89];
                            $scope.input90 = formTextArray[90];
                            $scope.input91 = formTextArray[91];
                            $scope.input92 = formTextArray[92];
                            $scope.input93 = formTextArray[93];
                            $scope.input94 = formTextArray[94];
                            $scope.input95 = formTextArray[95];
                            $scope.input96 = formTextArray[96];
                            $scope.input97 = formTextArray[98];
                            $scope.input98 = formTextArray[97];
                        }
                        $scope.func1 = function() {
                            $scope.input98 = document.getElementById("input96").value / document.getElementById("input95").value;
                        };

                        $scope.postTeam = () => {
                            $http.post('/teams', $scope.team).then((result) => {
                                console.log(result.data);
                                alert("Equipo creado");
                            })
                        }

                        $scope.postForm = () => {
                            $scope.checkRadios();
                            let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope.input4 + ";" + $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" + $scope.input8 + ";" + $scope.input9 + ";" + $scope.input10 + ";" + $scope.input11 + ";" + $scope.input12 + ";" + $scope.input13 + ";" + $scope.input14 + ";" + $scope.input15 + ";" + $scope.input16 + ";" + $scope.input17 + ";" + $scope.input18 + ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope.input21 + ";" + $scope.input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";" + $scope.input25 + ";" + $scope.input26 + ";" + $scope.input27 + ";" + $scope.input28 + ";" + $scope.input29 + ";" + $scope.input30 + ";" + $scope.input31 + ";" + $scope.input32 + ";" + $scope.input33 + ";" + $scope.input34 + ";" + $scope.input35 + ";" + $scope.input36 + ";" + $scope.input37 + ";" + $scope.input38 + ";" + $scope.input39 + ";" + $scope.input40 + ";" + $scope.input41 + ";" + $scope.input411 + ";" + $scope.input42 + ";" + $scope.input43 + ";" + $scope.input44 + ";" + $scope.input45 + ";" + $scope.input46 + ";" + $scope.input47 + ";" + $scope.input48 + ";" + $scope.input49 + ";" + $scope.input50 + ";" + $scope.input51 + ";" + $scope.input52 + ";" + $scope.input53 + ";" + $scope.input54 + ";" + $scope.input55 + ";" + $scope.input56 + ";" + $scope.input57 + ";" + $scope.input58 + ";" + $scope.input59 + ";" + $scope.input60 + ";" + $scope.input61 + ";" + $scope.input62 + ";" + $scope.input63 + ";" + $scope.input64 + ";" + $scope.input65 + ";" + $scope.input66 + ";" + $scope.input67 + ";" + $scope.input68 + ";" + $scope.input69 + ";" + $scope.input70 + ";" + $scope.input71 + ";" + $scope.input72 + ";" + $scope.input73 + ";" + $scope.input74 + ";" + $scope.input75 + ";" + $scope.input76 + ";" + $scope.input77 + ";" + $scope.input78 + ";" + $scope.input79 + ";" + $scope.input80 + ";" + $scope.input81 + ";" + $scope.input82 + ";" + $scope.input83 + ";" + $scope.input84 + ";" + $scope.input85 + ";" + $scope.input86 + ";" + $scope.input87 + ";" + $scope.input88 + ";" + $scope.input89 + ";" + $scope.input90 + ";" + $scope.input91 + ";" + $scope.input92 + ";" + $scope.input93 + ";" + $scope.input94 + ";" + $scope.input95 + ";" + $scope.input96 + ";" + $scope.input98 + ";" + $scope.input97;
                            $scope.forms.formText = texto;
                            $http.put('/forms4', $scope.forms).then((result) => {
                                console.log(result.data);
                                alert("Formulario creado");
                            })
                        }
                        $scope.checkRadios = () => {
                            $scope.checkRadio1();
                            $scope.checkRadio2();
                            $scope.checkRadio3();
                            $scope.checkRadio4();
                            $scope.checkRadio5();
                            $scope.checkRadio6();
                            $scope.checkRadio7();
                            $scope.checkRadio8();
                            $scope.checkRadio9();
                        }
                        $scope.checkRadio1 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf1 = "";
                            let radio1 = document.getElementsByName('radio1');
                            for (let i = 0; i < radio1.length; i++) {
                                if (radio1[i].checked) {
                                    inf1 = radio1[i].value;
                                }
                            }
                            if (inf1 == "option1") {
                                $scope.input2 = 'option1';
                                $scope.input3 = ' ';
                                $scope.input4 = ' ';
                                $scope.input5 = ' ';
                                $scope.input6 = ' ';

                            } else if (inf1 == "option2") {
                                $scope.input2 = ' ';
                                $scope.input3 = 'option2';
                                $scope.input4 = ' ';
                                $scope.input5 = ' ';
                                $scope.input6 = ' ';
                            } else if (inf1 == "option3") {
                                $scope.input2 = ' ';
                                $scope.input3 = ' ';
                                $scope.input4 = 'option3';
                                $scope.input5 = ' ';
                                $scope.input6 = ' ';
                            } else if (inf1 == "option4") {
                                $scope.input2 = ' ';
                                $scope.input3 = ' ';
                                $scope.input4 = ' ';
                                $scope.input5 = 'option4';
                                $scope.input6 = ' ';
                            } else if (inf1 == "option5") {
                                $scope.input2 = ' ';
                                $scope.input3 = ' ';
                                $scope.input4 = ' ';
                                $scope.input5 = ' ';
                                $scope.input6 = 'option5';
                            } else {
                                $scope.input2 = ' ';
                                $scope.input3 = ' ';
                                $scope.input4 = ' ';
                                $scope.input5 = ' ';
                                $scope.input6 = ' ';
                            }
                        }
                        $scope.checkRadio2 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf2 = "";
                            let radio2 = document.getElementsByName('radio2');
                            for (let i = 0; i < radio2.length; i++) {
                                if (radio2[i].checked) {
                                    inf2 = radio2[i].value;
                                }
                            }
                            if (inf2 == "option1") {
                                $scope.input8 = 'option1';
                                $scope.input9 = ' ';
                                $scope.input10 = ' ';
                                $scope.input11 = ' ';
                                $scope.input12 = ' ';
                            } else if (inf2 == "option2") {
                                $scope.input8 = ' ';
                                $scope.input9 = 'option2';
                                $scope.input10 = ' ';
                                $scope.input11 = ' ';
                                $scope.input12 = ' ';
                            } else if (inf2 == "option3") {
                                $scope.input8 = ' ';
                                $scope.input9 = ' ';
                                $scope.input10 = 'option3';
                                $scope.input11 = ' ';
                                $scope.input12 = ' ';
                            } else if (inf2 == "option4") {
                                $scope.input8 = ' ';
                                $scope.input9 = ' ';
                                $scope.input10 = ' ';
                                $scope.input11 = 'option4';
                                $scope.input12 = ' ';
                            } else if (inf2 == "option5") {
                                $scope.input8 = ' ';
                                $scope.input9 = ' ';
                                $scope.input10 = ' ';
                                $scope.input11 = ' ';
                                $scope.input12 = 'option5';
                            } else {
                                $scope.input8 = ' ';
                                $scope.input9 = ' ';
                                $scope.input10 = ' ';
                                $scope.input11 = ' ';
                                $scope.input12 = ' ';
                            }
                        }
                        $scope.checkRadio3 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf3 = "";
                            let radio3 = document.getElementsByName('radio3');
                            for (let i = 0; i < radio3.length; i++) {
                                if (radio3[i].checked) {
                                    inf3 = radio3[i].value;
                                }
                            }
                            if (inf3 == "option1") {
                                $scope.input14 = 'option1';
                                $scope.input15 = ' ';
                                $scope.input16 = ' ';
                                $scope.input17 = ' ';
                                $scope.input18 = ' ';
                            } else if (inf3 == "option2") {
                                $scope.input14 = ' ';
                                $scope.input15 = 'option2';
                                $scope.input16 = ' ';
                                $scope.input17 = ' ';
                                $scope.input18 = ' ';
                            } else if (inf3 == "option3") {
                                $scope.input14 = ' ';
                                $scope.input15 = ' ';
                                $scope.input16 = 'option3';
                                $scope.input17 = ' ';
                                $scope.input18 = ' ';
                            } else if (inf3 == "option4") {
                                $scope.input14 = ' ';
                                $scope.input15 = ' ';
                                $scope.input16 = ' ';
                                $scope.input17 = 'option4';
                                $scope.input18 = ' ';
                            } else if (inf3 == "option5") {
                                $scope.input14 = ' ';
                                $scope.input15 = ' ';
                                $scope.input16 = ' ';
                                $scope.input17 = ' ';
                                $scope.input18 = 'option5';
                            } else {
                                $scope.input14 = ' ';
                                $scope.input15 = ' ';
                                $scope.input16 = ' ';
                                $scope.input17 = ' ';
                                $scope.input18 = ' ';
                            }
                        }
                        $scope.checkRadio4 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf4 = "";
                            let radio4 = document.getElementsByName('radio4');
                            for (let i = 0; i < radio4.length; i++) {
                                if (radio4[i].checked) {
                                    inf4 = radio4[i].value;
                                }
                            }
                            if (inf4 == "option1") {
                                $scope.input20 = 'option1';
                                $scope.input21 = ' ';
                                $scope.input22 = ' ';
                                $scope.input23 = ' ';
                                $scope.input24 = ' ';
                            } else if (inf4 == "option2") {
                                $scope.input20 = ' ';
                                $scope.input21 = 'option2';
                                $scope.input22 = ' ';
                                $scope.input23 = ' ';
                                $scope.input24 = ' ';
                            } else if (inf4 == "option3") {
                                $scope.input20 = ' ';
                                $scope.input21 = ' ';
                                $scope.input22 = 'option3';
                                $scope.input23 = ' ';
                                $scope.input24 = ' ';
                            } else if (inf4 == "option4") {
                                $scope.input20 = ' ';
                                $scope.input21 = ' ';
                                $scope.input22 = ' ';
                                $scope.input23 = 'option4';
                                $scope.input24 = ' ';
                            } else if (inf4 == "option5") {
                                $scope.input20 = ' ';
                                $scope.input21 = ' ';
                                $scope.input22 = ' ';
                                $scope.input23 = ' ';
                                $scope.input24 = 'option5';
                            } else {
                                $scope.input20 = ' ';
                                $scope.input21 = ' ';
                                $scope.input22 = ' ';
                                $scope.input23 = ' ';
                                $scope.input24 = ' ';
                            }
                        }
                        $scope.checkRadio5 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf5 = "";
                            let radio5 = document.getElementsByName('radio5');
                            for (let i = 0; i < radio5.length; i++) {
                                if (radio5[i].checked) {
                                    inf5 = radio5[i].value;
                                }
                            }
                            if (inf5 == "option1") {
                                $scope.input26 = 'option1';
                                $scope.input27 = ' ';
                                $scope.input28 = ' ';
                                $scope.input29 = ' ';
                                $scope.input30 = ' ';
                            } else if (inf5 == "option2") {
                                $scope.input26 = ' ';
                                $scope.input27 = 'option2';
                                $scope.input28 = ' ';
                                $scope.input29 = ' ';
                                $scope.input30 = ' ';
                            } else if (inf5 == "option3") {
                                $scope.input26 = ' ';
                                $scope.input27 = ' ';
                                $scope.input28 = 'option3';
                                $scope.input29 = ' ';
                                $scope.input30 = ' ';
                            } else if (inf5 == "option4") {
                                $scope.input26 = ' ';
                                $scope.input27 = ' ';
                                $scope.input28 = ' ';
                                $scope.input29 = 'option4';
                                $scope.input30 = ' ';
                            } else if (inf5 == "option5") {
                                $scope.input26 = ' ';
                                $scope.input27 = ' ';
                                $scope.input28 = ' ';
                                $scope.input29 = ' ';
                                $scope.input30 = 'option5';
                            } else {
                                $scope.input26 = ' ';
                                $scope.input27 = ' ';
                                $scope.input28 = ' ';
                                $scope.input29 = ' ';
                                $scope.input30 = ' ';
                            }
                        }
                        $scope.checkRadio6 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf6 = "";
                            let radio6 = document.getElementsByName('radio6');
                            for (let i = 0; i < radio6.length; i++) {
                                if (radio6[i].checked) {
                                    inf6 = radio6[i].value;
                                }
                            }
                            if (inf6 == "option1") {
                                $scope.input32 = 'option1';
                                $scope.input33 = ' ';
                                $scope.input34 = ' ';
                                $scope.input35 = ' ';
                                $scope.input36 = ' ';
                            } else if (inf6 == "option2") {
                                $scope.input32 = ' ';
                                $scope.input33 = 'option2';
                                $scope.input34 = ' ';
                                $scope.input35 = ' ';
                                $scope.input36 = ' ';
                            } else if (inf6 == "option3") {
                                $scope.input32 = ' ';
                                $scope.input33 = ' ';
                                $scope.input34 = 'option3';
                                $scope.input35 = ' ';
                                $scope.input36 = ' ';
                            } else if (inf6 == "option4") {
                                $scope.input32 = ' ';
                                $scope.input33 = ' ';
                                $scope.input34 = ' ';
                                $scope.input35 = 'option4';
                                $scope.input36 = ' ';
                            } else if (inf6 == "option5") {
                                $scope.input32 = ' ';
                                $scope.input33 = ' ';
                                $scope.input34 = ' ';
                                $scope.input35 = ' ';
                                $scope.input36 = 'option5';
                            } else {
                                $scope.input32 = ' ';
                                $scope.input33 = ' ';
                                $scope.input34 = ' ';
                                $scope.input35 = ' ';
                                $scope.input36 = ' ';
                            }
                        }
                        $scope.checkRadio7 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf7 = "";
                            let radio7 = document.getElementsByName('radio7');
                            for (let i = 0; i < radio7.length; i++) {
                                if (radio7[i].checked) {
                                    inf7 = radio7[i].value;
                                }
                            }
                            if (inf7 == "option1") {
                                $scope.input38 = 'option1';
                                $scope.input39 = ' ';
                                $scope.input40 = ' ';
                                $scope.input41 = ' ';
                            } else if (inf7 == "option2") {
                                $scope.input38 = ' ';
                                $scope.input39 = 'option2';
                                $scope.input40 = ' ';
                                $scope.input41 = ' ';
                            } else if (inf7 == "option3") {
                                $scope.input38 = ' ';
                                $scope.input39 = ' ';
                                $scope.input40 = 'option3';
                                $scope.input41 = ' ';
                            } else if (inf7 == "option4") {
                                $scope.input38 = ' ';
                                $scope.input39 = ' ';
                                $scope.input40 = ' ';
                                $scope.input41 = 'option4';
                            } else {
                                $scope.input38 = ' ';
                                $scope.input39 = ' ';
                                $scope.input40 = ' ';
                                $scope.input41 = ' ';
                            }
                        }
                        $scope.checkRadio8 = () => {
                            //select the value from document.getElementByName('radio1') where checked = true
                            let inf8 = "";
                            let radio8 = document.getElementsByName('radio8');
                            for (let i = 0; i < radio8.length; i++) {
                                if (radio8[i].checked) {
                                    inf8 = radio8[i].value;
                                }
                            }
                            if (inf8 == "option1") {
                                $scope.input42 = 'option1';
                                $scope.input43 = ' ';
                                $scope.input44 = ' ';
                                $scope.input45 = ' ';
                            } else if (inf8 == "option2") {
                                $scope.input42 = ' ';
                                $scope.input43 = 'option2';
                                $scope.input44 = ' ';
                                $scope.input45 = ' ';
                            } else if (inf8 == "option3") {
                                $scope.input42 = ' ';
                                $scope.input43 = ' ';
                                $scope.input44 = 'option3';
                                $scope.input45 = ' ';
                            } else if (inf8 == "option4") {
                                $scope.input42 = ' ';
                                $scope.input43 = ' ';
                                $scope.input44 = ' ';
                                $scope.input45 = 'option4';
                            } else {
                                $scope.input42 = ' ';
                                $scope.input43 = ' ';
                                $scope.input44 = ' ';
                                $scope.input45 = ' ';
                            }
                        }
                        $scope.checkRadio9 = () => {
                            let inf9 = "";
                            let radio9 = document.getElementsByName('radio9');
                            for (let i = 0; i < radio9.length; i++) {
                                if (radio9[i].checked) {
                                    inf9 = radio9[i].value;
                                }
                            }
                            if (inf9 == "option1") {
                                $scope.input47 = 'option1';
                                $scope.input48 = ' ';
                                $scope.input49 = ' ';
                                $scope.input50 = ' ';
                            } else if (inf9 == "option2") {
                                $scope.input47 = ' ';
                                $scope.input48 = 'option2';
                                $scope.input49 = ' ';
                                $scope.input50 = ' ';
                            } else if (inf9 == "option3") {
                                $scope.input47 = ' ';
                                $scope.input48 = ' ';
                                $scope.input49 = 'option3';
                                $scope.input50 = ' ';
                            } else if (inf9 == "option4") {
                                $scope.input47 = ' ';
                                $scope.input48 = ' ';
                                $scope.input49 = ' ';
                                $scope.input50 = 'option4';
                            } else {
                                $scope.input47 = ' ';
                                $scope.input48 = ' ';
                                $scope.input49 = ' ';
                                $scope.input50 = ' ';
                            }
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</div>
</div>


@endsection