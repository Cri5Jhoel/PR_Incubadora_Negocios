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
                @csrf
                <div>
                    Nombres:
                    <input name="student_name" type="text" class="form-control" ng-model="student.firstName" required>
                </div>
                <br>
                <div>
                    Primer apellido:
                    <input name="student_lastname" type="text" class="form-control" ng-model="student.lastName" required>
                </div>
                <br>
                <div>
                    Segundo apellido:
                    <input name="student_secondlastname" type="text" class="form-control" ng-model="student.secondLastName" required>
                </div>
                <br>
                <div>
                    Email:
                    <input name="student_email" type="email" class="form-control" ng-model="student.email" required>
                </div>
                <br>
                <div>
                    Emprendimiento:
                    <select name="IdTeam" id="inputTeamId" class="form-control" ng-model="student.teamID" required>
                       
                        @foreach($teams as $team)
                            <option value="{{ $team['id'] }}">{{ $team['teamName'] }}</option>

                        @endforeach
                    </select>
                </div>
                <br>

                <div>
                    <button type="button" ng-click="postStudent()" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div> 
    </div>
</div>
@stop