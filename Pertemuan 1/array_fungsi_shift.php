<?php
    //fungsi array shift
    $tims = ["erwin","heru","bambng","zak"];
    array_shift($tims);
    foreach($tims as $people){
        echo $people.'<br/>';
    }
?>