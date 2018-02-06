<?php $__env->startSection('content'); ?>



<h1>INSCRIPTION</h1>
<form action="<?php echo e(url('/signup')); ?>" method="POST">
	<label>Votre login</label>
	<input type="text" name="	">
	<label>Votre Mot de passe</label>
	<input type="password" name="	">
	<input type="submit">
</form>

<?php if($error): ?>
<h2 style='color:red'>Wrong login or password!</h2>
<?php endif; ?>

<h1>CONNEXION</h1>
<form action="<?php echo e(url('/login')); ?>" method="POST">
	<label>Votre Pseudo</label>
	<input type="text" name="login">
	<label>Votre Mot de passe</label>
	<input type="password" name="password">


	<input type="submit">
</form>


<?php $__env->stopSection(); ?>




<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>