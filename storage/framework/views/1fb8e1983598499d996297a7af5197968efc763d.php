<?php $__env->startSection('conteudo'); ?>
<section>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-lg-4 card-publicacoes">
                <img src="<?php echo e($publicacao->imagem); ?>" alt="post-thumb" class="w-100 img-fluid mb-4 mt-4">
                <h4 class="nome-card-perfil"><?php echo e($publicacao->nome); ?></h4>
                <a class="whats-number btn btn-outline-light mb-4" style="font-size: 2em;"
                    href="https://api.whatsapp.com/send?phone=<?php echo e($publicacao->numero); ?>&text=Ol%C3%A1,%20<?php echo e($publicacao->titulo); ?>%20tudo%20bem%20?%20Peguei%20seu%20contato%20no%20site%20ACOMPANHANTES%20UNAI%20(https://acompanhantesunai.com).%20Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20seu%20atendimento.)">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i> <?php echo e($publicacao->numero); ?>

                </a>
            </div>
            <div class="col-lg-8">
                <div class="card editor-de-texto">
                    <div class="card-body">
                        <div class="content">
                            <h6 class="title-card text-center">
                                <p style="font-size: 30px;" class="nome-card-perfil"><?php echo e($publicacao->titulo); ?></p>
                            </h6>
                            <p class="conteudo-descricao text-white"><?php echo e($publicacao->breve_descricao); ?></p>
                            <div class="card white-text" style="background-color: #440d29;">
                                <?php echo $publicacao->texto; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/acompanhantes-unai/resources/views/publicacao/show.blade.php ENDPATH**/ ?>