## Consideraciones al desarrollar en laravel
  
Saber si un usuario esta logeado en laravel.  
https://laravel.com/docs/5.7/authentication  
```php  
if (Auth::check()) {
    return redirect("/home");
} else {
    return redirect("/login");
}
```  
Hacer un **redirect** a una ruta en especifico.    
https://laravel.com/docs/5.7/redirects  
```php  
if (Auth::check()) {
    return redirect("/home");
} else {
    return redirect("/login");
}
```  
Retornar una **vista** de blade con variables esfecificas.  
https://laravel.com/docs/5.7/views  
```php   
public function login() {
    return view('login', [
        'title' => "login",
    ]);
}
```    
Establecer solo algunas rutas de Auth::routes() 
https://stackoverflow.com/questions/45991281/laravel-5-4-set-all-authentication-routes-except-logout-route-using-custom-log  
```php  
Route::get('/login','IndexController@login') -> name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
```    
Correr Laraverl en un post especifico.  
`sudo php artisan serve --port=80`  

