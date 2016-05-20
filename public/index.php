<?php

require "../vendor/autoload.php";
require "../config/config.php";
Toro::serve(array(
    "/"=>"Controller\\Welcome", 
    "/login"=>"Controller\\Login",
    "/home"=>"Controller\\Home",
    "/signup"=>"Controller\\AddUser",
    "/addtodo"=>"Controller\\AddTodo",
    "/donetodo"=>"Controller\\DoneTodo",
    "/logout"=>"Controller\\Logout"

));