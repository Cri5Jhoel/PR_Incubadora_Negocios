@extends("Templates.welcome")
@section("title", "Editar Docente")
@section("script")
<script type="text/javascript">
    var app = angular.module("TeacherEditModule", []);
    app.controller("TeacherEditController", ($scope, $http) => {
        $scope.teacher = {};

        angular.element(document).ready(() => {
            let url = window.location.href;
            let id = url[url.lastIndexOf('/') + 1];

            $http.get(`/teachers/${id}`).then((res) =>{
                $scope.teacher = res.data;
            })
        })

        $scope.putTeacher = () => {
            $http.put('/teachers', $scope.teacher).then((result) => {
            
                alert('Docente Editado');

                window.location.href = '/listteachers'
            })
        }
    })
</script>
@stop
@section("content")
<div class="container">
<div class="bg bg-primary p-3 text-white mb-4">
    <h1>Editar Docente</h1>
</div>
<form ng-app="TeacherEditModule" ng-controller="TeacherEditController">
    <div class="mt-3">
        Nombres:
        <input type="text" class="form-control" ng-model="teacher.firstName">
    </div>
    <div class="mt-3">
        Primer Apellido:
        <input type="text" class="form-control" ng-model="teacher.lastName">
    </div>
    <div class="mt-3">
        Segundo Apellido:
        <input type="text" class="form-control" ng-model="teacher.secondLastName">
    </div>
    <div class="mt-3" >
        Asignatura:
        <input type="text" class="form-control" ng-model="teacher.course">
    </div>
    <div class="mt-3">
        Email:
        <input type="text" class="form-control" ng-model="teacher.email">
    </div>
    <div>
        Contraseña:
        <input type="text" class="form-control" ng-model="teacher.password">
    </div>
    <div class="mt-4">
        <button type="button" ng-click="putTeacher()" class="btn btn-primary">Editar</button>
    </div>
</form>
</div>
@stop