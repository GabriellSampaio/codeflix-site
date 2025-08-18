

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">

    <div class="auth-page-container">
        <div class="auth-form-box">

            <div class="auth-title-container">
                <img src="<?php echo e(asset('img/luz.png')); ?>" alt="luz de cinema" class="spotlight-img">
                <h1 class="auth-title">Faça Login</h1>
            </div>

            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-message"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" name="password" required>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-message"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="auth-button">
                    <span>Entrar</span>
                     <img src="<?php echo e(asset('img/fita.png')); ?>" alt="Ícone de fita">
                </button>

                <p class="auth-link">
                    Não tem login? - <a href="<?php echo e(route('register')); ?>">Cadastre-se</a>
                </p>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HYAGO\Desktop\CINE\app\codeflix-site\resources\views/auth/login.blade.php ENDPATH**/ ?>