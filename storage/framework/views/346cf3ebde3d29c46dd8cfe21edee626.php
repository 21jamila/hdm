

<?php $__env->startSection('content'); ?>
<div class="container mt-5" >
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-gradient-primary py-4 rounded-top-4">
                    <h3 class="text-center text-white mb-0"><?php echo e(__('Login')); ?></h3>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="mb-4">
                            <label for="email" class="form-label text-secondary"><?php echo e(__('Email Address')); ?></label>
                            <input id="email" type="email" class="form-control rounded-3 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus
                                   placeholder="Enter your email">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label text-secondary"><?php echo e(__('Password')); ?></label>
                            <input id="password" type="password" 
                                   class="form-control rounded-3 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                   name="password" required autocomplete="current-password"
                                   placeholder="••••••••">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" 
                                       id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <label class="form-check-label text-secondary" for="remember">
                                    <?php echo e(__('Remember Me')); ?>

                                </label>
                            </div>
                            <?php if(Route::has('password.request')): ?>
                                <a class="text-decoration-none text-primary" 
                                   href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Password?')); ?>

                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3 py-3 text-uppercase fw-bold">
                                <?php echo e(__('Sign In')); ?>

                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-gradient-primary {
        background: linear-gradient(135deg,rgb(193, 87, 77) 0%,#ff6f61 100%);
    }
    
    .card {
        border: none;
        overflow: hidden;
    }
    
    .form-control {
        padding: 12px 20px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: #ff6f61;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }
    
    .btn-primary {
        background-color: #ff6f61;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background-color: #ff6f61;
        transform: translateY(-1px);
    }
    
    .text-primary {
        color:#ff6f61 !important;
        transition: all 0.2s ease;
    }
    
    .text-primary:hover {
        color: #ff6f61!important;
    }
    
    .rounded-4 {
        border-radius: 1rem !important;
    }
    
    .rounded-top-4 {
        border-top-left-radius: 1rem !important;
        border-top-right-radius: 1rem !important;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\DELL\qrmaroc\resources\views/auth/login.blade.php ENDPATH**/ ?>