@extends("Templates.welcome")
@section("title", "Administrar Docentes")
@section("script")
<script>
    var app = angular.module('TeacherModule', []);
    app.controller('TeacherController', ($scope, $http) => {
        $scope.teachers = []

        $scope.getTeachers = () => {
            $http.get('/teachers').then((res) => {
                $scope.teachers = res.data;
            })
        }

        angular.element(document).ready(() => {
            $scope.getTeachers();
        })

        $scope.deleteTeacher = (id) => {
            $http.delete(`/teachers/${id}`).then(res => {
                $scope.getTeachers();
            })
        }

        $scope.deleteTeacher = (id) => {
            if(window.confirm("Esta seguro que desea eliminar este registro?")){
                $http.delete(`/teachers/${id}`).then(res => {      
                    $scope.getTeachers();
                })
            }
        }

    })
</script>
@stop

@section("content")

    <header class="container-fluid p-2" style="background-color: #51525e;">
        <h4 class="text-white">Administrar Docentes</h4>
    </header>

    <section class="main_container" style="background-color:#51525e ;">
        <div class="menu text-white mt-2">
            <div class="logo_menu">
                <i class="fa fa-bars float-end fa-2x"></i>
            </div>
            <div class="user_style">
                <i class="fa fa-user fa-6x"></i>
            </div>
            <div class="user_style h3">
                Administrador
            </div>
        </div>
        <div class="content bg-white">
            <div class="text-white m-5 row body_main">
                <form class="form">
                    <input type="search" class="search-form">
                    <button type="submit" class="btn btn-primary" style="font-size: 18px;">
                        <i class="fa-solid fa-1x fa-magnifying-glass"></i>
                        Buscar
                    </button>
                    <a href="/newteacher" class="btn btn-dark text-white float-end" style="font-size: 20px;">Agregar Docente</a>
                </form>
                <div class="p-4 mt-3 rounded-4 body_card" ng-app="TeacherModule"
                    ng-controller="TeacherController">
                    <table class="table border-dark table_list">
                        <thead>
                            <tr>
                                <th>Docente</th>
                                <th>Asignatura</th>
                                <th>Email</th>
                                <th></th>
                            </th>
                        </thead>
                        <tbody>
                            <tr ng-repeat="t in teachers">
                                <td>
                                    @{{t.firstName}} @{{t.lastName}} @{{t.secondLastName}}
                                </td>
                                <td>
                                    @{{t.course}}
                                </td>
                                <td>
                                    @{{t.email}}
                                </td>
                                <td>
                                    <button class="btn btn-danger" ng-click="deleteTeacher(t.id)">Eliminar</button>
                                    <a href="@{{'/editteacher/' + t.id}}" class="btn btn-warning fw-bold fs-5">Modificar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </section>

    
@stop 