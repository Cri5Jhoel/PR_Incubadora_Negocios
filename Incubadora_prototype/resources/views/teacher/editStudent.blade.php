@extends('layouts.app')
@section("script")
<script type="text/javascript">
    var app = angular.module("StudentEditModule", []);
    app.controller("StudentEditController", ($scope, $http) => {
        $scope.student = {}

        angular.element(document).ready(() => {
            let url = window.location.href;
            let id = url[url.lastIndexOf('/') + 1];

            $http.get(`/students/${id}`).then((result) => {
                $scope.student = result.data
            })

            $scope.putStudent = () => {
                $http.put('/students', $scope.student).then((result) => {
                    window.location.href = '/liststudents'
                })
            }
        })
    })
</script>
@stop
@section('content')
<link rel="stylesheet" href=".../">

<header class="text-center">
    <h2>Administrar Estudiantes</h2>
</header>

<section class="main_container bg-dark border-top border-white">
    <div class="content bg-white">
        <form ng-app="StudentEditModule" ng-controller="StudentEditController">
            <div>
                First name:
                <input type="text" class="form-control" ng-model="student.firstName">
            </div>
            <div>
                Last name:
                <input type="text" class="form-control" ng-model="student.lastName">
            </div>
            <div>
                City:
                <input type="text" class="form-control" ng-model="student.city">
            </div>
            <div>
                Semester:
                <input type="number" class="form-control" ng-model="student.semester">
            </div>
            <div>
                Address:
                <textarea class="form-control" ng-model="student.address"></textarea>
            </div>
            <div>
                <button type="button" ng-click="putStudent()" class="btn btn-primary">Submit</button>
                <a href="/liststudents" class="btn btn-primary">Go back</a>
            </div>
        </form>
    </div>
</section>

@endsection