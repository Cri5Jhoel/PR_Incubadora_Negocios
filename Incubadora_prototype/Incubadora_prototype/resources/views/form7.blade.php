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
                        <h1 class="text-center">Plan de crecimiento</h1>
                        <h4 class="text-center app-subtitle">Metas y aspiraciones</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuáles son las metas aspiracionales de tu organización? Una meta aspiracional es una meta a largo plazo (3-5 años) novedosa y arriesgada.</h4>
                                <label for="">Mision</label>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                                <label for="">Visión</label>
                                <textarea type="" class="form-control " name="" id="" aria-describedby="helpId" placeholder=""></textarea>
                                <div class="mb-3">
                                    <label for="" class="form-label">Meta 1</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Meta 2</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Meta 3</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Valores y Cultura</h4>
                        <div>
                            <div class="mb-3">
                                <h5 for="" class="text-left">¿Qué comportamientos muestras tú y tu equipo a diario? Da un paso atrás y reflexiona usando las preguntas de abajo. Piensa en momentos específicos de tu vida personal y profesional, solo o con tu equipo.</h5>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué comportamientos te desagradan en los demás?</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué comportamiento aprecias de los demás?</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué comportamiento quieres corregir de ti?</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué comportamiento quieres adoptar para ti?</label>
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                                <h5 for="" class="text-left">¿Qué comportamientos muestras tú y tu equipo a diario? Da un paso atrás y reflexiona usando las preguntas de abajo. Piensa en momentos específicos de tu vida personal y profesional, solo o con tu equipo.</h5>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Indicadores clave de rendimiento</h4>
                        <div>
                            <div class="mb-3">
                                <h5 for="" class="text-left">Metas</h5>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                <div>
                                    <div class="table-responsive">
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                        <table class="table text-white table-borderless">
                                            <thead>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Menciona los KPI's que mejor se ajusten</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Menciona las metas</label>
                                                    </div>
                                                </th>
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
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div>
                                    <div class="table-responsive">
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                        <table class="table text-white table-borderless">
                                            <thead>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Menciona los KPI's que mejor se ajusten</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Menciona las metas</label>
                                                    </div>
                                                </th>
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
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div>
                                    <div class="table-responsive">
                                        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                        <table class="table text-white table-borderless">
                                            <thead>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Menciona los KPI's que mejor se ajusten</label>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    <div class="">
                                                        <label for="" class="form-label">Menciona las metas</label>
                                                    </div>
                                                </th>
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
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Hitos</h4>
                        <div>
                            <div class="table-responsive">
                                <h5>¿Cuáles son todos los pasos intermedios que necesitaras dar para alcanzar estas GRANDES metas?</h5>
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Año 1</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Año 2</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Año 3</label>
                                            </div>
                                        </th>
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
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
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h5>Ahora define Objetivos y OKR's para los Itos seleccionados</h5>
                            <div class="table-responsive">
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Hitos Año 1</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Objetivos y/o OKR's</label>
                                            </div>
                                        </th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Hitos Año 2</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Objetivos y/o OKR's</label>
                                            </div>
                                        </th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Hitos Año 3</label>
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="">
                                                <label for="" class="form-label">Objetivos y/o OKR's</label>
                                            </div>
                                        </th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Potenciales riesgos</h4>
                        <div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Cuáles son los principales riesgos en tu negocio? ¿Cómo piensas mitigarlos?
                                    Ten una lluvia de ideas sobre riesgos en las siguientes categorías: Riesgos de Mercado, Riesgos Competitivos, Riesgos Tecnológicos y Operativos, Riesgos Financieros, Riesgos de las Personas, Riesgos Legales y Regulatorios, Riesgos Sistémicos</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Equipo de tus sueños</h4>
                        <div>
                            <h5>¿Cómo es el equipo de tus sueños? Haz una lista de todas las personas clave que necesitas y explica de qué iniciativas serán responsables.</h5>
                            <div class="table-responsive">
                                <table class="table text-white table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Persona Clave</th>
                                            <th scope="col">Area de trabajo</th>
                                            <th scope="col">Iniciativa</th>
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
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <h4 class="text-center app-subtitle">Plan de crecimiento</h4>
                        <div>
                        <div class="mb-3">
                                <h4 for="" class="text-left">¿Cómo resumirías tu Plan de Crecimiento en un párrafo?</h4>
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