<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <!-- Styles -->
    <style>
        @media  screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media  screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
        </style>
    </head>

    <body>
        <?php if(session('save')): ?>
        <script>
            alert("Success");
        </script>
        <?php endif; ?>

        <?php if(session('error')): ?>
        <script>
            alert("Failed");
        </script>
        <?php endif; ?>

        <div class="w3-container">
            <div class="w3-bar w3-indigo ">
                <a class="w3-bar-item w3-button w3-right" href="<?php echo e(url('login')); ?>">Login</a>
            </div>
        
            <header class="w3-center w3-padding-large w3-indigo">
                <h2>MyTutor</h2>
            </header>

            <div class="w3-padding">
                <div class="w3-card w3-round">
                    <header class="w3-indigo w3-padding">
                        <h3>Register Form</h3>
                    </header>

                    <div class="w3-padding ">
                        <form action="<?php echo e(route('register.post')); ?>" method="post" accept-charset="UTF-8">
                            <?php echo e(csrf_field()); ?>


                            <label for="name">Name</label>
                            <p><input id="name" class="w3-input w3-round w3-border" type="name" name="name" required></p>
                            <?php if($errors->has('name')): ?>
                            <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>

                            <label for="email">Email</label>
                            <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
                            <?php if($errors->has('email')): ?>
                            <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                            <?php endif; ?>

                            <label for="pass">Password</label>
                            <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
                            <?php if($errors->has('password')): ?>
                            <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                            <?php endif; ?>

                            <div class="w3-row">
                                <button class="w3-button w3-blue w3-round w3-right">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer class="w3-footer w3-center w3-indigo">MyTutor App</footer>
</html><?php /**PATH C:\Users\Acer\Documents\Semester 4\STIW3044 Web Engineering\Laravel\todoList\resources\views/register.blade.php ENDPATH**/ ?>