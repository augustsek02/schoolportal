

<?php $__env->startSection("main"); ?>
<h5>List of registered teachers.</h5>
    
    <table class="table table-stripped">
  <thead>
     <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>DATE OF BIRTH</th>
     </tr>
  </thead>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\school\resources\views/teachers/test.blade.php ENDPATH**/ ?>