<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOG IN</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
        <link rel="stylesheet" href="<?php echo e(asset('css/login_style.css')); ?>">
      
    </head>
      
    <body>
          <!-- SING IN (REGISTRO DE CUENTA) -->
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <h1>Crear Cuenta</h1>
                    
                    <input id="firstName" placeholder="Nombre" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="firstName" value="<?php echo e(old('firstName')); ?>" required autocomplete="firstName" autofocus>

                    <?php $__errorArgs = ['name'];
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

                    <!-- asd -->

                    <input id="lastName" placeholder="Apellido Paterno" type="text" class="form-control " name="lastName" value="<?php echo e(old('lastName')); ?>" required autocomplete="lastName" autofocus>


                    <input id="secondLastName" placeholder="Apellido Materno" type="text" class="form-control" name="secondLastName" value="<?php echo e(old('secondLastName')); ?>" required autocomplete="secondLastName" autofocus>

    

                    <!-- asd -->

                  
                    <input id="email" placeholder="E-mail" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

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
                    <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <button type="submit" class="btn btn-primary">
                        <?php echo e(__('Registrar')); ?>

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
                    <a href="#">Olvidaste tu Contraseña?</a>
                    <button type="submit" class="btn btn-primary">
                        <?php echo e(__('Ingresar')); ?>

                    </button>
                </form>
            </div>
            <!-- BANNER QUE CAMBIA SEGÚN EL MENÚ -->
            <div class="overlay-container">
                <div class="overlay">
                    <!-- SI ESTÁ EN SING IN...--->
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenido de Vuelta!</h1>
                        <p>Regresa a tu materializador personal de ideas</p>
                        <button class="ghost" id="signIn">Ingresa</button>
                        <br>
                        
                    </div>
                    <!-- SI ESTÁ EN LOG IN...--->
                    <div class="overlay-panel overlay-right">
                        <h1>Hola, Nuevo por Aquí?</h1>
                        <p>Estás a un clic de inovar con tus ideas</p>
                        <button class="ghost" id="signUp">Registrarte</button>
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>

        
        
        <!-- Código JavaScript -->
        <script  src="<?php echo e(asset('js/loginScript.js')); ?>"></script>
        
    </body>
</html><?php /**PATH C:\Users\teran\Desktop\-\PR_Incubadora_Negocios-calvi_d\Incubadora_prototype\Incubadora_prototype\resources\views/auth/login.blade.php ENDPATH**/ ?>