<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/sobre.css')); ?>">

<?php if(session('success')): ?>
<div style="background-color: #28a745; color: white; text-align: center; padding: 15px;">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<div class="main-container">
    <div class="content">
        <h1 class="titulo">Quem Somos?</h1>
        <div class="team-cards">
            <?php $__empty_1 = true; $__currentLoopData = $membros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="member-card">
                <img src="<?php echo e(asset('img/' . $membro->imagem)); ?>" alt="<?php echo e($membro->nome); ?>" class="member-image">
                <div class="member-card-inner">
                    <div class="member-name"><?php echo e($membro->nome); ?></div>
                    <div class="member-social"><?php echo e($membro->usuario_instagram); ?></div>

                    <div class="admin-actions">

                        <a href="<?php echo e(route('membros.edit', $membro->id)); ?>" class="btn-edit">
                            Editar
                        </a>

                        <form action="<?php echo e(route('membros.destroy', $membro->id)); ?>" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este membro?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn-delete">
                                Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p style="font-size: 1.2rem;">Nenhum membro da equipe foi adicionado ainda.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HYAGO\Desktop\CINE\app\codeflix-site\resources\views/sobre.blade.php ENDPATH**/ ?>