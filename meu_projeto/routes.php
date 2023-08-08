<?php

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('fundamentos\Controllers');

SimpleRouter::get(URL_SITE, 'SiteController@index');
SimpleRouter::get(URL_SITE.'sobre', 'SiteController@about');

SimpleRouter::start();