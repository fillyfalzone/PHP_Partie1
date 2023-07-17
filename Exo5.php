<?php

function convertir($franc){
     $euro = $franc / 6.56;
    return ceil($euro * 100) /100;
}

echo convertir(100)."<br";