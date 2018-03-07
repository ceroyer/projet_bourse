<?php $__env->startSection('title'); ?>
Le titre
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style type="text/css">*{color: white; } .modal-header,.modal-body>p{color:black;}</style>
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
                    <?php if($_SESSION['id']!=$user['id']): ?>
                    <form action="<?php echo e(url('/bo/downgrade')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><button class="btn btn-secondary" type="submit"><i class="fa fa-angle-double-down"></i>
                      </button></td>
                    </form>
                    <?php endif; ?>
                        <td></td>              
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
                    <th>Mode Vacances</th>
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
                      <td><button class="btn btn-secondary" type="button" data-toggle="modal"  href="#myModal"><i class="fa fa-trash-o" aria-hidden="true" value="<?php $user['id']?>"></i></button></td>
                      <div id="myModal" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Confirmation</h4>
                              </div>
                              <div class="modal-body">
                                  <p>Voulez vous vraiment supprimé <?php $user['id']?></p>
                                   <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                             </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                  <button type="submit" class="btn btn-primary">Supprimer</button>
                              </div>
                          </div>
                      </div>
                      </div>
                    </form>

                    <form action="<?php echo e(url('/bo/upgrade')); ?>" method="POST">
                    <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                    <td><button type="submit" class="btn btn-primary"><i class="fa fa-diamond" aria-hidden="true"></i></button></td>
                    </form>

                    <?php if($user['active']==0): ?><!-- Si l'utilisateur est activé affichage du mode vacances  --> 
                    <form action="<?php echo e(url('/bo/deactivaded')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><button type="submit" class="btn btn-danger"><i class="fa fa-plane"></i>
                      </button></td>
                    </form>
                    <?php else: ?>
                    <form action="<?php echo e(url('/bo/reactivaded')); ?>" method="POST">
                      <input type="text" name="id" value="<?php echo $user['id'] ?>" hidden>
                      <td><button type="submit" class="btn btn-success"><i class="fa fa-coffee"></i>
                      </button></td>
                    </form>
                    <?php endif; ?>


                  </tr>

                  <?php

                  }
                }
                 ?>
                </tbody>
              </table>
<!--                             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->





<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>