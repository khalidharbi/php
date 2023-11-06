<?php 


    function hello($x){
        $user = $x;

        if($user === "khalid"){
            echo "Hello " . $user;
        }else{
            echo "Bey " . $user;
        }
    }


    hello("khalid");


?>