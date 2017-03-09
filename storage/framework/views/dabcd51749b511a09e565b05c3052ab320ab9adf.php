<?php $__env->startSection('title'); ?> Dashboard <?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?> <a href="/home">Dashboard</a> <?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $('#menu-dashboard').addClass('active');
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>