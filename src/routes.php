<?php
// Routes

use App\Users;

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/Users/add',function ($request, $response){
    /*API de Multiconexoes*/
    $user = Users::all();
    return json_encode($user);
});
