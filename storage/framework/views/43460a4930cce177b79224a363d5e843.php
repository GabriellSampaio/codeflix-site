<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Painel Codeflix</title>

    <style>
        body { font-family: sans-serif; margin: 0; background-color: #f4f4f9; }
        .container { max-width: 960px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }

    </style>

</head>
<body>

    <div class="container">
        
        <?php echo $__env->yieldContent('content'); ?>
    </div>

</body>
</html><?php /**PATH C:\Users\userlocal\Downloads\codeflix-site\resources\views/layouts/app.blade.php ENDPATH**/ ?>