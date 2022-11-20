<?php $__env->startSection('content'); ?>
<div class="container-fluid" ng-app="myApp" ng-controller="myCtrl">

    <div class="col-lg-12 mb-4">
        <div class="card bg-secondary text-white shadow">
            <div id="content" class="card-body">
                <form action="#" class="form">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <?php if(Auth::user()->userType == 'teacher'): ?>
                        <?php endif; ?>
                        <?php if(Auth::user()->userType == 'student'): ?>
                        <div class="d-flex justify-content-center">
                            
                            <button type="submit" ng-click="postForm()" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-pencil fa-sm text-white-50 "></i> Guardar</button>
                        </div>
                        <?php endif; ?>
                    </div>
                     
                    <p id="userId" hidden><?php echo e(Auth::user()->id); ?></p>
                    <p id="userRole" hidden><?php echo e(Auth::user()->userType); ?></p>
                    
                    <?php if(Auth::user()->userType == 'teacher'): ?>
                        
                    <?php endif; ?>
                    
                    <h1 class="text-center">Propuesta de Valor</h1>
                    <h4 class="text-center app-subtitle">Árbol de problemas</h4>
                    <div>

                        <div class="mb-3">
                            <h4 for="" class="text-left">¿Cuál es el problema central de tus clientes que estás resolviendo?</h4>
                            <input type="text" class="form-control" name="" ng-model="input1" id="input1" aria-describedby="helpId" placeholder="">
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
                            <textarea type="" class="form-control " name="" ng-model="input39" id="input39" aria-describedby="helpId" placeholder="" readonly></textarea>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Segmento</h4>
                    <div>
                        <input type="text" class="form-control" name="" ng-model="input113" id="input113" aria-describedby="helpId" placeholder="Introduce el producto con el que quieres trabajar">
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
                                <label for="" class="form-label">¿Cuántas personas de 20 entrarían dentro de este segmento de mercado?</label>
                                <input type="text" class="form-control" name="" ng-model="input60" id="input60" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-label">Mercado disponible</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías llegar?</label>
                                <input type="text" class="form-control" name="" ng-change="func1()" ng-model="input61" id="input61" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-label">Clientes</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">El número aproximado de clientes a los que podrás llegar</label>
                                <input type="text" class="form-control" name="" ng-model="input62" id="input62" aria-describedby="helpId" placeholder="" readonly>
                                <small id="helpId" class="form-label">Mercado</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto en vez de los de tus competidores?</label>
                                <input type="text" class="form-control" name="" ng-change="func2()" ng-model="input63" id="input63" aria-describedby="helpId" placeholder="">
                                <small id="helpId" class="form-label">Compradores actuales</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">El número aproximado de clientes que podrían estar interesados en comprar tu producto</label>
                                <input type="text" class="form-control" name="" ng-model="input64" id="input64" aria-describedby="helpId" placeholder="" readonly>
                                <small id="helpId" class="form-label">Mercado objetivo</small>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center app-subtitle">Acciones necesarias</h4>
                    <div>
                        <div class="mb-3">
                            <small id="helpId" class="form-text text-muted">Funcional</small>
                            <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes quieren obtener?</h4>
                            <input type="text" class="form-control " name="" ng-model="input65" id="input65" aria-describedby="helpId" placeholder=""></input>
                            <input type="text" class="form-control " name="" ng-model="input66" id="input66" aria-describedby="helpId" placeholder=""></input>
                            <input type="text" class="form-control " name="" ng-model="input67" id="input67" aria-describedby="helpId" placeholder=""></input>
                        </div>
                        <div class="mb-3">
                            <small id="helpId" class="form-text text-muted">Personal</small>
                            <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                            <input type="text" class="form-control " name="" ng-model="input68" id="input68" aria-describedby="helpId" placeholder=""></input>
                            <input type="text" class="form-control " name="" ng-model="input69" id="input69" aria-describedby="helpId" placeholder=""></input>
                            <input type="text" class="form-control " name="" ng-model="input70" id="input70" aria-describedby="helpId" placeholder=""></input>
                        </div>
                        <div class="mb-3">
                            <small id="helpId" class="form-text text-muted">Social</small>
                            <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                            <input type="text" class="form-control " name="" ng-model="input71" id="input71" aria-describedby="helpId" placeholder=""></input>
                            <input type="text" class="form-control " name="" ng-model="input72" id="input72" aria-describedby="helpId" placeholder=""></input>
                            <input type="text" class="form-control " name="" ng-model="input73" id="input73" aria-describedby="helpId" placeholder=""></input>
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
                            <textarea type="" class="form-control " name="" ng-model="input111" id="input111" aria-describedby="helpId" placeholder="Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente." readonly></textarea>
                            <label for="">Redacta en este recuadro tu propuesta de valor</label>
                            <textarea type="" class="form-control " name="" ng-model="input112" id="input112" aria-describedby="helpId" placeholder=""></textarea>
                        </div>
                    </div>
                    <?php if(Auth::user()->userType == 'teacher'): ?>
                    <?php endif; ?>
                    <?php if(Auth::user()->userType == 'student'): ?>
                    <a name="" id="add2" class="btn btn-primary" ng-click="producto2()" href="#" role="button">Agregar producto</a>
                    <?php endif; ?>
                    
                    <br>
                    <div id="product2">
                        <h4 class="text-center app-subtitle">Segmento</h4>
                        <div>
                            <input type="text" class="form-control" name="" ng-model="input114" id="input114" aria-describedby="helpId" placeholder="Introduce el producto con el que quieres trabajar">
                            <h4>¿Cuáles son los distintos grupos de personas que utilizarán o comprarán tu producto/servicio)? Esos son tus segmentos de mercado.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="input115" value="1" type="checkbox" id="input115" ng-model="input115">
                                        <label class="hasLabel" for="input115">B2B</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="input116" value="1" type="checkbox" id="input116" ng-model="input116">
                                        <label class="hasLabel" for="input116">B2C</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="input117" value="1" type="checkbox" id="input117" ng-model="input117">
                                        <label class="hasLabel" for="input117">B2G</label>
                                    </div>
                                </checkbox>
                                <h5>Si marcaste B2C</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input118" id="input118" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input119" id="input119" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                        <input type="text" class="form-control" name="" ng-model="input120" id="input120" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <h5>Si marcaste B2B</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input121" id="input121" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input122" id="input122" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                        <input type="text" class="form-control" name="" ng-model="input123" id="input123" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Describe el segmento, considerando todas las variables</h4>
                                        <input type="text" class="form-control" name="" ng-model="input124" id="input124" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Problema</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Enumera todos los problemas que se encuentran tus clientes en la actual oferta de mercado.</h4>
                                <input type="text" class="form-control" name="" ng-model="input125" id="input125" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input126" id="input126" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input127" id="input127" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input128" id="input128" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input129" id="input129" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuáles son los beneficios que tu solución puede dar a cada segmento de cliente?</h4>
                                <input type="text" class="form-control" name="" ng-model="input130" id="input130" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input131" id="input131" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input132" id="input132" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input133" id="input133" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input134" id="input134" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Tamaño del mercado</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Haz una estimación del tamaño del mercado para cada uno de tus segmentos de mercado.</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuántas personas de 20 entrarían dentro de este segmento de mercado?</label>
                                    <input type="text" class="form-control" name="" ng-model="input135" id="input135" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Mercado disponible</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías llegar?</label>
                                    <input type="text" class="form-control" name="" ng-model="input136" id="input136" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Clientes</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes a los que podrás llegar</label>
                                    <input type="text" class="form-control" name="" ng-model="input137" id="input137" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Mercado</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto en vez de los de tus competidores?</label>
                                    <input type="text" class="form-control" name="" ng-model="input138" id="input138" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Compradores actuales</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes que podrían estar interesados en comprar tu producto</label>
                                    <input type="text" class="form-control" name="" ng-model="input139" id="input139" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Mercado objetivo</small>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Acciones necesarias</h4>
                        <div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Funcional</small>
                                <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes quieren obtener?</h4>
                                <input type="text" class="form-control" name="" ng-model="input140" id="input140" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input141" id="input141" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input142" id="input142" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Personal</small>
                                <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input143" id="input143" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input144" id="input144" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input145" id="input145" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Social</small>
                                <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                                <input type="text" class="form-control" name="" ng-model="input146" id="input146" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input147" id="input147" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input148" id="input148" aria-describedby="helpId" placeholder="">
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
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input149" id="input149" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input150" id="input150" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input151" id="input151" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input152" id="input152" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input153" id="input153" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input154" id="input154" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input155" id="input155" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input156" id="input156" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input157" id="input157" aria-describedby="helpId" placeholder="">
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
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input158" id="input158" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input159" id="input159" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input160" id="input160" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input161" id="input161" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input162" id="input162" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input163" id="input163" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input164" id="input164" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input165" id="input165" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input166" id="input166" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input167" id="input167" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input168" id="input168" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input169" id="input169" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input170" id="input170" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input171" id="input171" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input172" id="input172" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input173" id="input173" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input174" id="input174" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input175" id="input175" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input176" id="input176" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input177" id="input177" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input178" id="input178" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input179" id="input179" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input180" id="input180" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input181" id="input181" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input182" id="input182" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input183" id="input183" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input184" id="input184" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Decisión del segmento a enfocarse en base a importancia e insatisfacción del mercado</label>
                                <input type="text" class="form-control" name="" ng-model="input185" id="input185" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora puedes redactar la propuesta de valor</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza el ejemplo para escribir la presentación de tu Propuesta de Valor para cada uno de los segmentos de mercado que has elegido.</h4>
                                <label for="">Estructura recomendada</label>
                                <textarea class="form-control" name="" ng-model="input186" id="input186" aria-describedby="helpId" placeholder="Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente." readonly></textarea>
                                <label for="">Redacta en este recuadro tu propuesta de valor</label>
                                <textarea class="form-control" name="" ng-model="input187" id="input187" aria-describedby="helpId" placeholder=""></textarea>
                            </div>
                        </div>
                        <?php if(Auth::user()->userType == 'teacher'): ?>
                        <?php endif; ?>
                        <?php if(Auth::user()->userType == 'student'): ?>
                        <div class="flex">
                            <a name="" id="add3" class="btn btn-primary" ng-click="producto3()" href="#" role="button">Agregar producto</a>
                            <a name="" id="delete2" class="btn btn-primary" ng-click="producto2()" href="#" role="button">Eliminar producto</a>
                        </div>
                        <?php endif; ?> 
                        
                        <br>
                    </div>

                    <div id="product3">
                        <h4 class="text-center app-subtitle">Segmento</h4>
                        <div>
                            <input type="text" class="form-control" name="" ng-model="input188" id="input188" aria-describedby="helpId" placeholder="Introduce el producto con el que quieres trabajar">
                            <h4>¿Cuáles son los distintos grupos de personas que utilizarán o comprarán tu producto/servicio)? Esos son tus segmentos de mercado.</h4>
                            <div class="row">
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="1" type="checkbox" ng-model="input189" id="input189">
                                        <label class="hasLabel" for="mdnegocio1">B2B</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="2" type="checkbox" ng-model="input190" id="input190">
                                        <label class="hasLabel" for="mdnegocio2">B2C</label>
                                    </div>
                                </checkbox>
                                <checkbox class="form-group col-lg-4 col-md-3 col-sm-4 col-6">
                                    <div class="checkbox-container">
                                        <input class="app-antepnp" name="mdnegocio" value="3" type="checkbox" ng-model="input191" id="input191">
                                        <label class="hasLabel" for="mdnegocio3">B2G</label>
                                    </div>
                                </checkbox>
                                <h5>Si marcaste B2C</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input192" id="input192" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input193" id="input193" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                        <input type="text" class="form-control" name="" ng-model="input194" id="input194" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                                <h5>Si marcaste B2B</h5>
                                <div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables geográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input195" id="input195" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables demográficas</h4>
                                        <input type="text" class="form-control" name="" ng-model="input196" id="input196" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="mb-3">
                                        <h4 for="" class="text-left">Redacta las variables conductuales</h4>
                                        <input type="text" class="form-control" name="" ng-model="input197" id="input197" aria-describedby="helpId" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Problema</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Enumera todos los problemas que se encuentran tus clientes en la actual oferta de mercado.</h4>
                                <input type="text" class="form-control" name="" ng-model="input198" id="input198" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input199" id="input199" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input200" id="input200" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input201" id="input201" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input202" id="input202" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">¿Cuáles son los beneficios que tu solución puede dar a cada segmento de cliente?</h4>
                                <input type="text" class="form-control" name="" ng-model="input203" id="input203" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input204" id="input204" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input205" id="input205" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input206" id="input206" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input207" id="input207" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Tamaño del mercado</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Haz una estimación del tamaño del mercado para cada uno de tus segmentos de mercado.</h4>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Cuántas personas de 20 entrarían dentro de este segmento de mercado?</label>
                                    <input type="text" class="form-control" name="" ng-model="input208" id="input208" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Mercado disponible</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿A qué porcentaje del mercado conseguirías llegar?</label>
                                    <input type="text" class="form-control" name="" ng-model="input209" id="input209" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Clientes</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes a los que podrás llegar</label>
                                    <input type="text" class="form-control" name="" ng-model="input210" id="input210" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Mercado</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">¿Qué porcentaje del mercado compraría tu producto en vez de los de tus competidores?</label>
                                    <input type="text" class="form-control" name="" ng-model="input211" id="input211" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Compradores actuales</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">El número aproximado de clientes que podrían estar interesados en comprar tu producto</label>
                                    <input type="text" class="form-control" name="" ng-model="input212" id="input212" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Mercado objetivo</small>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Acciones necesarias</h4>
                        <div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Funcional</small>
                                <h4 for="" class="text-left">¿Cuáles son los resultados concretos que tus clientes quieren obtener?</h4>
                                <input type="text" class="form-control" name="" ng-model="input213" id="input213" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input214" id="input214" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input215" id="input215" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Personal</small>
                                <h4 for="" class="text-left">¿Cómo quieren sentirse tus clientes?</h4>
                                <input type="text" class="form-control" name="" ng-model="input216" id="input216" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input217" id="input217" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input218" id="input218" aria-describedby="helpId" placeholder="">
                            </div>
                            <div class="mb-3">
                                <small id="helpId" class="form-text text-muted">Social</small>
                                <h4 for="" class="text-left">¿Cómo quieren tus clientes que se les perciba?</h4>
                                <input type="text" class="form-control" name="" ng-model="input219" id="input219" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input220" id="input220" aria-describedby="helpId" placeholder="">
                                <input type="text" class="form-control" name="" ng-model="input221" id="input221" aria-describedby="helpId" placeholder="">
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
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input222" id="input222" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input223" id="input223" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input224" id="input224" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input225" id="input225" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input226" id="input226" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input227" id="input227" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input228" id="input228" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input229" id="input229" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input230" id="input230" aria-describedby="helpId" placeholder="">
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
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input231" id="input231" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input232" id="input232" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input233" id="input233" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input234" id="input234" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input235" id="input235" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input236" id="input236" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input237" id="input237" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input238" id="input238" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input239" id="input239" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input240" id="input240" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input241" id="input241" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input242" id="input242" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input243" id="input243" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input244" id="input244" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input245" id="input245" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input246" id="input246" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input247" id="input247" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input248" id="input248" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input249" id="input249" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input250" id="input250" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input251" id="input251" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input252" id="input252" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input253" id="input253" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input254" id="input254" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input255" id="input255" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input256" id="input256" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <input type="text" class="form-control" name="" ng-model="input257" id="input257" aria-describedby="helpId" placeholder="">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Decisión del segmento a enfocarse en base a importancia e insatisfacción del mercado</label>
                                <input type="text" class="form-control" name="" ng-model="input258" id="input258" aria-describedby="helpId" placeholder="">
                            </div>
                        </div>
                        <h4 class="text-center app-subtitle">Ahora puedes redactar la propuesta de valor</h4>
                        <div>
                            <div class="mb-3">
                                <h4 for="" class="text-left">Utiliza el ejemplo para escribir la presentación de tu Propuesta de Valor para cada uno de los segmentos de mercado que has elegido.</h4>
                                <label for="">Estructura recomendada</label>
                                <textarea class="form-control" name="" ng-model="input259" id="input259" rows="3" placeholder="Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente." readonly></textarea>
                                <label for="">Redacta en este recuadro tu propuesta de valor</label>
                                <textarea class="form-control" name="" ng-model="input260" id="input260" rows="3"></textarea>
                            </div>
                        </div>
                        <?php if(Auth::user()->userType == 'teacher'): ?>
                        <?php endif; ?>
                        <?php if(Auth::user()->userType == 'student'): ?>
                        <a name="" id="delete3" class="btn btn-primary" ng-click="producto3()" href="#" role="button">Eliminar producto</a>
                        <?php endif; ?>
                        
                    </div>
                    <br>
                                     
                </form>

            </div>
            
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script type="text/javascript">
                function getId(url = window.location.href) {
                    let urlParts = url.split('/');
                    return urlParts[urlParts.length - 1];
                }
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
                    $scope.input111 = "Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente.";
                    $scope.input112 = "";
                    // input first product name
                    $scope.input113 = "";
                    //input second product name
                    $scope.input114 = "";
                    //inputs to 187
                    $scope.input115 = "";
                    $scope.input116 = "";
                    $scope.input117 = "";
                    $scope.input118 = "";
                    $scope.input119 = "";
                    $scope.input120 = "";
                    $scope.input121 = "";
                    $scope.input122 = "";
                    $scope.input123 = "";
                    $scope.input124 = "";
                    $scope.input125 = "";
                    $scope.input126 = "";
                    $scope.input127 = "";
                    $scope.input128 = "";
                    $scope.input129 = "";
                    $scope.input130 = "";
                    $scope.input131 = "";
                    $scope.input132 = "";
                    $scope.input133 = "";
                    $scope.input134 = "";
                    $scope.input135 = "";
                    $scope.input136 = "";
                    $scope.input137 = "";
                    $scope.input138 = "";
                    $scope.input139 = "";
                    $scope.input140 = "";
                    $scope.input141 = "";
                    $scope.input142 = "";
                    $scope.input143 = "";
                    $scope.input144 = "";
                    $scope.input145 = "";
                    $scope.input146 = "";
                    $scope.input147 = "";
                    $scope.input148 = "";
                    $scope.input149 = "";
                    $scope.input150 = "";
                    $scope.input151 = "";
                    $scope.input152 = "";
                    $scope.input153 = "";
                    $scope.input154 = "";
                    $scope.input155 = "";
                    $scope.input156 = "";
                    $scope.input157 = "";
                    $scope.input158 = "";
                    $scope.input159 = "";
                    $scope.input160 = "";
                    $scope.input161 = "";
                    $scope.input162 = "";
                    $scope.input163 = "";
                    $scope.input164 = "";
                    $scope.input165 = "";
                    $scope.input166 = "";
                    $scope.input167 = "";
                    $scope.input168 = "";
                    $scope.input169 = "";
                    $scope.input170 = "";
                    $scope.input171 = "";
                    $scope.input172 = "";
                    $scope.input173 = "";
                    $scope.input174 = "";
                    $scope.input175 = "";
                    $scope.input176 = "";
                    $scope.input177 = "";
                    $scope.input178 = "";
                    $scope.input179 = "";
                    $scope.input180 = "";
                    $scope.input181 = "";
                    $scope.input182 = "";
                    $scope.input183 = "";
                    $scope.input184 = "";
                    $scope.input185 = "";
                    $scope.input186 = "Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente.";
                    $scope.input187 = "";
                    //input third product name
                    $scope.input188 = "";
                    //inputs to 260
                    $scope.input189 = "";
                    $scope.input190 = "";
                    $scope.input191 = "";
                    $scope.input192 = "";
                    $scope.input193 = "";
                    $scope.input194 = "";
                    $scope.input195 = "";
                    $scope.input196 = "";
                    $scope.input197 = "";
                    $scope.input198 = "";
                    $scope.input199 = "";
                    $scope.input200 = "";
                    $scope.input201 = "";
                    $scope.input202 = "";
                    $scope.input203 = "";
                    $scope.input204 = "";
                    $scope.input205 = "";
                    $scope.input206 = "";
                    $scope.input207 = "";
                    $scope.input208 = "";
                    $scope.input209 = "";
                    $scope.input210 = "";
                    $scope.input211 = "";
                    $scope.input212 = "";
                    $scope.input213 = "";
                    $scope.input214 = "";
                    $scope.input215 = "";
                    $scope.input216 = "";
                    $scope.input217 = "";
                    $scope.input218 = "";
                    $scope.input219 = "";
                    $scope.input220 = "";
                    $scope.input221 = "";
                    $scope.input222 = "";
                    $scope.input223 = "";
                    $scope.input224 = "";
                    $scope.input225 = "";
                    $scope.input226 = "";
                    $scope.input227 = "";
                    $scope.input228 = "";
                    $scope.input229 = "";
                    $scope.input230 = "";
                    $scope.input231 = "";
                    $scope.input232 = "";
                    $scope.input233 = "";
                    $scope.input234 = "";
                    $scope.input235 = "";
                    $scope.input236 = "";
                    $scope.input237 = "";
                    $scope.input238 = "";
                    $scope.input239 = "";
                    $scope.input240 = "";
                    $scope.input241 = "";
                    $scope.input242 = "";
                    $scope.input243 = "";
                    $scope.input244 = "";
                    $scope.input245 = "";
                    $scope.input246 = "";
                    $scope.input247 = "";
                    $scope.input248 = "";
                    $scope.input249 = "";
                    $scope.input250 = "";
                    $scope.input251 = "";
                    $scope.input252 = "";
                    $scope.input253 = "";
                    $scope.input254 = "";
                    $scope.input255 = "";
                    $scope.input256 = "";
                    $scope.input257 = "";
                    $scope.input258 = "";
                    $scope.input259 = "Para los Segmento de mercado, que Problemática del cliente, Tu empresa/producto es Descripción del producto que Beneficios del cliente.";
                    $scope.input260 = "";
                    $scope.count = "1";
                    
                    $scope.idTeam="";
                    
                    
                    
                    
                    angular.element(document).ready(() => {
                        let userId = "<?php echo e(Auth::user()->id); ?>";
                        let userType = "<?php echo e(Auth::user()->userType); ?>";
                        var teamId = "";
                        
                        if(userType == "teacher"){
                            function getId(url = window.location.href) {
                                    let urlParts = url.split('/');
                                    return urlParts[urlParts.length - 1];
                            }
                                teamId = getId();
                                $http.get(`/forms1/${teamId}`).then((result) => {
                                        $scope.forms = result.data;
                                        $scope.parseArrayValues();
                                        $scope.checkProducts();
                                })
                        }else{
                            $http.get(`/userTeam/${userId}`).then((result) => {
                                $scope.idTeam = result.data;
                                teamId = $scope.idTeam;
                                $http.get(`/forms1/${teamId}`).then((result) => {
                                    $scope.forms = result.data;
                                    $scope.parseArrayValues();
                                    $scope.checkProducts();
                                })
                            })
                        }
                        //let teamId = "<?php echo e(Auth::user()->teamId); ?>";
                        

                    });

                    $scope.checkProducts = () => {
                        if ($scope.count == "1") {
                            document.getElementById("product2").style.display = "none";
                            document.getElementById("product3").style.display = "none";
                            document.getElementById("add2").style.display = "block";
                        }
                        if ($scope.count == "2") {
                            document.getElementById("product2").style.display = "block";
                            document.getElementById("product3").style.display = "none";
                            document.getElementById("add2").style.display = "none";
                            document.getElementById("add3").style.display = "block";
                            document.getElementById("delete2").style.display = "block";
                        }
                        if ($scope.count == "3") {
                            document.getElementById("product2").style.display = "block";
                            document.getElementById("product3").style.display = "block";
                            document.getElementById("add2").style.display = "none";
                            document.getElementById("add3").style.display = "none";
                            document.getElementById("delete2").style.display = "none";
                            document.getElementById("delete3").style.display = "block";
                        }
                    }

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
                        $scope.input113 = formTextArray[112];
                        $scope.input114 = formTextArray[113];
                        $scope.input115 = formTextArray[114];
                        $scope.input116 = formTextArray[115];
                        $scope.input117 = formTextArray[116];
                        $scope.input118 = formTextArray[117];
                        $scope.input119 = formTextArray[118];
                        $scope.input120 = formTextArray[119];
                        $scope.input121 = formTextArray[120];
                        $scope.input122 = formTextArray[121];
                        $scope.input123 = formTextArray[122];
                        $scope.input124 = formTextArray[123];
                        $scope.input125 = formTextArray[124];
                        $scope.input126 = formTextArray[125];
                        $scope.input127 = formTextArray[126];
                        $scope.input128 = formTextArray[127];
                        $scope.input129 = formTextArray[128];
                        $scope.input130 = formTextArray[129];
                        $scope.input131 = formTextArray[130];
                        $scope.input132 = formTextArray[131];
                        $scope.input133 = formTextArray[132];
                        $scope.input134 = formTextArray[133];
                        $scope.input135 = formTextArray[134];
                        $scope.input136 = formTextArray[135];
                        $scope.input137 = formTextArray[136];
                        $scope.input138 = formTextArray[137];
                        $scope.input139 = formTextArray[138];
                        $scope.input140 = formTextArray[139];
                        $scope.input141 = formTextArray[140];
                        $scope.input142 = formTextArray[141];
                        $scope.input143 = formTextArray[142];
                        $scope.input144 = formTextArray[143];
                        $scope.input145 = formTextArray[144];
                        $scope.input146 = formTextArray[145];
                        $scope.input147 = formTextArray[146];
                        $scope.input148 = formTextArray[147];
                        $scope.input149 = formTextArray[148];
                        $scope.input150 = formTextArray[149];
                        $scope.input151 = formTextArray[150];
                        $scope.input152 = formTextArray[151];
                        $scope.input153 = formTextArray[152];
                        $scope.input154 = formTextArray[153];
                        $scope.input155 = formTextArray[154];
                        $scope.input156 = formTextArray[155];
                        $scope.input157 = formTextArray[156];
                        $scope.input158 = formTextArray[157];
                        $scope.input159 = formTextArray[158];
                        $scope.input160 = formTextArray[159];
                        $scope.input161 = formTextArray[160];
                        $scope.input162 = formTextArray[161];
                        $scope.input163 = formTextArray[162];
                        $scope.input164 = formTextArray[163];
                        $scope.input165 = formTextArray[164];
                        $scope.input166 = formTextArray[165];
                        $scope.input167 = formTextArray[166];
                        $scope.input168 = formTextArray[167];
                        $scope.input169 = formTextArray[168];
                        $scope.input170 = formTextArray[169];
                        $scope.input171 = formTextArray[170];
                        $scope.input172 = formTextArray[171];
                        $scope.input173 = formTextArray[172];
                        $scope.input174 = formTextArray[173];
                        $scope.input175 = formTextArray[174];
                        $scope.input176 = formTextArray[175];
                        $scope.input177 = formTextArray[176];
                        $scope.input178 = formTextArray[177];
                        $scope.input179 = formTextArray[178];
                        $scope.input180 = formTextArray[179];
                        $scope.input181 = formTextArray[180];
                        $scope.input182 = formTextArray[181];
                        $scope.input183 = formTextArray[182];
                        $scope.input184 = formTextArray[183];
                        $scope.input185 = formTextArray[184];
                        $scope.input186 = formTextArray[185];
                        $scope.input187 = formTextArray[186];
                        $scope.input188 = formTextArray[187];
                        $scope.input189 = formTextArray[188];
                        $scope.input190 = formTextArray[189];
                        $scope.input191 = formTextArray[190];
                        $scope.input192 = formTextArray[191];
                        $scope.input193 = formTextArray[192];
                        $scope.input194 = formTextArray[193];
                        $scope.input195 = formTextArray[194];
                        $scope.input196 = formTextArray[195];
                        $scope.input197 = formTextArray[196];
                        $scope.input198 = formTextArray[197];
                        $scope.input199 = formTextArray[198];
                        $scope.input200 = formTextArray[199];
                        $scope.input201 = formTextArray[200];
                        $scope.input202 = formTextArray[201];
                        $scope.input203 = formTextArray[202];
                        $scope.input204 = formTextArray[203];
                        $scope.input205 = formTextArray[204];
                        $scope.input206 = formTextArray[205];
                        $scope.input207 = formTextArray[206];
                        $scope.input208 = formTextArray[207];
                        $scope.input209 = formTextArray[208];
                        $scope.input210 = formTextArray[209];
                        $scope.input211 = formTextArray[210];
                        $scope.input212 = formTextArray[211];
                        $scope.input213 = formTextArray[212];
                        $scope.input214 = formTextArray[213];
                        $scope.input215 = formTextArray[214];
                        $scope.input216 = formTextArray[215];
                        $scope.input217 = formTextArray[216];
                        $scope.input218 = formTextArray[217];
                        $scope.input219 = formTextArray[218];
                        $scope.input220 = formTextArray[219];
                        $scope.input221 = formTextArray[220];
                        $scope.input222 = formTextArray[221];
                        $scope.input223 = formTextArray[222];
                        $scope.input224 = formTextArray[223];
                        $scope.input225 = formTextArray[224];
                        $scope.input226 = formTextArray[225];
                        $scope.input227 = formTextArray[226];
                        $scope.input228 = formTextArray[227];
                        $scope.input229 = formTextArray[228];
                        $scope.input230 = formTextArray[229];
                        $scope.input231 = formTextArray[230];
                        $scope.input232 = formTextArray[231];
                        $scope.input233 = formTextArray[232];
                        $scope.input234 = formTextArray[233];
                        $scope.input235 = formTextArray[234];
                        $scope.input236 = formTextArray[235];
                        $scope.input237 = formTextArray[236];
                        $scope.input238 = formTextArray[237];
                        $scope.input239 = formTextArray[238];
                        $scope.input240 = formTextArray[239];
                        $scope.input241 = formTextArray[240];
                        $scope.input242 = formTextArray[241];
                        $scope.input243 = formTextArray[242];
                        $scope.input244 = formTextArray[243];
                        $scope.input245 = formTextArray[244];
                        $scope.input246 = formTextArray[245];
                        $scope.input247 = formTextArray[246];
                        $scope.input248 = formTextArray[247];
                        $scope.input249 = formTextArray[248];
                        $scope.input250 = formTextArray[249];
                        $scope.input251 = formTextArray[250];
                        $scope.input252 = formTextArray[251];
                        $scope.input253 = formTextArray[252];
                        $scope.input254 = formTextArray[253];
                        $scope.input255 = formTextArray[254];
                        $scope.input256 = formTextArray[255];
                        $scope.input257 = formTextArray[256];
                        $scope.input258 = formTextArray[257];
                        $scope.input259 = formTextArray[258];
                        $scope.input260 = formTextArray[259];
                        $scope.count = formTextArray[260];
                    }


                    
                    $scope.postForm = () => {
                        let texto = $scope.input1 + ";" + $scope.input2 + ";" + $scope.input3 + ";" + $scope.input4 + ";" + $scope.input5 + ";" + $scope.input6 + ";" + $scope.input7 + ";" + $scope.input8 + ";" + $scope.input9 + ";" + $scope.input10 + ";" + $scope.input11 + ";" + $scope.input12 + ";" + $scope.input13 + ";" + $scope.input14 + ";" + $scope.input15 + ";" + $scope.input16 + ";" + $scope.input17 + ";" + $scope.input18 + ";" + $scope.input19 + ";" + $scope.input20 + ";" + $scope.input21 + ";" + $scope.input22 + ";" + $scope.input23 + ";" + $scope.input24 + ";" + $scope.input25 + ";" + $scope.input26 + ";" + $scope.input27 + ";" + $scope.input28 + ";" + $scope.input29 + ";" + $scope.input30 + ";" + $scope.input31 + ";" + $scope.input32 + ";" + $scope.input33 + ";" + $scope.input34 + ";" + $scope.input35 + ";" + $scope.input36 + ";" + $scope.input37 + ";" + $scope.input38 + ";" + $scope.input39 + ";" + $scope.input40 + ";" + $scope.input41 + ";" + $scope.input42 + ";" + $scope.input43 + ";" + $scope.input44 + ";" + $scope.input45 + ";" + $scope.input46 + ";" + $scope.input47 + ";" + $scope.input48 + ";" + $scope.input49 + ";" + $scope.input50 + ";" + $scope.input51 + ";" + $scope.input52 + ";" + $scope.input53 + ";" + $scope.input54 + ";" + $scope.input55 + ";" + $scope.input56 + ";" + $scope.input57 + ";" + $scope.input58 + ";" + $scope.input59 + ";" + $scope.input60 + ";" + $scope.input61 + ";" + $scope.input62 + ";" + $scope.input63 + ";" + $scope.input64 + ";" + $scope.input65 + ";" + $scope.input66 + ";" + $scope.input67 + ";" + $scope.input68 + ";" + $scope.input69 + ";" + $scope.input70 + ";" + $scope.input71 + ";" + $scope.input72 + ";" + $scope.input73 + ";" + $scope.input74 + ";" + $scope.input75 + ";" + $scope.input76 + ";" + $scope.input77 + ";" + $scope.input78 + ";" + $scope.input79 + ";" + $scope.input80 + ";" + $scope.input81 + ";" + $scope.input82 + ";" + $scope.input83 + ";" + $scope.input84 + ";" + $scope.input85 + ";" + $scope.input86 + ";" + $scope.input87 + ";" + $scope.input88 + ";" + $scope.input89 + ";" + $scope.input90 + ";" + $scope.input91 + ";" + $scope.input92 + ";" + $scope.input93 + ";" + $scope.input94 + ";" + $scope.input95 + ";" + $scope.input96 + ";" + $scope.input97 + ";" + $scope.input98 + ";" + $scope.input99 + ";" + $scope.input100 + ";" + $scope.input101 + ";" + $scope.input102 + ";" + $scope.input103 + ";" + $scope.input104 + ";" + $scope.input105 + ";" + $scope.input106 + ";" + $scope.input107 + ";" + $scope.input108 + ";" + $scope.input109 + ";" + $scope.input110 + ";" + $scope.input111 + ";" + $scope.input112 + ";";
                        let texto1 = $scope.input113 + ";" + $scope.input114 + ";" + $scope.input115 + ";" + $scope.input116 + ";" + $scope.input117 + ";" + $scope.input118 + ";" + $scope.input119 + ";" + $scope.input120 + ";" + $scope.input121 + ";" + $scope.input122 + ";" + $scope.input123 + ";" + $scope.input124 + ";" + $scope.input125 + ";" + $scope.input126 + ";" + $scope.input127 + ";" + $scope.input128 + ";" + $scope.input129 + ";" + $scope.input130 + ";" + $scope.input131 + ";" + $scope.input132 + ";" + $scope.input133 + ";" + $scope.input134 + ";" + $scope.input135 + ";" + $scope.input136 + ";" + $scope.input137 + ";" + $scope.input138 + ";" + $scope.input139 + ";" + $scope.input140 + ";" + $scope.input141 + ";" + $scope.input142 + ";" + $scope.input143 + ";" + $scope.input144 + ";" + $scope.input145 + ";" + $scope.input146 + ";" + $scope.input147 + ";" + $scope.input148 + ";" + $scope.input149 + ";" + $scope.input150 + ";" + $scope.input151 + ";" + $scope.input152 + ";" + $scope.input153 + ";" + $scope.input154 + ";" + $scope.input155 + ";" + $scope.input156 + ";" + $scope.input157 + ";" + $scope.input158 + ";" + $scope.input159 + ";" + $scope.input160 + ";" + $scope.input161 + ";" + $scope.input162 + ";" + $scope.input163 + ";" + $scope.input164 + ";" + $scope.input165 + ";" + $scope.input166 + ";" + $scope.input167 + ";" + $scope.input168 + ";" + $scope.input169 + ";" + $scope.input170 + ";" + $scope.input171 + ";" + $scope.input172 + ";" + $scope.input173 + ";" + $scope.input174 + ";" + $scope.input175 + ";" + $scope.input176 + ";" + $scope.input177 + ";" + $scope.input178 + ";" + $scope.input179 + ";" + $scope.input180 + ";" + $scope.input181 + ";" + $scope.input182 + ";" + $scope.input183 + ";" + $scope.input184 + ";" + $scope.input185 + ";" + $scope.input186 + ";" + $scope.input187 + ";";
                        let texto2 = $scope.input188 + ";" + $scope.input189 + ";" + $scope.input190 + ";" + $scope.input191 + ";" + $scope.input192 + ";" + $scope.input193 + ";" + $scope.input194 + ";" + $scope.input195 + ";" + $scope.input196 + ";" + $scope.input197 + ";" + $scope.input198 + ";" + $scope.input199 + ";" + $scope.input200 + ";" + $scope.input201 + ";" + $scope.input202 + ";" + $scope.input203 + ";" + $scope.input204 + ";" + $scope.input205 + ";" + $scope.input206 + ";" + $scope.input207 + ";" + $scope.input208 + ";" + $scope.input209 + ";" + $scope.input210 + ";" + $scope.input211 + ";" + $scope.input212 + ";" + $scope.input213 + ";" + $scope.input214 + ";" + $scope.input215 + ";" + $scope.input216 + ";" + $scope.input217 + ";" + $scope.input218 + ";" + $scope.input219 + ";" + $scope.input220 + ";" + $scope.input221 + ";" + $scope.input222 + ";" + $scope.input223 + ";" + $scope.input224 + ";" + $scope.input225 + ";" + $scope.input226 + ";" + $scope.input227 + ";" + $scope.input228 + ";" + $scope.input229 + ";" + $scope.input230 + ";" + $scope.input231 + ";" + $scope.input232 + ";" + $scope.input233 + ";" + $scope.input234 + ";" + $scope.input235 + ";" + $scope.input236 + ";" + $scope.input237 + ";" + $scope.input238 + ";" + $scope.input239 + ";" + $scope.input240 + ";" + $scope.input241 + ";" + $scope.input242 + ";" + $scope.input243 + ";" + $scope.input244 + ";" + $scope.input245 + ";" + $scope.input246 + ";" + $scope.input247 + ";" + $scope.input248 + ";" + $scope.input249 + ";" + $scope.input250 + ";" + $scope.input251 + ";" + $scope.input252 + ";" + $scope.input253 + ";" + $scope.input254 + ";" + $scope.input255 + ";" + $scope.input256 + ";" + $scope.input257 + ";" + $scope.input258 + ";" + $scope.input259 + ";" + $scope.input260 + ";" + $scope.count + ";";

                        $scope.forms.formText = texto + texto1 + texto2;
                        $http.put('/forms1', $scope.forms).then((result) => {
                            console.log(result.data);
                            Swal.fire({
                                type: 'success',
                                title: 'Hecho!',
                                text: 'Se guardó el formulario',
                                confirmButtonText: 'Ok!'
                            });
                        })
                    }
                    $scope.producto2 = function() {
                        if (document.getElementById("product2").style.display == "block") {
                            document.getElementById("product2").style.display = "none";
                            document.getElementById("add2").style.display = "block";
                            $scope.count = 1;
                        } else {
                            document.getElementById("product2").style.display = "block";
                            document.getElementById("add2").style.display = "none";
                            document.getElementById("add3").style.display = "block";
                            document.getElementById("delete2").style.display = "block";
                            $scope.count = 2;
                        }
                    }
                    $scope.producto3 = function() {
                        if (document.getElementById("product3").style.display == "block") {
                            document.getElementById("product3").style.display = "none";
                            document.getElementById("add3").style.display = "block";
                            document.getElementById("delete3").style.display = "none";
                            document.getElementById("delete2").style.display = "block";
                            $scope.count = 2;
                        } else {
                            document.getElementById("product3").style.display = "block";
                            document.getElementById("delete3").style.display = "block"
                            document.getElementById("add3").style.display = "none";
                            document.getElementById("delete2").style.display = "none";
                            $scope.count = 3;
                        }
                    }
                    $scope.myFunc = function() {
                        document.getElementById("input2").value = document.getElementById("input1").value;
                    };
                    $scope.func1 = function() {
                        $scope.input62 = (document.getElementById("input61").value / 100) * document.getElementById("input60").value;
                    };
                    $scope.func2 = function() {
                        $scope.input64 = (document.getElementById("input63").value / 100) * document.getElementById("input62").value;
                    };
                });
            </script>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\EQUIPO\Documents\Univalle 3\Proyecto de Sistemas\MisEdicionesGitHub\Incubadora_prototype_Valdivia\Incubadora_prototype\resources\views/form1.blade.php ENDPATH**/ ?>