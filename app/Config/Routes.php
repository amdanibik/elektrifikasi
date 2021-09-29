<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->add('/', 'Home::login');
// Kabupaten
$routes->get('/kabupaten', 'Kabupaten::index');
$routes->add('/kabupaten/tambah', 'Kabupaten::tambah');
$routes->put('/kabupaten/ubah', 'Kabupaten::ubah/$1');
$routes->delete('/kabupaten/hapus', 'Kabupaten::hapus/$1');
// Kecamatan
$routes->get('/kecamatan', 'Kecamatan::index');
$routes->add('/kecamatan/tambah', 'Kecamatan::tambah');
$routes->put('/kecamatan/ubah', 'Kecamatan::ubah/$1');
$routes->delete('/kecamatan/hapus', 'Kecamatan::hapus/$1');
$routes->get('getKecamatan', 'Desa::getKecamatan');
// Tahun
$routes->get('/tahun', 'Tahun::index');
$routes->add('/tahun/tambah', 'Tahun::tambah');
$routes->put('/tahun/ubah', 'Tahun::ubah/$1');
$routes->delete('/tahun/hapus', 'Tahun::hapus/$1');
// Status
$routes->get('/status', 'Status::index');
$routes->add('/status/tambah', 'Status::tambah');
$routes->put('/status/ubah', 'Status::ubah/$1');
$routes->delete('/status/hapus', 'Status::hapus/$1');
// Catat
$routes->get('/catat', 'Catat::index');
$routes->get('/catat/(:segment)/lihat', 'Catat::lihat/$1');
$routes->add('/catat/tambah', 'Catat::tambah');
$routes->delete('/catat/hapus', 'Catat::hapus');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
