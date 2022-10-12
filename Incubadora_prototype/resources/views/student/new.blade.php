@extends("layouts.Dashboard")

@section("script")
<script type="text/javascript">
    var app = angular.module("StudentNewModule", []);
    app.controller("StudentNewController", ($scope, $http) => {
        $scope.student = {};

        $scope.postStudent = () => {
            $http.post('/students', $scope.student).then((result) => {
                console.log(result.data);
                alert('Estudiante registrado exitosamente');

                window.location.href = '/liststudents'
            })
        }
    })
</script>
@stop
@section("content")
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Agregar nuevo estudiante</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del estudiante</h6>
        </div>
        <div class="card-body">
            <form ng-app="StudentNewModule" ng-controller="StudentNewController">
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
                <!-- <div>
                    Password:
                    <input type="text" class="form-control" ng-model="student.password">
                </div> -->
                <br>

                <div>
                    <button type="button" ng-click="postStudent()" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div> 
    </div>
</div>
@stop