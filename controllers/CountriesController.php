<?php

class CountriesController {

    public function index() {

        global $app;
        $countries = $app['database']->selectAll('country');

        return view('countries', ['countries' => $countries]);
    }

    public function add() {

        global $app;
        $app['database']->insert('country', [
            'name' => $_POST['country_name'],
            'order_nr' => 100,
        ]);
        
        header('Location: /countries');
    }


}