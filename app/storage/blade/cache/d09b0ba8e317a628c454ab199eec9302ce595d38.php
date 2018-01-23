<?php $__env->startSection('title'); ?>
Accueil
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1> What a Tuile ! </h1>
<h2>Toute ressemblance avec des personnes existantes ou ayant existées serait purement fortuite</h2>


<!-- Menu Burger -->

<div class="wrapper">
  <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="p-4">

        <a href="<?php echo e(url('/bo')); ?>" class="btn btn-primary">Back-Office</a>
      </div>
    </div>
    <nav class="navbar fixed-left navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
      <i class="fa fa-bars"></i>
      </button>
    </nav>
  </div>
</div>



<div class="grille">
    <div class="container">
      <div class="row">

      </div>
    </div>
</div>



<!--begin modal window-->
<div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <div class="pull-left">Les vacances de Zlataille</div>
        <button type="button" class="close" data-dismiss="modal" title="Close"></button>
      </div>
      <div class="modal-body">
        <!--begin carousel-->
        <div id="myGallery" class="carousel slide" data-interval="false">
          <div class="carousel-inner">





            </div>
            <!--end carousel-inner--></div>
            <!--Begin Previous and Next buttons-->
            <a class="left carousel-control" href="#myGallery" role="button" data-slide="prev"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a> <a class="right carousel-control" href="#myGallery" role="button" data-slide="next"> <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <!--end carousel--></div>
            <!--end modal-body--></div>
              <!--end modal-footer--></div>
              <!--end modal-content--></div>
              <!--end modal-dialoge--></div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make( 'layout' , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>