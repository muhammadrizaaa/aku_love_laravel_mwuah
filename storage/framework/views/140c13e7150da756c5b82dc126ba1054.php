<?php $__env->startSection('content'); ?>

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            
                            <?php if(session('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo e(session('error')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>
                            <div class="card-header">
                                <div class="text-center">
                                    <img src="<?php echo e(asset('image/library.png')); ?>" class="img-responsive img-body">
                                </div>
                               
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(url('loginProcess')); ?>" method="POST" id="logForm">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="form-group">
                                        <?php $__errorArgs = ['login_gagal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                
                                                <span class="alert-inner--text"><strong>Warning!</strong>  <?php echo e($message); ?></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input
                                            class="form-control py-4"
                                            id="inputEmailAddress"
                                            name="username"
                                            type="text"
                                            placeholder="Email"/>
                                        <?php if($errors->has('email')): ?>
                                        <span class="error"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input
                                            class="form-control py-4"
                                            id="inputPassword"
                                            type="password"
                                            name="password"
                                            placeholder="Masukkan Password"/>
                                        <?php if($errors->has('password')): ?>
                                        <span class="error"><?php echo e($errors->first('password')); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"/>
                                            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                        </div>
                                    </div>
                                    <div
                                        class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        
                                            <button class="btn w-100 btn-primary btn-block btn-login" type="submit">Login</button>
                                       
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\belajar_laravel_1\resources\views/tes/login.blade.php ENDPATH**/ ?>