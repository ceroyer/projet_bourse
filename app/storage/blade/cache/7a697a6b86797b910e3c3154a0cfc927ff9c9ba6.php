<?php $__env->startSection('title'); ?>
Accueil
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<header>
  <form method="post" action="<?php echo e(url('/deco')); ?>">
    <input type="submit" name="deco" value="DECONNEXION">
  </form>
  <form method="get" action="<?php echo e(url('/profile')); ?>">
    <input type="submit" name="profile" value="PROFILE">
  </form>

</header>

<section>

</section>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>