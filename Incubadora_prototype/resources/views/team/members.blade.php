@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript">
    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }
 

    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }
    var app = angular.module('TeamListModule', [])
    app.controller('TeamListController', ($scope, $http) => {
        $scope.students = {}
        $scope.team={};
   

        angular.element(document).ready(() => {
           
            id = getParameterByName()
            $http.get(`/teamMembers/${id}`).then((result) => {
                $scope.students = result.data
                
            })
        })
        //-----------------------

       console.log($scope.students);
        


     

       
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
       

            <div class="col-lg-12">
                <div  ng-repeat="student in students | limitTo:1" >
                    <h1  class="h2 mb-4 text-gray-800" ng-model="$scope.team"> @{{ student.teamName }}</h1>

                </div>

                <div class="col-lg-12 ">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Etapa</div>
                            <div class="row no-gutters align-items-center">

                            <div   ng-repeat="student in students | limitTo:1" >

                                <h4 ng-if="student.period ===1" class="card-text" >Propuesta de valor     .</h4>
                                <h4 ng-if="student.period ===2" class="card-title" >Mapa de competidores</h4>
                                <h4 ng-if="student.period ===3" class="card-title" >Análisis del Entorno y Grupos de Interés</h4>
                                <h4 ng-if="student.period ===4" class="card-title">Modelo de Negocio y Marketing</h4>
                                <h4 ng-if="student.period ===5"  class="card-title">Precio y viabilidad del negocio</h4>
                                <h4 ng-if="student.period ===6"  class="card-title" >Plan de impacto</h4>
                                <h4 ng-if="student.period ===7" class="card-title" >Plan de crecimiento</h4>
                            </div>
                            <br>
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                    <   div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
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



           
            
            <h1 class="h3 mb-4 text-gray-800" ng-model="team.teamName"></h1>
            <!-- <a href="/newteam" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fas fa-user-plus fa-sm text-white-50"></i> Nuevo Equipo</a> -->
     

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
                                @{{ student.firstName }}
                            </td>
                            <td>
                                @{{ student.lastName }}
                            </td>
                            <td>
                                @{{ student.secondLastName }}
                            </td>
                            <td>
                                @{{ student.email }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@stop