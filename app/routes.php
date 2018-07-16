<?php
  //AREA ADMINISTRATIVA DO SITE
  $app->get('/admin/login', 'App\Action\Admin\loginAction:index');
  $app->post('/admin/login', 'App\Action\Admin\loginAction:logar');//arrumar a URL e o método
  $app->get('/admin/logout', 'App\Action\Admin\loginAction:logout');//arrumar a URL e o método

/*
  $app->group('/admin', function (){
        $this->get('', 'App\Action\Admin\HomeAction:index');

        //POSTS
         $this->get('/posts', 'App\Action\Admin\PostAction:index');
         $this->get('/posts/add', 'App\Action\Admin\PostAction:add');
         $this->post('/posts/add', 'App\Action\Admin\PostAction:story');

         $this->get('/posts/{id}/edit', 'App\Action\Admin\PostAction:edit');
         $this->post('/posts/{id}/edit', 'App\Action\Admin\PostAction:update');

         $this->get('/posts/{id}/delete', 'App\Action\Admin\PostAction:delete');
         $this->get('/posts/{id}/view', 'App\Action\Admin\PostAction:view');
    }
  )->add(App\Middleware\Admin\AuthMiddleware::class);
*/

  $app->get('/admin/posts', 'App\Action\Admin\PostAction:index');
  $app->get('/admin/posts/add', 'App\Action\Admin\PostAction:add');
  $app->post('/admin/posts/add', 'App\Action\Admin\PostAction:story');


  //AREA DO SITE
  $app->get('/', 'App\Action\HomeAction:index');
  $app->get('/contato', 'App\Action\HomeAction:contato');
  $app->get('/sobre', 'App\Action\HomeAction:sobre');
 ?>
