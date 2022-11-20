
<?php $__env->startSection("script"); ?>
<script
    src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"> 
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script type="text/javascript">
    function getId(url = window.location.href) {
        let urlParts = url.split('/');
        return urlParts[urlParts.length - 1];
    }
    var app = angular.module('TimeEditModule', []);
    const stripDate = date => {
        return date.toISOString().split('T')[0];
    }
    app.controller('TimeEditController', ($scope, $http) => {
        $scope.time = {};
        angular.element(document).ready(() => {
            id = getId()
            $http.get(`/times/${id}`).then((result) => {
                $scope.time = result.data;

                $scope.time.form1_start = new Date(result.data.form1_start);
                $scope.time.form1_end = new Date(result.data.form1_end);
                $scope.time.form2_start = new Date(result.data.form2_start);
                $scope.time.form2_end = new Date(result.data.form2_end);
                $scope.time.form3_start = new Date(result.data.form3_start);
                $scope.time.form3_end = new Date(result.data.form3_end);
                $scope.time.form4_start = new Date(result.data.form4_start);
                $scope.time.form4_end = new Date(result.data.form4_end);
                $scope.time.form5_start = new Date(result.data.form5_start);
                $scope.time.form5_end = new Date(result.data.form5_end);
                $scope.time.form6_start = new Date(result.data.form6_start);
                $scope.time.form6_end = new Date(result.data.form6_end);
                $scope.time.form7_start = new Date(result.data.form7_start);
                $scope.time.form7_end = new Date(result.data.form7_end);
            });
        });
        $scope.putTime = () => {
            let time = {
                id: $scope.time.id,
                year: $scope.time.year,
                form1_start: stripDate($scope.time.form1_start),
                form1_end: stripDate($scope.time.form1_end),
                form2_start: stripDate($scope.time.form2_start),
                form2_end: stripDate($scope.time.form2_end),
                form3_start: stripDate($scope.time.form3_start),
                form3_end: stripDate($scope.time.form3_end),
                form4_start: stripDate($scope.time.form4_start),
                form4_end: stripDate($scope.time.form4_end),
                form5_end: stripDate($scope.time.form5_end),
                form5_start: stripDate($scope.time.form5_start),
                form6_start: stripDate($scope.time.form6_start),
                form6_end: stripDate($scope.time.form6_end),
                form7_start: stripDate($scope.time.form7_start),
                form7_end: stripDate($scope.time.form7_end)
            };
            $http.put('/times', time).then((result) => {
                console.log(result.data);
                if(result.data['result']== 'error'){
                    //console.log(result.data);
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Ya existe una gestion con la misma informacion.'
                     
                    });
                }
                else{
                    Swal.fire({
                        type: 'success',
                        title: 'Hecho!',
                        text: 'Se actualizó la gestion exitosamente.',
                        confirmButtonColor: '#28A745',
                        confirmButtonText: 'Ok',
                    }) .then(resultado => {
                        if (resultado.value) {
                            
                            window.location.href = '/listtimes'
                        }
                    });

                  
                }
            })
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Editar gestion y tiempos</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos de la gestion</h6>
    </div>
    <div class="card-body">
    <form ng-app="TimeEditModule" ng-controller="TimeEditController" name="myForm">
        <div>
            Nombre de la gestion:
            <input name="year" type="text" class="form-control" ng-model="time.year" ng-required="true">
            <span style="color:red" ng-show="myForm.time_year.$touched && myForm.time_year.$error.required">Nombre de la gestion requerida.</span>
        </div>
        <br>
        <div>
            Fechas del formulario 1:
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form1_start" type="date" class="form-control" ng-model="time.form1_start" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form1_start.$touched && myForm.time_form1_start.$error.required">Fecha de inicio requerida.</span>
                        <label for="time_form1_start">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form1_end" type="date" class="form-control" ng-model="time.form1_end" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form1_end.$touched && myForm.time_form1_end.$error.required">Fecha de finalizacion requerida.</span>
                        <label for="time_form1_end">Fecha de finalizacion</label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            Fechas del formulario 2:
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form2_start" type="date" class="form-control" ng-model="time.form2_start" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form2_start.$touched && myForm.time_form2_start.$error.required">Fecha de inicio requerida.</span>
                        <label for="time_form2_start">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form2_end" type="date" class="form-control" ng-model="time.form2_end" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form2_end.$touched && myForm.time_form2_end.$error.required">Fecha de finalizacion requerida.</span>
                        <label for="time_form2_end">Fecha de finalizacion</label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            Fechas del formulario 3:
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form3_start" type="date" class="form-control" ng-model="time.form3_start" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form3_start.$touched && myForm.time_form3_start.$error.required">Fecha de inicio requerida.</span>
                        <label for="time_form3_start">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form3_end" type="date" class="form-control" ng-model="time.form3_end" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form3_end.$touched && myForm.time_form3_end.$error.required">Fecha de finalizacion requerida.</span>
                        <label for="time_form3_end">Fecha de finalizacion</label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            Fechas del formulario 4:
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form4_start" type="date" class="form-control" ng-model="time.form4_start" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form4_start.$touched && myForm.time_form4_start.$error.required">Fecha de inicio requerida.</span>
                        <label for="time_form4_start">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form4_end" type="date" class="form-control" ng-model="time.form4_end" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form4_end.$touched && myForm.time_form4_end.$error.required">Fecha de finalizacion requerida.</span>
                        <label for="time_form4_end">Fecha de finalizacion</label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            Fechas del formulario 5:
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form5_start" type="date" class="form-control" ng-model="time.form5_start" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form5_start.$touched && myForm.time_form5_start.$error.required">Fecha de inicio requerida.</span>
                        <label for="time_form5_start">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form5_end" type="date" class="form-control" ng-model="time.form5_end" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form5_end.$touched && myForm.time_form5_end.$error.required">Fecha de finalizacion requerida.</span>
                        <label for="time_form5_end">Fecha de finalizacion</label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            Fechas del formulario 6:
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form6_start" type="date" class="form-control" ng-model="time.form6_start" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form6_start.$touched && myForm.time_form6_start.$error.required">Fecha de inicio requerida.</span>
                        <label for="time_form6_start">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form6_end" type="date" class="form-control" ng-model="time.form6_end" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form6_end.$touched && myForm.time_form6_end.$error.required">Fecha de finalizacion requerida.</span>
                        <label for="time_form6_end">Fecha de finalizacion</label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            Fechas del formulario 7:
            <div class="row">
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form7_start" type="date" class="form-control" ng-model="time.form7_start" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form7_start.$touched && myForm.time_form7_start.$error.required">Fecha de inicio requerida.</span>
                        <label for="time_form7_start">Fecha de inicio</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form">
                        <input name="time_form7_end" type="date" class="form-control" ng-model="time.form7_end" ng-required="true">
                        <span style="color:red" ng-show="myForm.time_form7_end.$touched && myForm.time_form7_end.$error.required">Fecha de finalizacion requerida.</span>
                        <label for="time_form7_end">Fecha de finalizacion</label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div>
            <button type="button" ng-click="putTime()" class="btn btn-success" ng-disabled="myForm.$invalid">Actualizar</button>
            <a href="/listtimes" class="btn btn-primary">Volver</a>
        </div>
    </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.Dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\EQUIPO\Documents\Univalle 3\Proyecto de Sistemas\MisEdicionesGitHub\Incubadora_Jaldin\Incubadora_prototype_SJ\resources\views/time/edit.blade.php ENDPATH**/ ?>