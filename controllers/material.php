<?php

$materials = $app['database']->selectAll('materials');

require 'views/materials.view.php';