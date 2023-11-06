<?php 


    function add($x, $y){
        return $x + $y;
    }

    echo add(21, 5);

    function hello($x){
        $user = $x;

        if($user === "khalid"){
            echo "Hello " . $user;
        }else{
            echo "Bey " . $user;
        }
    }


  //  hello("khalid");


?>