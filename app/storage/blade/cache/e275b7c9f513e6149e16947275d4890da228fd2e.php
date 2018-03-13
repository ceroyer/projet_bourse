<?php $__env->startSection('additional_css'); ?>
<link rel="stylesheet" href="<?php echo e(url('/assets/css/login.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section class="accueil content">
  <div>
    <img src="<?php echo e(url('/assets/img/logoGros.png')); ?>" alt="Logo">
  </div>
  <div class="accueilText">
    <h1>Trade Heaven</h1>
    <h2>" Ne cherchez plus la bourse, elle s'invite chez vous ! "</h2>
    <ul>
      <li>Consultation de la bourse en temps réel</li>
      <li>Anticipez vos futures actions</li>
    </ul>
    <a class="view-more1" href="#information">Inscription</a>
    <a class="view-more2" href="#information">Déjà inscrit?</a>
  </div>
</section>

<section id="information"><div class="inscription" id="inscription">
    <form action="<?php echo e(url('/signup')); ?>" method="POST" id="formulaireInscription">
      <h2>Inscription</h2>
      <div class="connecttext">
        <label class="form_col" for="pseudo"> Identifiant: </label>
        <input type="text" name="pseudo"/>
      </div>
      <div class="connecttext">
        <label class="form_col" for="email"> Adresse mail: </label>
        <input type="email" name="email"/>
      </div>
      <div class="connecttext">
        <label class="form_col" for="emailverif"> Confirmation du mail: </label>
        <input type="email" name="emailverif"/>
      </div>
      <div id="date">
        <select name="jour" id="jour">
      <?php for($i=1;$i<=31;$i++): ?>
        <?php if(0<$i AND $i<10): ?>
          $i = "0" + $i;
        <?php endif; ?>
        <option value='<?php echo e($i); ?>'><?php echo e($i); ?></option>";
      <?php endfor; ?>
      </select>
      <select name="mois" id="mois">
        <option value="01">Janvier</option>
        <option value="02">Février</option>
        <option value="03">Mars</option>
        <option value="04">Avril</option>
        <option value="05">Mai</option>
        <option value="06">Juin</option>
        <option value="07">Juillet</option>
        <option value="08">Août</option>
        <option value="09">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Décembre</option>
      </select>
      <select name="annee" id="annee">
        <?php for($i=1900;$i<=2018;$i++): ?>
          <option value='<?php echo e($i); ?>'><?php echo e($i); ?></option>";
        <?php endfor; ?>
      </select>
      </div>

      <button type="submit"> S'inscrire </button>
    </form>
    </div>
    <?php if($err == true): ?>
    <h2 class="erreur" style='color:red'>Email Incorrect!</h2>
   <?php endif; ?>
    <?php if($error): ?>
      <h2 class="erreur" style='color:red'>Identifiants invalides!</h2>
    <?php endif; ?>
    <?php if($deactive === true): ?>
      <h2 class="erreur" style='color:red'>Compte désactivé</h2>
    <?php endif; ?>
    <?php if($errorAge): ?>
        <h2 class="erreur" style='color:red'>Vous n'avez pas l'âge légal pour accéder à cette aplication</h2>
    <?php endif; ?>
    <div class="connexion" id="connexion">

    <form action="<?php echo e(url('/login')); ?>" method="POST" id="formulaireConnexion">
      <h2>Connexion</h2>
      <div class="connecttext">
        <label class="form_col" for="login"> Identifiant: </label>
        <input type="text" name="login"/>
      </div>
      <div class="connecttext">
        <label class="form_col" for="password"> Mot de passe: </label>
        <input type="password" name="password"/>
      </div>
      <button id="connect" type="submit" onclick="document.location.href='/#connexion'"> Connexion </button>
    </form>
    </div>
  </section>

<section id="commentaire">
    <div>
      <h1>Lucas FTEUR</h1>
      <h2>"Waouh ! Ce site m'a permis de gagner 10 000€ sans bouger de chez moi !"</h2>
    </div>
    <div>
      <h1>Silvie SAVIE</h1>
      <h2>"Waouh ! Trade heaven a changé ma vie ! Je gagne mieux ma vie dorénavant !"</h2>
    </div>
    <div>
      <h1>Gaetan GENTE</h1>
      <h2>"Waouh ! Ce site m'a permis de devenir un trader aguerri !"</h2>
    </div>
    <div>
      <h1>Timothé CAFE</h1>
      <h2>"Waouh ! J'ai pu gagner un point de plus grâce à ce rôle de chef de projet !"</h2>
    </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>