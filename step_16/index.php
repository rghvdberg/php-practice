<?php

require 'core/bootstrap.php'; // loads Router, Request and sets up database objects

// die(var_dump($app));

require Router::load('routes.php')-> direct(Request::uri());

