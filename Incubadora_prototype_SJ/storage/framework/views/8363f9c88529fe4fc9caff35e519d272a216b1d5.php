
<?php $__env->startSection("title", "Lista de Estudiantes"); ?>
<?php $__env->startSection("script"); ?>
<script type="text/javascript">
    var app = angular.module('StudentListModule', []);
    app.controller('StudentListController', ($scope, $http) => {
        $scope.students = []

        $scope.getStudents = () => {
            $http.get('/students').then((result) => {
                $scope.students = result.data;
            })
        }

        angular.element(document).ready(() => {
            $scope.getStudents();
        })

        $scope.deleteStudent = (id) => {
            $http.delete(`/students/${id}`).then((result) => {
                $scope.getStudents()
            })
        }

        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Lista de Estudiantes</h1>

        <a href="/newstudent" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                class="fas fa-user-plus fa-sm text-white-50"></i> Nuevo Estudiante</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Estudiantes registrados</h6>
        </div>
        <div class="card-body">
            <div ng-app="StudentListModule" ng-controller="StudentListController" class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Nombres
                            </th>
                            <th>
                                Primer apellido
                            </th>
                            <th>
                                Segundo apellido
                            </th>
                            <th>
                                Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="student in students">
                            <td>
                                {{ student.firstName }}
                            </td>
                            <td>
                                {{ student.lastName }}
                            </td>
                            <td>
                                {{ student.secondLastName }}
                            </td>
                            <td>
                                {{ student.email }}
                            </td>
                            <td>
                                <a href="{{ '/editstudent/' + student.id }}" class="btn btn-primary">Editar</a>
                                <button type="button"  class="btn btn-danger" ng-click="deleteStudent(student.id)" data-toggle="modal" data-target="#logoutModal">Borrar</button>

                                 <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al estudiante?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body"></div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                    <a class="btn btn-primary" href="login.html" ng-click="deleteStudent(student.id)">Eliminar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.StudentDashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\teran\Desktop\-\PR_Incubadora_Negocios-calvi_d\Incubadora_prototype\Incubadora_prototype\resources\views/student/list.blade.php ENDPATH**/ ?>