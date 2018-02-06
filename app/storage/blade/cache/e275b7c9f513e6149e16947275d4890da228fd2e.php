<?php $__env->startSection('content'); ?>

<h1>INSCRIPTION</h1>
<form action="<?php echo e(url('/signup')); ?>" method="POST">
	<label>Entrez votre login</label>
	<input type="text" name="pseudo">
	<label>Entrez votre adresse mail</label>
	<input type="text" name="email">
	<label>Entrez à nouveau votre adresse mail</label>
	<input type="text" name="emailverif">
	<input type="submit">
</form>

<?php if($error): ?>
<h2 style='color:red'>Identifiants invalides!</h2>
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