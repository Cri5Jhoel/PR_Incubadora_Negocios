
<?php $__env->startSection("script"); ?>
<script type="text/javascript">
    function getId(url = window.location.href) {
        let urlParts = url.split('/');
        return urlParts[urlParts.length - 1];
    }

    var app = angular.module('TeamListModule', [])
    app.controller('TeamListController', ($scope, $http) => {
        $scope.students = {}
        $scope.team={};
   

        angular.element(document).ready(() => {
           
            id = getId()
            $http.get(`/teamMembers/${id}`).then((result) => {
                $scope.students = result.data
                
            })
        })
        //-----------------------

       console.log($scope.students);
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("content"); ?>
<div class="container-fluid">
    <div ng-app="TeamListModule" ng-controller="TeamListController" class="table-responsive">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

    <div class="col-lg-12">
      <h1  class="h2 mb-4 text-gray-800"> <?php echo e($teamName); ?></h1>

    <div class="col-lg-12 ">
<div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Etapa</div>
                <div class="row no-gutters align-items-center">

                <div style="width: 400px"  >
                   <h4 class="card-text" ><?php echo e($phaseName); ?></h4>
                    <br>
                    <div class="col-auto" >
                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo e($percentage); ?> %</div>

                    </div>
                            <div class="col">
                               <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: <?php echo e($percentage); ?>%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </div>
                                        </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
           
           
        </div>
    </div>
</div>
</div>
</div>
    

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Integrantes</h6>
            </div>
            
            <div class="card-body">
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Primer Apellido
                            </th>
                            <th>
                                Segundo Apellido
                            </th>
                            <th>
                                Email
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($team->firstName); ?>

                            </td>
                            <td>
                                <?php echo e($team->lastName); ?>

                            </td>
                            <td>
                                <?php echo e($team->secondLastName); ?>

                            </td>
                            <td>
                                <?php echo e($team->email); ?>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.Dashboard", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\EQUIPO\Documents\Univalle 3\Proyecto de Sistemas\MisEdicionesGitHub\Incubadora_Jaldin\Incubadora_prototype_SJ\resources\views/student/myteam.blade.php ENDPATH**/ ?>