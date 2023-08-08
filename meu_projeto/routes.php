<?php

use Pecee\SimpleRouter\SimpleRouter;
use fundamentos\Nucleo\Helpers;

try {
    SimpleRouter::setDefaultNamespace('fundamentos\Controllers');

    SimpleRouter::get(URL_SITE, 'SiteController@index');
    SimpleRouter::get(URL_SITE.'sobre', 'SiteController@about');
    SimpleRouter::get(URL_SITE.'post/{id}', 'SiteController@post');
    SimpleRouter::get(URL_SITE.'404', 'SiteController@error404');

    SimpleRouter::start();
} catch (Pecee\SimpleRouter\Exceptions\NotFoundHttpException $e) {
    Helpers::redirect('404');
}