


<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Cambia tu contraseña</h6>
                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form>
                       
                        <div>
                            <label for="oldPass">Contraseña anterior:</label>
                            <input id="oldPass" type="password" class="form-control" >
                        </div>
                        <br>
                        <div>
                            Nuava contraseña:
                            <input type="password" class="form-control">
                        </div>
                        <br>
                        <div>
                            Confirmar nueva contraseña:
                            <input type="password" class="form-control" >
                        </div>
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary"> Confirmar</button>
        
                        </center>
        
                    </form>
                </div>
            </div>
            
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\EQUIPO\Documents\Univalle 3\Proyecto de Sistemas\MisEdicionesGitHub\Incubadora_prototype_Valdivia\Incubadora_prototype\resources\views/ChangePass.blade.php ENDPATH**/ ?>