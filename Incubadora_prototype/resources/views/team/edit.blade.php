@extends("layouts.main")
@section("title", "Editar Equipo")
@section("script")
<script type="text/javascript">
    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }
    var app = angular.module('TeamEditModule', [])
    app.controller('TeamEditController', ($scope, $http) => {
        $scope.team = {}
        angular.element(document).ready(() => {
            id = getParameterByName()
            $http.get(`/teams/${id}`).then((result) => {
                $scope.team = result.data
            })
        })
        $scope.putTeam = () => {
            $http.put('/teams', $scope.team).then((result) => {
                window.location.href = '/listteams'
            })
        }
    })
</script>
@stop
@section("content")
<form ng-app="TeamEditModule" ng-controller="TeamEditController">
    <div>
        Nombre del Equipo:
        <input type="text" class="form-control" ng-model="team.teamName">
    </div>
    <!-- <div>
        Periodo:
        <input type="text" class="form-control" ng-model="team.lastName">
    </div> -->

    <div>
        <button type="button" ng-click="putTeam()" class="btn btn-success">Actualizar</button>
        <a href="/listteams" class="btn btn-primary">Volver</a>
    </div>
@stop