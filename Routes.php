<?php



Route::set('index.php',function(){
    Index::CreateView('Index');
});

Route::set('login',function(){
    Login::CreateView('Login');

});

Route::set('register',function(){
    Register::CreateView('Login');

});

Route::set('logout',function(){
    Logout::CreateView('Index');

});

Route::set('users',function(){
    Users::CreateView('Users');

});

?>