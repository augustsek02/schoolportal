

<?php $__env->startSection("main"); ?>
<h1>List of registered teachers.</h1>
    
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
 
  
  <tbody>
            <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <tr>
                <td><?php echo e($teacher->first_name); ?></td>
                <td><?php echo e($teacher->last_name); ?></td>
                <td><?php echo e($teacher->age); ?></td>
                <td><?php echo e($teacher->address); ?></td>
                <td><?php echo e($teacher->phone_number); ?></td>
                <td><?php echo e($teacher->dob); ?></td>
     </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
  
</table>
<?php $__env->stopSection(); ?>




<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\school\resources\views/registration.blade.php ENDPATH**/ ?>