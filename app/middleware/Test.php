<?php

namespace Middleware;

/** Armour middleware needs 'Middleware' as
 * a namespace to access it in the route method.
 */

class Test{

    public $inset = 1;

    public function pass($val){

        echo "can pass, do nothing. ".$val;

    }

    public function stop($val){

        die("Stop, not allowed. ".$val);

    }

}