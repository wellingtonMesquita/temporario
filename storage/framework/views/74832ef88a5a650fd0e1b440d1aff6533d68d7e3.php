<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Page</title>
    <?php echo $__env->make('includes.admin.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>

    <?php echo $__env->yieldContent('conteudo'); ?>

    <?php echo $__env->make('includes.admin.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html><?php /**PATH /var/www/acompanhantes-unai/resources/views/layouts/adminLoginPage.blade.php ENDPATH**/ ?>