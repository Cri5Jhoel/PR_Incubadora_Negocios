
<?php $__env->startSection("script"); ?>
<script type="text/javascript">
    function getId(url = window.location.href) {
        let urlParts = url.split('/');
        return urlParts[urlParts.length - 1];
    }

    var app = angular.module('TeamListModule', [])
    app.controller('TeamListController', ($scope, $http) => {
        $scope.students = {}
        $scope.team={};
   

        angular.element(document).ready(() => {
           
            id = getId()
            $http.get(`/teamMembers/${id}`).then((result) => {
                $scope.students = result.data
                
            })
        })
        //-----------------------

       console.log($scope.students);
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="container-fluid">
    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div class="col-lg-12">
                <div  ng-repeat="student in students | limitTo:1" >
                    <h1  class="h2 mb-4 text-gray-800" ng-model="$scope.team"> {{ student.teamName }}</h1>
                </div>
                
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                        <i class="fas fa-pencil fa-sm text-white-50 "></i>  Editar</a>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                        <i class="fas fa-trash fa-sm text-white-50 "></i>  Eliminar</a>
                </div>
                

                <div class="col-lg-12 ">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Etapa</div>
                            <div class="row no-gutters align-items-center">

                            <div style="width: 400px"  ng-repeat="student in students | limitTo:1" >
                                <h4 ng-if="student.phase ===1" class="card-text" >Propuesta de valor</h4>
                                <h4 ng-if="student.phase ===2" class="card-title" >Mapa de competidores</h4>
                                <h4 ng-if="student.phase ===3" class="card-title" >Análisis del Entorno y Grupos de Interés</h4>
                                <h4 ng-if="student.phase ===4" class="card-title">Modelo de Negocio y Marketing</h4>
                                <h4 ng-if="student.phase ===5"  class="card-title">Precio y viabilidad del negocio</h4>
                                <h4 ng-if="student.phase ===6"  class="card-title" >Plan de impacto</h4>
                                <h4 ng-if="student.phase ===7" class="card-title" >Plan de crecimiento</h4>

                                <br>
                                <div class="col-auto" >
                                    <div ng-if="student.phase ===1"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">14%</div>
                                    <div ng-if="student.phase ===2"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">28%</div>
                                    <div ng-if="student.phase ===3"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">42%</div>
                                    <div ng-if="student.phase ===4"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">56%</div>
                                    <div ng-if="student.phase ===5"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                                    <div ng-if="student.phase ===6"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">86%</div>
                                    <div ng-if="student.phase ===7"  class="h5 mb-0 mr-3 font-weight-bold text-gray-800">100%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div ng-if="student.phase ===1" class="progress-bar bg-info" role="progressbar"
                                            style="width: 14%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                        <div ng-if="student.phase ===2"  class="progress-bar bg-info" role="progressbar"
                                            style="width: 28%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                        <div ng-if="student.phase ===3"  class="progress-bar bg-info" role="progressbar"
                                            style="width: 42%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                        <div ng-if="student.phase ===4"  class="progress-bar bg-info" role="progressbar"
                                            style="width: 56%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                        <div ng-if="student.phase ===5"  class="progress-bar bg-info" role="progressbar"
                                            style="width: 70%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                        <div ng-if="student.phase ===6"  class="progress-bar bg-info" role="progressbar"
                                            style="width: 86%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                        <div ng-if="student.phase ===7"  class="progress-bar bg-info" role="progressbar"
                                            style="width: 100%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100">
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
            
            
     
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Integrantes</h6>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Nombre 
                            </th>
                            <th>
                               Primer Apellido
                            </th>
                            <th>
                               Segundo Apellido
                            </th>
                            <th>
                               Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="student in students">
                            <td>
                                {{ student.firstName }}
                            </td>
                            <td>
                                {{ student.lastName }}
                            </td>
                            <td>
                                {{ student.secondLastName }}
                            </td>
                            <td>
                                {{ student.email }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.Dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\EQUIPO\Documents\Univalle 3\Proyecto de Sistemas\MisEdicionesGitHub\Incubadora_prototype_Valdivia\Incubadora_prototype\resources\views/team/members.blade.php ENDPATH**/ ?>