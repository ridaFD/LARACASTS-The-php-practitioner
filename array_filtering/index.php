<?php

class Post {

    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first Post', true),
    new Post('My second Post', true),
    new Post('My third Post', true),
    new Post('My fourth Post', false),
];

//$unpublishedPosts = array_filter($posts, function ($post) {
//   return ! $post->published;
//});
//

//$publishedPosts = array_filter($posts, function ($post) {
//    return $post->published;
//});

$modified = array_map(function($post) {

    return ['title' => $post->title];

}, $posts);

$titles = array_map(function($post) {
    return $post->title;
},$posts);

$post_titles = array_column($posts, 'title');


// convert the object to array by foreach
foreach ($posts as $index => $post) {
    $posts[$index] = (array) $post;
}

// convert the object to array by array_map
$posts_to_array = array_map(function($post) {
    return $post = (array) $post;
}, $posts);


var_dump($posts_to_array);