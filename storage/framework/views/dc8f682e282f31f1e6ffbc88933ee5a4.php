<?php $__env->startSection('content'); ?>
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                            <div class="card-body">
                                <form action="<?php echo e(route('registerProcess')); ?>" method="POST" id="regForm">
                                <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">Name</label>
                                        <input class="form-control py-4" id="inputFirstName" type="text" name="name" placeholder="Name" />
                                         <?php if($errors->has('name')): ?>
                                          <span class="error"> * <?php echo e($errors->first('name')); ?></span>
                                          <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Email" />
                                        <?php if($errors->has('email')): ?>
                                          <span class="error">* <?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" />
                                        <?php if($errors->has('password')): ?>
                                          <span class="error">* <?php echo e($errors->first('password')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="<?php echo e(route('login')); ?>">Sudah Punya Akun? Login!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\belajar_laravel_1\resources\views/register.blade.php ENDPATH**/ ?>