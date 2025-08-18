<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeFlix</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
</head>
<body>
      <header>
        <div class="interface">
            <div class="logo">
                <a href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('img/codeflix-white.png')); ?>" class="logo" alt="Logo Codeflix">
                </a>
            </div>

            <nav class="menu-desktop">
                <ul>
                    <li><a href="<?php echo e(url('/')); ?>">HOME</a></li>
                    <li><a href="#">EM CARTAZ</a></li>
                    <li><a href="<?php echo e(url('/contato')); ?>">CONTATO</a></li>
                    <li><a href="<?php echo e(url('/sobre')); ?>">QUEM SOMOS</a></li>
                </ul>
            </nav>

            <div class="btn-contato">
                <?php if(auth()->guard()->check()): ?>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit">SAIR</button>
                    </form>
                <?php else: ?>#
                    <a href="<?php echo e(route('login')); ?>">
                        <button>MINHA CONTA</button>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <p>Todos os direitos reservados &copy;</p>
    </footer>
</body>
</html>
<?php /**PATH C:\Users\HYAGO\Desktop\CINE\app\codeflix-site\resources\views/template.blade.php ENDPATH**/ ?>