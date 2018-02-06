<?php $__env->startSection('title'); ?>
Accueil
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<header>
  <form method="post" action="<?php echo e(url('/deco')); ?>">
    <input type="submit" name="deco" value="DECONNEXION">
  </form>
  <a href="<?php echo e(url('/profile')); ?>" class="button">retour à l'accueil</a>

</header>

<section>

</section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>