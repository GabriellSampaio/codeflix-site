

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">

    <div class="dashboard-container">
        <div class="dashboard-content">
            <h1>Bem-vindo, <?php echo e(Auth::user()->name); ?>!</h1>
            <p>Aproveite o seu acesso exclusivo ao Codeflix.</p>
            
            <form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
                <button type="submit" class="logout-button">Sair</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HYAGO\Desktop\CINE\app\codeflix-site\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>