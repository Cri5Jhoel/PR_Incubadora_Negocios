@extends("layouts.Dashboard")
@section("script")
<script type="text/javascript">
    var app = angular.module("TeamNewModule", []);
    app.controller("TeamNewController", ($scope, $http) => {
        $scope.team = {};

        $scope.postTeam = () => {
            $http.post('/teams', $scope.team).then((result) => {
                console.log(result.data);
                alert('Equipo registrado exitosamente!');

                window.location.href = '/listteams'
            })
        }
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Agregar nuevo equipo</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del equipo</h6>
        </div>
        <div class="card-body">
            <form ng-app="TeamNewModule" ng-controller="TeamNewController">
                <div>
                    Nombre del Equipo:
                    <input name="team_name" type="text" class="form-control" ng-model="team.teamName">
                </div>
                <br>

                <div>
                    <button type="button" ng-click="postTeam()" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div> 
    </div>
</div>
@stop