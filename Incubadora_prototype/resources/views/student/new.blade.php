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
                    <!-- <span style="color:red" ng-show="myForm.student_name.$dirty && myForm.student_name.$invalid">
                        <span ng-show="myForm.student_name.$error.required">Nombres son requeridos.</span>
                    </span> -->
                    <!-- @error('student_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror -->
                </div>
                <div>
                    Primer apellido:
                    <input name="student_lastname" type="text" class="form-control" ng-model="student.lastName" required>
                    <!-- @error('student_lastname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror -->
                </div>
                <div>
                    Segundo apellido:
                    <input name="student_secondlastname" type="text" class="form-control" ng-model="student.secondLastName" required>
                    <!-- @error('student_secondlastname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror -->
                </div>
                <div>
                    Email:
                    <input name="student_email" type="email" class="form-control" ng-model="student.email" required>
                    <!-- @error('student_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror -->
                </div>
                <div>
                    Emprendimiento::
                    
                   
                    <select name="IdTem" id="inputTeamId" class="form-control" ng-model="student.teamID" required>
                        <option value="" disabled selected hidden>Seleccione un emprenimiento</option>
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