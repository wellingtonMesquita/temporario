<?php $__env->startSection('conteudo'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Anuncios</h4>
                    <p class="card-description"></p>
                    <a href="<?php echo e(route('anuncios.create')); ?>" class="btn btn-gradient-primary font-weight-bold"
                        id="add-task">Novo Anuncio</a>
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-inverse">
                                <th> Imagem</th>
                                <th> Nome</th>
                                <th> Ativo</th>
                                <th> Destaque</th>
                                <th> Telefone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $anuncios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anuncio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th class="py-1">
                                    <img src="<?php echo e($anuncio->imagem); ?>" alt="<?php echo e($anuncio->imagem); ?>"
                                        style="max-width: 100px;" />
                                </th>
                                <td> <?php echo e($anuncio->nome); ?></td>
                                <td> <?php echo $anuncio->ativo_formatado; ?></td>
                                <td> <?php echo $anuncio->destaque_formatado; ?></td>
                                <td> <?php echo e($anuncio->numero); ?></td>
                                <td class="text-right">
                                    <div class="dropdown-inverse dropdown open">
                                        <button class="btn btn-inverse dropdown-toggle waves-effect waves-light "
                                            type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="true">Ações</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-7"
                                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <a class="dropdown-item waves-light waves-effect"
                                                href="<?php echo e(route('anuncios.edit', $anuncio->getKey())); ?>">Editar</a>
                                            <form method="POST"
                                                action="<?php echo e(route('anuncios.destroy', $anuncio->getKey())); ?>"
                                                id="form-delete-<?php echo e($anuncio->getKey()); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"
                                                    class="dropdown-item waves-light waves-effect alert-success-cancel"
                                                    href="#" data-id="<?php echo e($anuncio->getKey()); ?>">Deletar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/acompanhantes-unai/resources/views/anuncios/index.blade.php ENDPATH**/ ?>