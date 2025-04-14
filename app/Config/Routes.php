<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/tentang', 'Home::tentang');
$routes->get('/berita', 'Home::berita');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/media-informasi', 'Home::mediaInformasi');
$routes->get('/kontak', 'Home::kontak');


//Login dan Dashboard
$routes->get('/login', 'Home::login');
$routes->post('/login/process', 'Home::process');
$routes->get('/logout', 'Home::logout');
$routes->get('/dashboard', 'Home::dashboard');

// Berita
$routes->get('/kelola-berita', 'Home::kelolaBerita');
$routes->get('/tambah-edit-berita', 'Home::tambahBerita');
$routes->post('/berita/simpan', 'Home::simpanBerita');
$routes->get('/berita/edit/(:num)', 'Home::editBerita/$1');
$routes->post('/berita/update/(:num)', 'Home::updateBerita/$1');
$routes->post('/berita/hapus/(:num)', 'Home::hapusBerita/$1');

// Media
$routes->get('/kelola-media', 'Home::kelolaMedia');
$routes->get('/media-unggah', 'Home::unggahMediaView'); // Tambahkan ini untuk akses media-unggah.php
$routes->post('/media/unggah', 'Home::unggahMedia');
$routes->get('/media/hapus/(:num)', 'Home::hapusMedia/$1');

// maintainance
$routes->get('/maintenance', 'Home::maintenance');

$routes->set404Override(function () {
    echo view('errors/html/404_override');
});
