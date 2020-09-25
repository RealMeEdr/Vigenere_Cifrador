<?php

    include('./template.php');

    $abc = 'abcdefghijklmnopqrstuvwxyz ';
    $i =0 ;
    while ($i < strlen($abc)){
        $char = substr($abc, $i, 1);
        //echo 'El caracter: ' . $char . ' Tiene un valor de ' . toNumber($char) . " <br>";
        $i++;

    }

    $m=$_POST['message'];
    $k=$_POST['key'];
    $i=0;
    $c='';
    while($i < strlen($m)){
        $res = toNumber(substr($m, $i, 1)) - toNumber(substr($k, $i % strlen($k), 1));
        if($res < 0){
           $res = $res % strlen($abc);
        }
        $c = $c . substr($abc, $res, 1);
        $i++;
    }

    $t = new Template();
    $t->header();

    echo('El texto descifrado es: <strong>' .$c.'</strong>'.'<br>');
    echo(' "El mejor ocultor de mensajes en la escuela" ');
    $t->footer();



    function toNumber($dest)
    {
        if($dest == ' '){
            27;
        }
        if ($dest)

            return ord(strtolower($dest)) - 96;
        else
            return 0;
    }

  

?>

