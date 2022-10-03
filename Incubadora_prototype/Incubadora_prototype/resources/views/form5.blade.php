@extends('layouts.app')
@section('script')

@stop
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-card">
                <div id="content" class="p-4 p-md-5 pt-5">
                    <form action="#" class="form">
                        <h1 class="text-center">Precio y Viabilidad del Negocio</h1>
                        <h4 class="text-center app-subtitle">Estrategias de precio de lanzamiento al mercado</h4>
                        <div>
                            <h5>Estas cuatro estrategias se clasifican en función de su precio inicial (lanzamiento al mercado) y el precio en el futuro. ¿Cuáles te parecen interesantes para tu negocio?</h5>
                            <div class="input-group">
                                <label for="username" class="text-left" style="background: #971c2e;padding: 30px;color: white;margin-bottom: 15px;">Alto</label>
                                <div class="row" style="margin-left: 1px;">
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" name="Alto" value="1" type="radio" id="Alto1">
                                            <label class="hasLabel" for="Alto1">Estrategia Descremado</label>
                                        </div>
                                    </checkbox>
                                    <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                        <div class="checkbox-container">
                                            <input class="app-antepnp" name="Alto" value="1" type="radio" id="Alto2">
                                            <label class="hasLabel" for="Alto2">Estrategia Premium</label>
                                        </div>
                                    </checkbox>
                                </div>
                                <div class="input-group">
                                    <label for="username" class="text-left" style="background: #971c2e;padding: 30px;color: white;margin-bottom: 15px;">Bajo</label>
                                    <div class="row">
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="border: 1px dashed black;padding: 21px 10px 0px 10px;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" name="Bajo" value="1" type="radio" id="Bajo1">
                                                <label class="hasLabel" for="Bajo1">Estrategia Económica</label>
                                            </div>
                                        </checkbox>
                                        <checkbox class="form-group col-lg-6 col-md-6 col-sm-6 col-6" style="padding: 21px 10px 0px 10px;border: 1px dashed black;">
                                            <div class="checkbox-container">
                                                <input class="app-antepnp" name="Bajo" value="1" type="radio" id="Bajo2">
                                                <label class="hasLabel" for="Bajo2">Estrategia de Penetración</label>
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
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="1" type="checkbox" id="mdnegocio1">
                                        <label class="hasLabel" for="mdnegocio1">Precios Psicológicos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio2" value="1" type="checkbox" id="mdnegocio2">
                                        <label class="hasLabel" for="mdnegocio2">Estrategia de mercado</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio3" value="1" type="checkbox" id="mdnegocio3">
                                        <label class="hasLabel" for="mdnegocio3">Estrategia de líneas de productos</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio4" value="1" type="checkbox" id="mdnegocio4">
                                        <label class="hasLabel" for="mdnegocio4">Estrategia de agrupación</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio5" value="1" type="checkbox" id="mdnegocio5">
                                        <label class="hasLabel" for="mdnegocio5">Estrategia de competición</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio6" value="1" type="checkbox" id="mdnegocio6">
                                        <label class="hasLabel" for="mdnegocio6">Estrategia de impresora y tinta</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio7" value="1" type="checkbox" id="mdnegocio7">
                                        <label class="hasLabel" for="mdnegocio7">Estrategia de productos opcionales</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio8" value="1" type="checkbox" id="mdnegocio8">
                                        <label class="hasLabel" for="mdnegocio8">Precios marcados por el cliente</label>
                                    </div>
                                </checkbox>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Crea y define la mejor estrategia de precios para cada segmento de mercado seleccionando las estrategias seleccionadas, puedes crear una personalizada</h4>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Otras estrategias de precio</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Realiza una encuesta para saber si tus clientes, están dispuestos a pagar por tu producto . Utiliza como referencia el PDF base para la encuesta, el mismo debes solicitarlo a tu mentor</h4>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>

                        <h4 class="text-center app-subtitle">Lifetime Value Retention</h4>
                        <div>

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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="">
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cómo va a intentar solucionar tu negocio esos problemas?</h4>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Oferta</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza la descripción de tu solución para crear tu producto/servicio.</h4>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Segmento</h4>
                        <div>
                            <h4>¿Cuáles son los distintos grupos de personas que utilizarán o comprarán tu producto/servicio)? Esos son tus segmentos de mercado.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="1" type="checkbox" id="mdnegocio1">
                                        <label class="hasLabel" for="mdnegocio1">B2B</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio2" value="1" type="checkbox" id="mdnegocio2">
                                        <label class="hasLabel" for="mdnegocio2">B2C</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio3" value="1" type="checkbox" id="mdnegocio3">
                                        <label class="hasLabel" for="mdnegocio3">B2G</label>
                                    </div>
                                </checkbox>
                                <h5>Si marcaste B2C</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <h5>Si marcaste B2B</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables de comportamiento</h4>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables de crecimiento</h4>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Describe el segmento, considerando todas las variables</h4>
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Problema</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Enumera todos los problemas que se encuentran tus clientes en la actual oferta de mercado.</h4>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuáles son los beneficios que tu solución puede dar a cada segmento de cliente?</h4>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Tamaño del mercado</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Haz una estimación del tamaño del mercado para cada uno de tus segmentos de mercado.</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuánta gente entraría dentro de este segmento de mercado?</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías llegar?</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes a los que podrás llegar</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto en vez de los de tus competidores?</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes que podrían estar interesados en comprar tu producto</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Acciones necesarias</h4>
                        <div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Funcional</small>
                                <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes quieren obtener?</h4>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Personal</small>
                                <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Social</small>
                                <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
                                <input type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></input>
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" placeholder="">
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Decisión del segmento a enfocarse en base a importancia e insatisfacción del mercado</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora puedes redactar la propuesta de valor</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza el ejemplo para escribir la presentación de tu Propuesta de Valor para cada uno de los segmentos de mercado que has elegido.</h4>
                                <label for="">Estructura recomendada</label>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                                <label for="">Redacta en este recuadro tu propuesta de valor</label>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection