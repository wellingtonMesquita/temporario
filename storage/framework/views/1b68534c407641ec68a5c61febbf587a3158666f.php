<?php $__env->startSection('conteudo'); ?>
























<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="https://api.whatsapp.com/send?phone=+5561996349453&text=OL%C3%81%20GOSTARIA%20DE%20FAZER%20O%20MEU%20AN%C3%9ANCIO%20NO%20SITE%20WWW.ACOMPANHANTESUNAI.COM.BR."
                    class="style-link">
                    <img class="img-fluid m-auto d-block"
                        src="<?php echo e(asset('landingpage-assets/images/Faca-seu-anuncio.gif')); ?>" alt="post-thumb">
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h4 class="title yellow"><i class="material-icons star-left yellow">grade</i>Estrelas<i
                        class="material-icons star-right yellow">grade</i>
                </h4>
            </div>
        </div>
    </div>
</section>

<!-- blog post -->
<section class="section" id="publicacoes">
    <div class="container">
        <div class="row masonry-container">
            <?php $__currentLoopData = $publicacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-sm-6 mb-5">
                <article class="text-center">
                    <img class="img-fluid mb-4" src="<?php echo e($publicacao->imagem); ?>" alt="post-thumb">
                    <p class="text-uppercase mb-2 text-white"><?php echo e($publicacao->nome); ?></p>
                    <h4 class="title-border"><a class="text-dark"
                            href="<?php echo e(route('perfil',$publicacao->getKey())); ?>"><?php echo e($publicacao->titulo); ?></a>
                    </h4>
                    <p class="text-white"><?php echo e($publicacao->breve_descricao); ?></p>
                    <a href="https://api.whatsapp.com/send?phone=<?php echo e($publicacao->numero); ?>&text=Ol%C3%A1,%20<?php echo e($publicacao->titulo); ?>%20tudo%20bem%20?%20Peguei%20seu%20contato%20no%20site%20ACOMPANHANTES%20UNAI%20(https://acompanhantesunai.com).%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20seu%20atendimento.)"
                        class="btn whats-number"><?php echo e($publicacao->numero); ?></a>
                </article>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<!-- /blog post -->

<section>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h4 class="title yellow"><i class="material-icons star-left yellow">grade</i>Anúncio<i
                        class="material-icons star-right yellow">grade</i>
                </h4>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-sm-0">
        <div class="row">
            <?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
                <article class="card bg-dark text-center text-white border-0 rounded-0">
                    <img class="card-img rounded-0 img-fluid w-100" src="<?php echo e($anuncios->first()->imagem); ?>"
                        alt="post-thumb">
                    <div class="card-img-overlay">
                        <div class="card-content">
                            <a class="btn btn-outline-light"
                                href="https://api.whatsapp.com/send?phone=<?php echo e($anuncio->numero); ?>&text=OL%C3%81%20GOSTARIA%20DE%20FAZER%20O%20MEU%20AN%C3%9ANCIO%20NO%20SITE%20WWW.ACOMPANHANTESUNAI.COM.BR.">
                                <?php echo e($anuncio->numero); ?></a>
                        </div>
                    </div>
                </article>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/acompanhantes-unai/resources/views/welcome.blade.php ENDPATH**/ ?>