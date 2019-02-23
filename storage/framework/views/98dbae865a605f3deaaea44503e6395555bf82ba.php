<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!<a href="#" onclick="window.location='<?php echo e(url("qr")); ?>'" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">GENERATE YOUR QR HERE</a>

                        <form class="form-control">
                            <label class="input-group">

                            </label>
                            <input class="input-group" type="text" placeholder="Your Name" id="name">

                            <input class="input-group" type="text" placeholder="UID" id="uid">
                            <input class="input-group" type="text" placeholder="Subject" id="subject">
                            <input class="input-group" type="submit" href="<?php echo e(url('/qr/{name}/{uid}/{subject}')); ?>">
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>