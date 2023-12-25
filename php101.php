<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php $var_a = "TAO IS GAY" ?>
        <?php $var_b = 'Hello $var_a' ?>
        <?php $var_c = "Hello $var_a" ?>
        <?php echo $var_b; ?>
        <br>
        <?php echo $var_c; ?>
        <?php
            tao($var_c);
        ?>
        <?php 
            function tao($var_a){
                echo "<pre>";
                print_r($var_a);
                echo "</pre>";
            }
        ?>
    </body>
</html>
