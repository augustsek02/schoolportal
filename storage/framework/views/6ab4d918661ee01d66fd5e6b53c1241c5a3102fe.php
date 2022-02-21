


<?php $__env->startSection("main"); ?>
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">

<div class="card">
<div class="card-header">

<div class="row">
<div class="col-md-2">
<h5>STUDENTS</h5>
</div>
<div class="col-md-10">
<?php if(Session::has('success')): ?>
<div class="alert alert-success">
<span class="text-success"><?php echo e(Session::get('success')); ?></span>
</div>
<?php endif; ?>
<?php if(Session::has('error')): ?>
<div class="alert alert-danger">
<span class="text-danger"><?php echo e(Session::get('error')); ?></span>
</div>
<?php endif; ?>
</div>
</div>
</div>
<div class="card-block">
<form action="<?php echo e(route('student.insert')); ?>" method="POST">
    <?php echo csrf_field(); ?>
<div class="m-b-20">
<h4 class="sub-title">Student Information</h4>
<div class="row">

<label class="col-sm-4 col-lg-2 col-form-label">First name</label>
<div class="col-sm-8 col-lg-10">
<?php $__errorArgs = ['firstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="text-danger"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<div class="input-group">
<span class="input-group-prepend" id="basic-addon2">
</span>
<input type="text" name="firstName" value="<?php echo e(old('firstName')); ?>" class="form-control <?php $__errorArgs = ['firstName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="first name">
</div>

</div>
</div>
<div class="row">
<label class="col-sm-4 col-lg-2 col-form-label">Last name</label>
<div class="col-sm-8 col-lg-10">
<?php $__errorArgs = ['lastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="text-danger"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<div class="input-group">
<span class="input-group-prepend" id="basic-addon2">
</span>
<input type="text" name="lastName" value="<?php echo e(old('lastName')); ?>" class="form-control <?php $__errorArgs = ['lastName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Last name">
</div>
</div>
</div>
<div class="row">
 <label class="col-sm-4 col-lg-2 col-form-label">Date of birth</label>
<div class="col-sm-8 col-lg-10">
<?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="text-danger"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<div class="input-group">
<input type="date" name="dob" value="<?php echo e(old('dob')); ?>" class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Date of birth">
<span class="input-group-append" id="basic-addon3">

</span>
</div>
</div>
</div>
<div class="row">
<label class="col-sm-4 col-lg-2 col-form-label">class</label>
<div class="col-sm-8 col-lg-10">
<?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="text-danger"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<div class="input-group">
<span class="input-group-prepend">
</span>
<input type="text" name="class" value="<?php echo e(old('class')); ?>" class="form-control <?php $__errorArgs = ['class'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="class">
<span class="input-group-append">

</span>
</div>


</div>
</div>
<div class="row">
<label class="col-sm-4 col-lg-2 col-form-label">Parent name</label>
<div class="col-sm-8 col-lg-10">
<?php $__errorArgs = ['parentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="text-danger"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<div class="input-group">
<span class="input-group-prepend" id="basic-addon2">
</span>
<input type="text" name="parentName" value="<?php echo e(old('parentName')); ?>" class="form-control <?php $__errorArgs = ['parentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Parent name">
</div>
</div>
</div>
<div class="row">
<label class="col-sm-4 col-lg-2 col-form-label">Home address</label>
<div class="col-sm-8 col-lg-10">
<?php $__errorArgs = ['homeAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<span class="text-danger"><?php echo e($message); ?></span>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
<div class="input-group">
<span class="input-group-prepend" id="basic-addon2">
</span>
<input type="text" name="homeAddress" value="<?php echo e(old('homeAddress')); ?>" class="form-control <?php $__errorArgs = ['homeAddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Home address">
</div>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-md-2">
<button type="submit" class="btn btn-primary m-b-0">Submit</button>
</div>



</form>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\school\resources\views/teachers/studentsDetail.blade.php ENDPATH**/ ?>