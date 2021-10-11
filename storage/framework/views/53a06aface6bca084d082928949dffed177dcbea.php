<?php $__env->startSection('conteudo'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Publicações</h4>
                        <p class="card-description"></p>
                        <a href="<?php echo e(route('publicacao.create')); ?>" class="btn btn-gradient-primary font-weight-bold"
                           id="add-task">Nova publicação</a>
                        <div class="table-scroll">
                            <table class="table table-striped">
                                <thead>
                                <tr class="table-inverse">
                                    <th> Imagem</th>
                                    <th> Titulo</th>
                                    <th> Telefone</th>
                                    <th> descrição</th>
                                    <th> texto</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $publicacao; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacaos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th class="py-1">
                                            <?php if($publicacaos->imagem): ?>
                                                <img src="<?php echo e($publicacaos->imagem); ?>" alt="<?php echo e($publicacaos->imagem); ?>"
                                                     style="max-width: 100px;"/>
                                            <?php endif; ?>
                                        </th>
                                        <td> <?php echo e($publicacaos->titulo); ?></td>
                                        <td> <?php echo e($publicacaos->numero); ?></td>
                                        <td> <?php echo e($publicacaos->breve_descricao); ?></td>
                                        <td><a href="#" onclick="abrirmodal(<?php echo e($publicacaos); ?>)">ver mais</a></td>
                                        
                                        
                                        <td class="text-right">
                                            <div class="dropdown-inverse dropdown open">
                                                <button
                                                    class="btn btn-inverse dropdown-toggle waves-effect waves-light "
                                                    type="button" id="dropdown-7" data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="true">Ações
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown-7"
                                                     data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item waves-light waves-effect"
                                                       href="<?php echo e(route('publicacao.edit', $publicacaos->getKey())); ?>">Editar</a>
                                                    <form method="POST"
                                                          action="<?php echo e(route('publicacao.destroy', $publicacaos->getKey())); ?>"
                                                          id="form-delete-<?php echo e($publicacaos->getKey()); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <button type="submit"
                                                                class="dropdown-item waves-light waves-effect alert-success-cancel"
                                                                href="#" data-id="<?php echo e($publicacaos->getKey()); ?>">Deletar
                                                        </button>
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
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="textoModal"></div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        function abrirmodal(texto) {
            console.log(texto);
            $('#modal').modal();
            exibirDados(texto);
        }

        function exibirDados(texto) {
            $('#textoModal').html("<code>" + texto.texto + "</code>");
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminPage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/acompanhantes-unai/resources/views/publicacao/index.blade.php ENDPATH**/ ?>