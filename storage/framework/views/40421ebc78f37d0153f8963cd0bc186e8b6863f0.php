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
                            <h4 class="card-title margin-title">Crie uma Publicação</h4>
                            <p class="card-description"></p>
                            <form class="form" action="<?php echo e(route('publicacao.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nome</label>
                                    <input type="text" class="form-control size-input" name="nome" placeholder="Nome">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">titulo</label>
                                    <input type="text" class="form-control size-input" name="titulo" placeholder="Titulo">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Telefone</label>
                                    <input type="text" class="form-control size-input" name="numero" placeholder="Numero">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Breve comentario</label>
                                    <input type="text" class="form-control size-input" name="breve_descricao" placeholder="descrição">
                                </div>

                                <div class="form-group">
                                    <label>Foto de perfil</label>
                                    <input type="file" name="arquivo" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info size-input-upload" disabled
                                               placeholder="Upload Imagem">
                                        <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                        </span>
                                    </div>
                                </div>

                                <textarea id="summernote" name="texto"></textarea>

                                <button type="submit" class="btn btn-gradient-primary mr-2">Salvar</button>
                                <button class="btn btn-light" href="<?php echo e(route('publicacao.index')); ?>">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/acompanhantes-unai/resources/views/publicacao/create.blade.php ENDPATH**/ ?>