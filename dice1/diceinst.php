
<!DOCTYPE html>
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <form action="" method="post">
    <input type="number" name="kocka" value="<?=$_POST['kocka']?>">
    <button type="submit" value="roll">Roollllll</button>
    </form>

      
    <?php require 'diceclass.php';?>
    <?php $kocka = new dice();?>
    
    <?php for($i=0; $i<$_POST['kocka']; $i++):?>
        <div class="side"><?= $kocka->roll() ?></div>
    <?php endfor;?>
 


    </body>
</html>