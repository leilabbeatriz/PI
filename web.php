<?php


Route::get('/', '/pages/home.php', ['admin', 'common']);
Route::get('/dashboard','/pages/dashboard.php', ['admin', 'common']);
Route::get('/gestor','/pages/gestor/dashboard.php', ['admin']);

Route::get('/members/create','/pages/members/cadastro.php', ['admin', 'common']);
Route::post('/members/store','/controllers/auth/cadastro.php', ['admin', 'common']);
Route::get('/members/login','/pages/members/login.php', ['admin', 'common']);
Route::post('/login','/controllers/auth/login.php', ['admin', 'common']);
Route::get('/logout','/controllers/auth/logout.php', ['admin', 'common']);


Route::get('/members/crud/delete','/controllers/auth/delete.php', ['admin']);
Route::get('/members/crud/formToEdit','/pages/gestor/alunos/edit.php', ['admin']);
Route::post('/members/crud/edit','/controllers/auth/edit.php', ['admin']);
Route::get('/members/crud','/pages/gestor/alunos/index.php', ['admin']);

Route::get('/error','/pages/error.php', ['admin', 'common']);

Route::get('/planos/create','/controllers/planos/create.php', ['admin']);
Route::post('/planos/store','/controllers/planos/store.php', ['admin']);
Route::get('/planos/index','/controllers/planos/index.php', ['admin']);

Route::get('/parceiros/create','/controllers/parceiros/create.php', ['admin']);
Route::post('/parceiros/store','/controllers/parceiros/store.php', ['admin']);
Route::get('/parceiros/index','/controllers/parceiros/index.php', ['admin']);

Route::get('/contato/send','/pages/gestor/email/contato.php', ['admin']);
Route::post('/contato/store','/controllers/contato/store.php', ['admin']);

Route::get('/produtos/create','/controllers/produtos/create.php', ['admin']);
Route::post('/produtos/store','/controllers/produtos/store.php', ['admin']);
Route::get('/produtos/index','/controllers/produtos/index.php', ['admin']);


?>

