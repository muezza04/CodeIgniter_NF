<?php
    //fungsi array shift
    $tims = ["erwin","heru","bambng","zak"];
    array_unshift($tims,"Joko","wati");
    foreach($tims as $people){
        echo $people.'<br/>';
    }
?>