<header class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#inicio"><img class="img-fluid"
                src="<?php echo e(asset('landingpage-assets/images/Playboy-logo.jpg')); ?>" style="width: 65px;"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
            aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navogation">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="<?php echo e(route('welcome')); ?>#inicio">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="<?php echo e(route('welcome')); ?>#publicacoes">Todas as
                        Acompanhantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="<?php echo e(route('welcome')); ?>#contato">Anuncios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-uppercase text-dark" href="<?php echo e(route('welcome')); ?>#contato">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header><?php /**PATH /var/www/acompanhantes-unai/resources/views/includes/landingpage/header.blade.php ENDPATH**/ ?>