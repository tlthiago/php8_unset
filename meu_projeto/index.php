<?php

require 'vendor/autoload.php';

// require_once 'routes.php';

use fundamentos\Model\PostModel;

$posts = (new PostModel())->read();

foreach ($posts as $post) {
    echo $post->title.'<br>';
}