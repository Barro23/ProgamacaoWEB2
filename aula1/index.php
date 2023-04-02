<?php

   class maior{
    
       function comparar(){
            $um = 1;
            $dois = 2;

        
            if($um > $dois){
                echo "Um é maior q dois";
            }
            else{
                echo "dois é maior q um";
            }
       }
    }

    $comparador = new maior;
    $func = $comparador->comparar();

>