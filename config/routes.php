<?php

return array(
    // Category of movie
    'category/([0-9]+)' => 'category/catItem/$1', // NameController/actionName
    // Movie descriprion
    'movie/([0-9]+)' => 'movie/movieDetail/$1',
    // Artist description
    'artist/([0-9]+)' => 'artist/artistDetail/$1',
    // List of movies and artists
    'movielist' => 'movie/list',
    'artistlist' => 'artist/list',
    // Contact page
    'contacts' => 'site/contact',
    // User
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'user/register' => 'user/register',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // Search
    'search' => 'site/search',
    'contacts/search' => 'site/search',
    'artistlist/search' => 'site/search',
    'movielist/search' => 'site/search',
    'category/([0-9]+)/search' => 'site/search',
    'movie/search' => 'site/search',
    'artist/search' => 'site/search',
    'cabinet/search' => 'site/search',
    // Control movies
    'admin/movie/create' => 'adminMovie/create',
    'admin/movie/update/([0-9]+)' => 'adminMovie/update/$1',
    'admin/movie/delete/([0-9]+)' => 'adminMovie/delete/$1',
    'admin/movie' => 'adminMovie/index',
    // Control user
    'admin/user/create' => 'adminUser/create',
    'admin/user/delete/([0-9]+)' => 'adminUser/delete/$1',
    'admin/user' => 'adminUser/index',
    // Control artist
    'admin/artist/create' => 'adminArtist/create',
    'admin/artist/update/([0-9]+)' => 'adminArtist/update/$1',
    'admin/artist/delete/([0-9]+)' => 'adminArtist/delete/$1',
    'admin/artist' => 'adminArtist/index',
    // Admin pannel
    'admin' => 'admin/index',
    // Main page
    'index.php' => 'site/index',
    '' => 'site/index',
);
