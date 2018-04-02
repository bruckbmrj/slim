<?php
  //AREA DO ADMIN DO SITE
  $app->get('/admin/login', 'App\Action\Admin\loginAction:index');
  $app->post('/admin/login/logar', 'App\Action\Admin\loginAction:logar');//arrumar a URL e o método
  $app->get('/admin', 'App\Action\Admin\HomeAction:index')->add(App\Middleware\Admin\AuthMiddleware::class);

  //AREA DO SITE
  $app->get('/', 'App\Action\HomeAction:index');
  $app->get('/contato', 'App\Action\HomeAction:contato');
  $app->get('/sobre', 'App\Action\HomeAction:sobre');
 ?>
