<?php $__env->startSection('conteudo'); ?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"></h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Altere uma publicação</h4>
                            <p class="card-description"></p>
                            <form action="<?php echo e(route('publicacao.update', $publicacao->getKey())); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>

                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                                <div class="form-group">
                                    <label for="exampleInputName1">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="<?php echo e($publicacao->nome); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" value="<?php echo e($publicacao->titulo); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Numero</label>
                                    <input type="text" class="form-control" name="numero" value="<?php echo e($publicacao->numero); ?>">
                                </div>

                                <div class="form-group">
                                    <label>Alterar foto perfil</label>
                                    <input type="file" name="imagem" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                               placeholder="Upload Image">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>

                                <textarea id="summernote" name="texto"><?php echo $publicacao->texto; ?></textarea>

                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <button class="btn btn-light">voltar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/acompanhantes-unai/resources/views/publicacao/edit.blade.php ENDPATH**/ ?>