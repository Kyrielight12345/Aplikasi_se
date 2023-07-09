<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/nilai/view_nilai', 'nilai::view_nilai/$1/$2');
$routes->get('nilai/create', 'nilai::create');
$routes->post('nilai/store', 'nilai::store');
$routes->get('/guru_p/index/(:num)', 'guru_p::index/$1');
$routes->post('guru_p/updateBatch', 'guru_p::updateBatch');
$routes->get('/siswa/', 'siswa::index');
$routes->post('siswa/update', 'siswa::update');
$routes->get('/siswa/create', 'siswa::create');
$routes->get('/nilai_mapel/index/(:num)', 'nilai_mapel::index/$1');
$routes->get('/laporan', 'laporan::index');

$routes->get('/laporan/store', 'laporan::store');
$routes->get('/m_kelas/index/(:num)', 'm_kelas::index/$1');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
