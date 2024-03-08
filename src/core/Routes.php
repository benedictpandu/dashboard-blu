<?php

class Routes {
    public function run(){
        $router = new App();
        // $router->setDefaultController('DefaultApp');

        $router->get('/', ['BarangController', 'index']);
        $router->get('/barang', ['BarangController', 'index']);
        $router->get('/barang/insert', ['BarangController', 'edit']);





        $router->run();
    }
}