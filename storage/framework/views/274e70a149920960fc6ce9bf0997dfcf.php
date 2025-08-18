<?php $__env->startSection('content'); ?>
<main>
    <div class="descricao">
        <h1>SUA PRÓXIMA <br>SESSÃO</h1>
        <p>COMEÇA AQUI</p>
    </div>

    <section class="movies">
        <div class="container-cards">
            <?php $__currentLoopData = $filmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-movie">
                <div class="poster">
                    <img src="<?php echo e(asset('img/'.$filme->imagem)); ?>" alt="<?php echo e($filme->titulo); ?>">
                    <span class="classificacao _<?php echo e(strtolower($filme->classificacao)); ?>">
                        <?php echo e($filme->classificacao); ?>

                    </span>
                </div>
                <div class="info">
                    <h3><?php echo e($filme->titulo); ?></h3>
                    <p><?php echo e($filme->genero); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HYAGO\Desktop\CINE\app\codeflix-site\resources\views/home.blade.php ENDPATH**/ ?>