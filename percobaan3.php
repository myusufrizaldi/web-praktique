<?php
    $teks = "Saya tidak berjanji bahwa saya tidak akan terlambat lagi.<br>";
    
    for($i=0; $i<1000; $i++){
        if($i == 99) break;
        else echo $teks;
    }
?>