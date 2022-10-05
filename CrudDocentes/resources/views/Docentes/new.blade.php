@extends("Templates.welcome")
@section("title", "Nuevo Docente")
@section("script")
<script type="text/javascript">
    var app = angular.module("TeacherNewModule", []);
    app.controller("TeacherNewController", ($scope, $http) => {
        $scope.teacher = {};

        $scope.postTeacher = () => {
            $http.post('/teachers', $scope.teacher).then((result) => {
                alert('Docente Registrado');

                window.location.href = '/listteachers'
            })
        }
    })
</script>
@stop
@section("content")
<div class="container">
<div class="bg bg-primary p-3 text-white mb-4">
    <h1>Nuevo Docente</h1>
</div>
<form ng-app="TeacherNewModule" ng-controller="TeacherNewController">
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
    <!-- <div>
        Password:
        <input type="text" class="form-control" ng-model="teacher.password">
    </div> -->
    <div class="mt-4">
        <button type="button" ng-click="postTeacher()" class="btn btn-primary">Añadir</button>
    </div>
</form>
</div>
@stop