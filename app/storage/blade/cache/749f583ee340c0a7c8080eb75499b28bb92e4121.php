<?php $__env->startSection('title'); ?>
Le titre
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">*{color: white; }</style>
<h1>Les administrateurs</h1>
<table class="table">
                <thead>
                  <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Supprimer</th>
                    <th>Dégrader</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($user['role'] === "admin"): ?>
                  <tr>
                      <td><?php echo e($user['pseudo']); ?></td>
                      <td><?php echo e($user['email']); ?></td>
                    <form action="<?php echo e(url('/bo/delete')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo e($user['id']); ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                    </form>
                    <?php if($_SESSION['id']!=$user['id']): ?>
                    <form action="<?php echo e(url('/bo/downgrade')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo e($user['id']); ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-angle-double-down"></i>
                      </button></td>
                    </form>
                    <?php endif; ?>
                        <td></td>
                  </tr>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>

<h1>Les utilisateurs</h1>
<table class="table">
                <thead>
                  <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Supprimer</th>
                    <th>Promouvoir</th>
                    <th>Mode Vacances</th>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <?php if($user['role'] === "user"): ?>

                  <tr>
                      <td><?php echo e($user['pseudo']); ?></td>
                      <td><?php echo e($user['email']); ?></td>
                    <form action="<?php echo e(url('/bo/delete')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo e($user['id']); ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                    </form>

                    <form action="<?php echo e(url('/bo/upgrade')); ?>" method="POST">
                    <input type="text" name="id" value="<?php echo e($user['id']); ?>" hidden>
                    <td><button type="submit" class="btn btn-primary"><i class="fa fa-diamond" aria-hidden="true"></i></button></td>
                    </form>

                    <?php if($user['active']==0): ?><!-- Si l'utilisateur est activé affichage du mode vacances  -->
                    <form action="<?php echo e(url('/bo/deactivaded')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo e($user['id']); ?>" hidden>
                      <td><button type="submit" class="btn btn-danger"><i class="fa fa-plane"></i>
                      </button></td>
                    </form>
                    <?php else: ?>
                    <form action="<?php echo e(url('/bo/reactivaded')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo e($user['id']); ?>" hidden>
                      <td><button type="submit" class="btn btn-success"><i class="fa fa-coffee"></i>
                      </button></td>
                    </form>
                    <?php endif; ?>
                  </tr>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>