<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/contato.css')); ?>">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

<div class="container">
  <h1>FALE CONOSCO</h1>
  <form>
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" />

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" />

    <label for="mensagem">Mensagem</label>
    <textarea id="mensagem" name="mensagem"></textarea>

    <button type="submit">ENVIAR</button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\userlocal\Downloads\codeflix-site\resources\views/contato.blade.php ENDPATH**/ ?>