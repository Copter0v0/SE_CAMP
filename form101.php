<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php 
            //GET
            // http://localhost/SE_CAMP/form101.php
            //POST
        ?>
        <form method="post">
            <input type="text" name="my_val">
            <button type="submit">บันทึก</button>
        </form>
        <?php print_r($_REQUEST); ?>
        <h1><?php if(isset($_POST['my_val'])){
            echo $_POST['my_val'];
        } ?></h1>
    </body>
</html>