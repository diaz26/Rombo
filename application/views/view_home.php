<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Rombo</title>
  </head>
  <body>
    <form  action="<?php base_url(); ?>" method="post">
      <b>Digite el tamaño del rombo:</b><br>
      <input type="number" name="num">
      <button type="submit" name="button">Enviar</button>
    </form>
    <br>
    <br>
    
    <?php
    if (isset($_POST['num'])) {
      $tam=$this->input->post('num');
      if ($tam%2!=0) {

    		for ($i=1; $i <=$tam ; $i+=2) {
    			$li="_ ";
    			$vec=($tam-$i)/2;
    			for ($a=1; $a <= $vec; $a++) {
    				echo $li;
    			}
    			for ($k=1; $k <= $i; $k++) {
    				echo " * ";
    			}
    			echo "<br>";
    		}


    		for ($m=$tam-2; $m >=1 ; $m-=2) {
    			$li="_ ";
    			$vec=($tam-$m)/2;
    			for ($b=1; $b <= $vec; $b++) {
    				echo $li;
    			}
    			for ($n=1; $n <= $m ; $n++) {
    				echo " * ";
    			}
    			echo "<br>";
    		}
      }else {
        ?>
        <h2>El numero ingresado debe ser un numero impar</h2>
        <?php
      }
    }

     ?>


  </body>
</html>
