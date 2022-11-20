<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'INCUVALAB')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js" integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/Admin_Style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/progress.css')); ?>">
    <!-- <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>"> -->
    <!-- <link rel="stylesheet" href="<?php echo e(asset('css/style copy.css')); ?>"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body>
    <div id="app">
        <div>
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark " >
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 fixed">
                            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                                <span class="fs-5 d-none d-sm-inline">Menu</span>
                            </a>
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <?php if(Auth::user()->userType == 'admin'): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('admin.teams')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4"></i> <span class="ms-1 d-none d-sm-inline">Teams</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('admin.teacherList')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Teachers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('admin.progress')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Students Progress</span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(Auth::user()->userType == 'teacher'): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('teacher.index')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('teacher.students')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Teams</span>
                                    </a>
                                </li>
                                <li>inde
                                    <a href="<?php echo e(route('teacher.progress')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Students Progress</span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if(Auth::user()->userType == 'student'): ?>
                                <li>
                                    <a href="<?php echo e(route('teamProgress')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Progreso
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('form1')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Formulario1
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('form2')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Formulario2
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('form3')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Formulario3
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('form4')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Formulario4
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('form5')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Formulario5
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('form6')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Formulario6
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('form7')); ?>" class="nav-link align-middle px-0">
                                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Formulario7
                                        </span>
                                    </a>
                                </li>
                                <?php endif; ?>
                                
                            </ul>
                            <hr>
                            <div class="dropdown pb-4">
                                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-none d-sm-inline mx-1"><?php echo e(Auth::user()->userName); ?></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li> -->
                                    <!-- <li>
                                        <hr class="dropdown-divider">
                                    </li> -->
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col py-3" style="position: relative;">
                        <main>
                            <?php echo $__env->yieldContent('content'); ?>
                        </main>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\EQUIPO\Documents\Univalle 3\Proyecto de Sistemas\MisEdicionesGitHub\Incubadora_prototype_Valdivia\Incubadora_prototype\resources\views/layouts/app.blade.php ENDPATH**/ ?>