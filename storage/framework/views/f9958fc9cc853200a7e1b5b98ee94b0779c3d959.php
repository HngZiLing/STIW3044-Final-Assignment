<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            @media  screen and (max-width: 768px) {.w3-container {width: 100%;}}
            @media  screen and (min-width: 768px) {.w3-container {width: 700px;margin: 0 auto;}}
            html {background-image: url("/images/background1.png");background-position: center;
            background-repeat: no-repeat;height:100%;}
        </style>
    </head>

    <body>
        <?php if(session('save')): ?>
        <script>alert("Success");</script>
        <?php endif; ?>

        <?php if(session('error')): ?>
        <script>alert("Failed");</script>
        <?php endif; ?>

        <div class="w3-bar w3-amber w3-round w3-card-4">
            <a href="landing" class="w3-button w3-hover-none w3-padding-16 w3-large">MyTutor</a>
            <a href="register" class="w3-right w3-bar-item w3-button w3-padding-16 w3-hover-none w3-border-amber w3-bottombar w3-hover-border-white w3-hover-text-white w3-normal"><i class="fa fa-user"></i> Register</a>
            <a href="login" class="w3-right w3-bar-item w3-button w3-padding-16 w3-hover-none w3-border-amber w3-bottombar w3-hover-border-white w3-hover-text-white w3-normal">Login</a>
        </div> 

        <div class="w3-container">
            <div class="w3-container" style="padding:16px"></div>
            <div class="w3-card w3-white w3-round" style="height:80vh;border-radius:25px;">
                <div class="w3-padding">
                    <form action="<?php echo e(route('register.post')); ?>" method="post" accept-charset="UTF-8">
                    <?php echo e(csrf_field()); ?>

                            
                        <div class="w3-half">
                            <h3 class="w3-center"><b>Sign Up</b></h3>
                            <img class="w3-image w3-round w3-hide-small" style="padding:16px;" src="/images/register.png">
                        </div>

                        <div class="w3-half">
                            <p><input id="name" class="w3-input w3-round w3-border" placeholder="Name" type="name" name="name" required></p>
                            <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>

                            <p><input id="email" class="w3-input w3-round w3-border" placeholder="Email" type="email" name="email" required></p>
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>

                            <p><input id="phone" class="w3-input w3-round w3-border" placeholder="Phone No" type="phone" name="phone" required></p>
                            <?php if($errors->has('phone')): ?>
                            <span class="text-danger"><?php echo e($errors->first('phone')); ?></span>
                            <?php endif; ?>

                            <p><input id="address" class="w3-input w3-round w3-border" placeholder="Mailing Address" type="address" name="address" required></p>
                            <?php if($errors->has('address')): ?>
                            <span class="text-danger"><?php echo e($errors->first('address')); ?></span>
                            <?php endif; ?>

                            <p><input id="state" class="w3-input w3-round w3-border" placeholder="State" type="state" name="state" required></p>
                            <?php if($errors->has('state')): ?>
                            <span class="text-danger"><?php echo e($errors->first('state')); ?></span>
                            <?php endif; ?>

                            <p><input id="pass" class="w3-input w3-round w3-border" placeholder="Password" type="password" name="password" required></p>
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>

                            <button class="w3-button w3-round w3-right w3-amber">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w3-container" style="padding:32px"></div>
        </div>
        <footer class="w3-footer w3-bottom w3-center w3-light-grey">Copyright @ H'ng Zi Ling 281895</footer>
    </body>
</html><?php /**PATH C:\Users\Acer\Documents\Semester 4\STIW3044 Web Engineering\Laravel\myTutor\resources\views/register.blade.php ENDPATH**/ ?>