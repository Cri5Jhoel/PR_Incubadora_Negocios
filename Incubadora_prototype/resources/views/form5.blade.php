@extends('layouts.Dashboard')
@section('script')

@stop
@section('content')
<div class="container-fluid">
    <div class="col-lg-12 mb-4">
        <div class="card bg-secondary text-white shadow">
            <div class="card-body">
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
                            <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6 ">
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
                            <br>
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
                        <div class="">
                            <div class="mb-3">
                                <label for="" class="form-label">Frecuencia</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Duración</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Valor del pedido</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">LTV</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Menciona las actividades de retención, para mantener a tus clientes</h4>
                    <div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Relación LTV y CAC</h4>
                    <div>
                        <div class="mb-3">
                            <label for="" class="form-label">Relación LTV/CAC</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
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
@endsection