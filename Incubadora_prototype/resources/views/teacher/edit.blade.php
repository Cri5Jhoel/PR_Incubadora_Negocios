@extends("layouts.Dashboard")

@section("script")
<script type="text/javascript">
    var app = angular.module("TeacherEditModule", []);
    app.controller("TeacherEditController", ($scope, $http) => {
        $scope.teacher = {};

        angular.element(document).ready(() => {
            let url = window.location.href;
            var arrUrl = url.split('/')
            let id = arrUrl[arrUrl.length - 1];
            $http.get(`/teachers/${id}`).then((res) =>{
                $scope.teacher = res.data;
            })
        })

        $scope.putTeacher = () => {
            $http.put('/teachers', $scope.teacher).then((result) => {
            
                alert('Docente Modificado');

                window.location.href = '/listteachers'
            })
        }
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Editar Docentes</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del docente</h6>
    </div>
    <div class="card-body">
        <form ng-app="TeacherEditModule" ng-controller="TeacherEditController">
            <div>
                Nombres:
                <input type="text" class="form-control" ng-model="teacher.firstName">
            </div>
            <div>
                Primer apellido:
                <input type="text" class="form-control" ng-model="teacher.lastName">
            </div>
            <div>
                Segundo apellido:
                <input type="text" class="form-control" ng-model="teacher.secondLastName">
            </div>
            <div>
                Email:
                <input type="text" class="form-control" ng-model="teacher.email">
            </div>

            <div>
                <button type="button" ng-click="putTeacher()" class="btn btn-success">Actualizar</button>
                <a href="/listteachers" class="btn btn-primary">Volver</a>
            </div>
        </form>
    </div>
</div>
@stop