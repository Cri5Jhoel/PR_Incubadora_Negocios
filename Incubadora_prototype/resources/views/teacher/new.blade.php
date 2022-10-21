@extends("layouts.Dashboard")

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
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Agregar nuevo Docente</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del docente</h6>
        </div>
        <div class="card-body">
            <form ng-app="TeacherNewModule" ng-controller="TeacherNewController">
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
              
                <br>

                <div>
                    <button type="button" ng-click="postTeacher()" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div> 
    </div>
</div>
@stop