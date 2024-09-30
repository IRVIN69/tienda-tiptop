<html style="" class=" js no-touch csstransforms3d csstransitions">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <title>Acceso al Sistema :: MTC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="/pluginlogin/pace-theme-flash.css" rel="stylesheet"
        type="text/css"> 
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/libs/bootstrap-3.3.5/css/bootstrap.css')); ?>"
        rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet"
            href="<?php echo e(asset('assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css')); ?>">
    <link class="main-stylesheet" href="/pluginlogin/pages.css" rel="stylesheet"
        type="text/css"> 
    <link rel="stylesheet" type="text/css" href="/pluginlogin/style.css"> 
    <script src="/pluginlogin/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/pluginlogin/modernizr.custom.js" type="text/javascript">
    </script>

    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<body class="fixed-header  pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div class="login-wrapper">
        <div class="bg-pic">
            <img src="/images/login/fondologinweb.jpg" data-src="/images/login/fondologinweb.png"
                data-src-retina="/images/login/fondologinweb.png" alt="" height="20%" class="lazy" />
            
        </div>
        <div class="login-container bg-white">
            <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                <img style="margin-left: 0" src="/images/login/logo.png" alt="logo" width="" height="70" />

                <style>
                    .zocial-link {
                        margin: 1px !important;
                        width: 87px;
                    }

                    #notify-message .alert {
                        margin-bottom: 0;
                        margin-top: 10px;
                    }

                </style>

                <div class="login-box">

                    <form  id="LoginForm" name="LoginForm" action="">
                        <?php echo csrf_field(); ?>
                        <div class="p-t-25">

                            <div class="form-group form-group-default">
                                <label>Login</label>
                                <div class="controls">
                                    <input type="text" name="email" placeholder="Usuario" id="email"
                                        class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> login-form-field" value="<?php echo e(old('email')); ?>" required tabindex="1" />
                                    <input type="hidden" name="user"  value="1" />
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
                            </div>
                            <div class="form-group form-group-default">
                                <label>Contraseña</label>
                                <div class="controls">
                                    <input type="password"  class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> login-form-field" value="<?php echo e(old('password')); ?>" id="password"
                                        name="password" placeholder="Credenciales" required tabindex="2" />
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
                            </div>
                            <?php if(session()->has('danger')): ?>
                                <div class="alert alert-danger col-md-12"><?php echo e(session()->get('danger')); ?></div>
                            <?php endif; ?>
                            <div class="row" >
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <input type="checkbox" id="remember-me" class="login-form-field" tabindex="3" />
                                        <label for="remember-me">No cerrar sesión.</label>
                                    </div>
                                </div>
                                <div class="col-md-6" align="right"  >
                                <button class="btn btn-success btn-cons m-t-10  float-right" id="saveBtn" name="saveBtn" >
                                    Ingresar
                                </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="pull-bottom sm-pull-bottom">
                    <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                        <div class="col-sm-12 no-padding m-t-10">
                            <p>
                                <small>
                                    Ingresa a la Intranet con tus credenciales del
                                    <i class="fa fa-desktop fa-fw fa-lg"></i>
                                    <b>ERP </b>.<br />Soporte al anexo
                                    <i class="fas fa-info-circle"></i> <a href="https://wa.me/51929386665/?text=Hola%20Necesito%20ayuda" target="_blank"><b>A1E9M9A8</b>.</a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/pluginlogin/pace.min.js" type="text/javascript"></script> 
    <script src="/pluginlogin/jquery.scrollTo.js" type="text/javascript"></script> 
    <script src="<?php echo e(asset('assets/libs/bootstrap-3.3.5/js/bootstrap.min.js')); ?>"></script>
    <script src="/pluginlogin/jquery.blockUI.js" type="text/javascript"></script> 
    <script src="/pluginlogin/bootstrap-dialog.min.js"
        type="text/javascript"></script> 
    <script src="/pluginlogin/simple.tools.core.js" type="text/javascript"></script> 
    <script type="text/javascript">
        App.BaseURL("");
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            
            $('#saveBtn').click(function(e) {
                e.preventDefault();

                $.ajax({
                    data: $('#LoginForm').serialize(),
                    url: "<?php echo e(route('identificacion')); ?>",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        console.log('Success:', data);
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                        window.location.href = "/Home";
                        $('#LoginForm').trigger("reset");
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        Toast.fire({
                            type: 'error',
                            title: 'Credenciales incorrectas'
                            
                        })
                    }
                });
            });
        });
    </script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\TipTop\resources\views/login.blade.php ENDPATH**/ ?>