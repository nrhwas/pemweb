<?php
  $keluarga= ["alwi", "erat rina esa", "nur hikmawati alwi"];
    	function vokal($kalimat) {

        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
        $count = ($A+$I+$U+$E+$O+$a+$i+$u+$e+$o) ;

        return $count;
        }
        function konsonan($kalimat) {
        $jumlah = strlen($kalimat);

        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
        $count = $jumlah - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O) - substr_count($kalimat, ' ');

        return $count;
        }

        function TanpaSpasi($kalimat){
   	    return strlen($kalimat) - substr_count($kalimat, ' ');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAPRAK 1</title>

</head>
<body>
        <?php foreach ($keluarga as $name) :  ?>
        <?php echo $name."<br>"; ?>
        <?php echo strlen($name)." Jumlah huruf <br>"; ?>
        <?php echo str_word_count($name)." Jumlah Kata<br>"; ?>
        <?php echo strrev($name)." Kata dibalik<br>"; ?>
        <?= vokal(  $name). " Vokal<br>";  ?>
        <?= konsonan( $name). " Konsonan<br><br>";  ?>
        <?php endforeach; ?>
</body>
</html>