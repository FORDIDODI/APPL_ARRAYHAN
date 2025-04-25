<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
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
$routes->get('kelola-berita', 'BeritaController::kelolaBerita');
$routes->get('berita/tambah', 'BeritaController::tambahBerita');
$routes->post('berita/simpan', 'BeritaController::simpanBerita');
$routes->get('berita/edit/(:num)', 'BeritaController::editBerita/$1');
$routes->post('berita/update/(:num)', 'BeritaController::updateBerita/$1');
$routes->post('berita/hapus/(:num)', 'BeritaController::hapusBerita/$1');



// Media
$routes->get('kelola-media', 'MediaController::index');
$routes->get('media-unggah', 'MediaController::unggahForm');
$routes->post('media/unggah', 'MediaController::unggah');
$routes->get('media/hapus/(:num)', 'MediaController::hapus/$1');


// maintainance
$routes->get('/maintenance', 'Home::maintenance');

$routes->set404Override(function () {
    echo view('errors/html/404_override');
});
