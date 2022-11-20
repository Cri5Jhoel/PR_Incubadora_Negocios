<?php $__env->startSection("script"); ?>
<script type="text/javascript">
    var app = angular.module('StudentListModule', []);
    app.controller('StudentListController', ($scope, $http) => {
        $scope.students = []

        $scope.getStudents = () => {
            $http.get('/students').then((result) => {
                $scope.students = result.data
            })
        }

        angular.element(document).ready(() => {
            $scope.getStudents()
        })

        $scope.deleteStudent = (id) => {
            $http.delete(`/students/${id}`).then((result) => {
                $scope.getStudents()
            })
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href=".../">

<header class="text-center">
    <h2>Administrar Estudiantes</h2>
</header>

<section class="main_container bg-dark border-top border-white">
    <div class="content bg-white">
        <div class="text-white m-5 row body_main">
            <form class="row g-3">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Student Name" aria-label="Student Name" aria-describedby="basic-addon2">
                        <button type="submit" class="btn btn-primary" style="font-size: 20px;">
                            <i class="fa-solid fa-1x fa-magnifying-glass"></i>
                            Buscar
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-dark text-white float-end" style="font-size: 20px;">Vista</button>
                </div>

            </form>
            <div class="p-4 mt-3 rounded-4 body_card">
                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col" class="col-md-2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="student in students">
                            <td>
                                <!-- {{ student.id }} -->
                            </td>
                            <td>
                                <!-- {{ student.firstName }} -->
                            </td>
                            <td>
                                <!-- {{ student.lastName }} -->
                            </td>

                            <td>
                                <a href="<?php echo e(route('teacher.editStudent')); ?>" class="btn btn-primary">Edit</a>
                                <a type="button" ng-click="deleteStudent(student.id)" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\teran\Desktop\-\PR_Incubadora_Negocios-calvi_d\Incubadora_prototype\Incubadora_prototype\resources\views/teacher/index.blade.php ENDPATH**/ ?>