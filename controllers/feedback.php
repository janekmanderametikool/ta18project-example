<?php

$feedbacks = $app['database']->selectAll('feedback');
require 'views/feedback.view.php';