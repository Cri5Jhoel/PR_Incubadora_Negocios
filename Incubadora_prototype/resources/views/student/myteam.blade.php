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
    var app = angular.module('MyTeamListModule', [])
    app.controller('MyTeamListController', ($scope, $http) => {
        $scope.students = {}
        $scope.team={};
   

        angular.element(document).ready(() => {
           
            id = getParameterByName()
            $http.get(`/getTeam/${id}`).then((result) => {
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
    <div ng-app="MyTeamListModule" ng-controller="MyTeamListController" class="table-responsive">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="col-lg-12">
                <div  ng-repeat="student in students | limitTo:1" >
                    <h1  class="h2 mb-4 text-gray-800" ng-model="$scope.team"> @{{ student.teamName }}</h1>
                </div>
                
                <div class="col-lg-12" ng-repeat="student in students | limitTo:1" >
                   
                    <div class="card text-white bg-info col-lg-12" >
                        <div class="card-header bg-info">Etapa</div>
                            <div class="card-body">
                                <h4 ng-if="student.period ===1" class="card-text" >Propuesta de valor</h4>
                                <h4 ng-if="student.period ===2" class="card-title" >Mapa de competidores</h4>
                                <h4 ng-if="student.period ===3" class="card-title" >Análisis del Entorno y Grupos de Interés</h4>
                                <h4 ng-if="student.period ===4" class="card-title">Modelo de Negocio y Marketing</h4>
                                <h4 ng-if="student.period ===5"  class="card-title">Precio y viabilidad del negocio</h4>
                                <h4 ng-if="student.period ===6"  class="card-title" >Plan de impacto</h4>
                                <h4 ng-if="student.period ===7" class="card-title" >Plan de crecimiento</h4>
                               
                            </div>
                    </div>
                    

                </div>
            </div>
           
            
            <h1 class="h3 mb-4 text-gray-800" ng-model="team.teamName"></h1>
        </div>

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