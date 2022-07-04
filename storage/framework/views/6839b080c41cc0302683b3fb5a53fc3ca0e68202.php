<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MyTutor</title>

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
                <a class="w3-bar-item w3-button w3-right" href="<?php echo e(url('logout')); ?>">Logout</a>
            </div>
        
            <header class="w3-center w3-padding-large w3-indigo">
                <h2>MyTutor</h2>
            </header>

            <div>
                <button class="w3-button w3-round w3-right" onclick="document.getElementById('newitem').style.display= 'block';return false;">New Subject</button>
            </div>
            
            <div class="w3-padding">
                <table class="w3-table w3-striped w3-bordered">
                    <thead>
                        <th>No</th><th>Items</th><th>Description</th><th>Operations</th>
                    </thead>
                </table>
            </div>
        </div>
    </body>
    <footer class="w3-footer w3-center w3-indigo">MyTutor App</footer>
</html>
<?php /**PATH C:\Users\Acer\Documents\Semester 4\STIW3044 Web Engineering\Laravel\todoList\resources\views/mainpage.blade.php ENDPATH**/ ?>