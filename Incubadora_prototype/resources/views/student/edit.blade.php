@extends("layouts.Dashboard")

@section("script")
<script type="text/javascript">
    function getParameterByName(url = window.location.href) {
        // Obtener el valor numerico del id al final de la direccion url
        return url[url.lastIndexOf('/') + 1]
    }
    var app = angular.module('StudentEditModule', [])
    app.controller('StudentEditController', ($scope, $http) => {
        $scope.student = {}
        angular.element(document).ready(() => {
            id = getParameterByName()
            $http.get(`/students/${id}`).then((result) => {
                $scope.student = result.data
            })
        })
        $scope.putStudent = () => {
            $http.put('/students', $scope.student).then((result) => {
                window.location.href = '/liststudents'
            })
        }
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Editar estudiante</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del estudiante</h6>
    </div>
    <div class="card-body">
        <form ng-app="StudentEditModule" ng-controller="StudentEditController">
            <div>
                Nombres:
                <input type="text" class="form-control" ng-model="student.firstName">
            </div>
            <div>
                Primer apellido:
                <input type="text" class="form-control" ng-model="student.lastName">
            </div>
            <div>
                Segundo apellido:
                <input type="text" class="form-control" ng-model="student.secondLastName">
            </div>
            <div>
                Email:
                <input type="text" class="form-control" ng-model="student.email">
            </div>

            <div>
                <button type="button" ng-click="putStudent()" class="btn btn-success">Actualizar</button>
                <a href="/liststudents" class="btn btn-primary">Volver</a>
            </div>
        </form>
    </div>
</div>
@stop