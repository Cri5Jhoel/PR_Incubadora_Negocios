<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOG IN</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
        <link rel="stylesheet" href="<?php echo e(asset('css/login_style.css')); ?>">
      
    </head>
      
    <body>
          <!-- FORGOT PASSPORD (OLVIDASTE TU CONTRASEÑA) -->
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="POST" action="<?php echo e(route('forgotPassword')); ?>">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php elseif(session('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>

                <?php echo csrf_field(); ?>
                 
                    <h1>¿Olvidaste tu contraseña?</h1>
                    <br>
                    <p>Escribe tu dirección de correo electrónico y te enviaremos tu nueva contraseña.</p>
                

                    <input id="email" placeholder="E-mail" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                  
                    <button type="submit" class="btn btn-primary">
                       Cambiar contraseña
                    </button>
             
                </form>
            </div>

            <!-- LOG IN (INICIO DE SESIÓN) -->
            <div class="form-container sign-in-container">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <h1>Inicia Sesión</h1>
                
                    <input id="email" placeholder="E-mail" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <input id="password" placeholder="Contraseña" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    
                    <button type="submit" class="btn btn-primary">
                        <?php echo e(__('Ingresar')); ?>

                    </button>
                </form>
            </div>
            <!-- BANNER QUE CAMBIA SEGÚN EL MENÚ -->
            <div class="overlay-container">
                <div class="overlay">
                    <!-- SI ESTÁ EN FORGOT PASSWORD...--->
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenido de Vuelta!</h1>
                        <p>Regresa a tu materializador personal de ideas</p>
                        <button class="ghost" id="signIn">Ingresa</button>
                        <br>
                        
                    </div>
                    <!-- SI ESTÁ EN LOG IN...--->
                    <div class="overlay-panel overlay-right">
                        <h1>¿Olvidates tu contraseña?</h1>
                        <p>Te entendemos, estas cosas pasan</p>
                        <button class="ghost" id="signUp">Cambiar contraseña</button>
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>

        
        
        <!-- Código JavaScript -->
        <script  src="<?php echo e(asset('js/loginScript.js')); ?>"></script>
        
    </body>
</html><?php /**PATH C:\Users\EQUIPO\Documents\Univalle 3\Proyecto de Sistemas\MisEdicionesGitHub\Incubadora_prototype_Valdivia\Incubadora_prototype\resources\views/auth/login.blade.php ENDPATH**/ ?>