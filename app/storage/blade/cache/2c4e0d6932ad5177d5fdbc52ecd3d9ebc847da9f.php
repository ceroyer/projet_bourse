<?php $__env->startSection('titre'); ?>
  404
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <h1>Erreur 404</h1>
    <p>la page n'existe pas.</p>
    <a href="<?php echo e(url('')); ?>" class="button">retour à l'accueil</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>