@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript">
    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }
    // var app = angular.module('TeamListModule', []);
    // app.controller('TeamListController', ($scope, $http) => {
    //     $scope.teamId = null;
    //     $scope.teams = []

    //     $scope.getTeams = () => {
    //         $http.get('/teams').then((result) => {
    //             $scope.teams = result.data;
    //         })
    //     }

    //     angular.element(document).ready(() => {
    //         $scope.getTeams();
    //     })

    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }
    var app = angular.module('TeamListModule', [])
    app.controller('TeamListController', ($scope, $http) => {
        $scope.students = {}
        angular.element(document).ready(() => {
            id = getParameterByName()
            $http.get(`/teamMembers/${id}`).then((result) => {
                $scope.students = result.data
            })
        })

     

        // $(document).ready(function() {
        //     $('#dataTable').DataTable();
        // });
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" ng-model="team.teamName"></h1>
            <h1 class="h3 mb-0 text-gray-800">Etapa</h1>
            <h1 class="h3 mb-4 text-gray-800" ng-model="team.teamName"></h1>
            <!-- <a href="/newteam" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fas fa-user-plus fa-sm text-white-50"></i> Nuevo Equipo</a> -->
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