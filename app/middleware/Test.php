<?php

namespace Route;

class Test{

    public function pass($val){

        echo "can pass, do nothing. ".$val;

    }

    public function stop($val){

        die("Stop, not allowed. ".$val);

    }

}