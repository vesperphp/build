<?php

use Route\Route;
use Middleware\Test;

/**
 * These routes will always overwrite 
 * the routes in the database on call.
 */

Route::register("/home", "HomeController@index")
        ->store("get");

 Route::register("user/edit/1", "UserController@edit")
        ->auth('true|false')
        ->role('admin|user|array?')
        ->armour("Test@stop", "value(optional)")
        ->limit(86400, 1000, 'groupname')
        ->model("User",1)
        ->store("get");

        Route::register("user/edit/2", "UserController@edit")
        ->auth('true|false')
        ->role('admin|user|array?')
        ->armour("Test@stop", "value(optional)")
        ->limit(86400, 1000, 'groupname')
        ->model("User",1)
        ->store("post");

        Route::register("user/edit/3", "UserController@edit")
        ->auth('true|false')
        ->role('admin|user|array?')
        ->armour("Test@stop", "value(optional)")
        ->limit(86400, 1000, 'groupname')
        ->model("User",1)
        ->store("get");

        // the order of the middleware stack is of importance
        // this case will block users without a session first
        // if there is a session, check the role.. etc..

        // auth: true, needs session | false, needs no session
        // role: role slug
        // armour: a custom class that can do whatever it wants, die, redirect...
        // limit: time in seconds, the amount of calls within that time (from first call), the limit group so you can do pages indiviually ore group them together by name
        // model: model and id
        // store: dump everything in the database and also set the method of retrieval: get|post|delete|update

        // when changing the register('/path') a new route will be registered.