<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href=".../">

<header class="text-center">
    <h2>Teams Progress</h2>
</header>

<section class="main_container">
    <div class="content">
        <div class="text-white m-5 row body_main">
            <div class="step-progress">
                <span class="text-black">dawda</span>
                <ul>
                    <li class="progress-box">
                        <div class="progress one" >

                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress two">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress three">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress four">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress five">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress six">
                        </div>
                    </li>
                    <li class="progress-box">
                        <div class="progress seven">
                        </div>
                    </li>
                </ul>

            </div>
            <script src="<?php echo e(asset('js/progress.js')); ?>"></script>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\teran\Desktop\-\PR_Incubadora_Negocios-calvi_d\Incubadora_prototype\Incubadora_prototype\resources\views/teacher/progress.blade.php ENDPATH**/ ?>