<?php $__env->startSection('title'); ?>
Le titre
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1>Les administrateurs</h1>
<table class="table">
                <thead>
                  <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    <th>Supprimer</th>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user) {

                  if ($user['role'] === "admin") {
                  ?>
                  <tr>
                      <td><?php echo $user['pseudo'] ?></td>
                      <td><?php echo $user['email'] ?></td>
                    <form action="<?php echo e(url('/bo/delete')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                    </form>
                  </tr>

                  <?php

                  }
                }
                 ?>
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
                </thead>
                <tbody>
                <?php
                foreach ($users as $user) {

                  if ($user['role'] === "user") {
                  ?>
                  <tr>
                      <td><?php echo $user['pseudo'] ?></td>
                      <td><?php echo $user['email'] ?></td>
                    <form action="<?php echo e(url('/bo/delete')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
                    </form>

                    <form action="<?php echo e(url('/bo/upgrade')); ?>" method="POST">
                    <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                    <td><button type="submit" class="btn btn-primary"><i class="fa fa-diamond" aria-hidden="true"></i></button></td>
                    </form>
                  </tr>

                  <?php

                  }
                }
                 ?>
                </tbody>
              </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>