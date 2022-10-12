@extends("layouts.main")
@section("title", "Lista de Equipos")
@section("script")
<script type="text/javascript">
    var app = angular.module('TeamListModule', []);
    app.controller('TeamListController', ($scope, $http) => {
        $scope.teams = []

        $scope.getTeams = () => {
            $http.get('/teams').then((result) => {
                $scope.teams = result.data;
            })
        }

        angular.element(document).ready(() => {
            $scope.getTeams();
        })

        $scope.deleteTeams = (id) => {
            $http.delete(`/teams/${id}`).then((result) => {
                $scope.getTeams()
            })
        }

        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lista de Equipos</h1>

        <a href="/newteam" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Nuevo Equipo</a>
    </div>

    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>
                        Nombre del Equipo
                    </th>
                    <th>
                        Periodo
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="team in teams">
                    <td>
                        @{{ team.teamName }}
                    </td>
                    <td>
                        @{{ team.period }}
                    </td>
                    
                    <td>
                        <a href="@{{ '/editteam/' + team.id }}" class="btn btn-primary">Editar</a>
                        <button type="button"  class="btn btn-danger" ng-click="deleteStudent(team.id)" data-toggle="modal" data-target="#logoutModal">Borrar</button>

                            <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al estudiante?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-primary" href="login.html" ng-click="deleteStudent(student.id)">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop