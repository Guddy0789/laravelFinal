<?php
use App\Noticia;
use Illuminate\Http\Request;


/**
 * Show Task Dashboard
 */
//landing

 Route::get('/', function () {
    return view('inicio');
});

Route::get('news', 'NoticiaController@ajaxNoti');
Route::resource('admin','NoticiaController');
//administrador
// Route::get('/admin', function () {
//       return view('noticias', [
//       'noticias' => Noticia::orderBy('created_at', 'asc')->get()
//   ]);
// });

//login
Route::get('/login', function () {
      return view('login');
});
/////////////////////
// Route::get('/', function () {
//       return view('noticias', [
//       'noticias' => Noticia::orderBy('created_at', 'asc')->get()
//   ]);
// });

/**
 * Nueva Noticia
 */
 Route::post('/noticia', function (Request $request) {
     $validator = Validator::make($request->all(), [
         'title' => 'required|max:255',
         'text' => 'required|max:255',
     ]);

     if ($validator->fails()) {
         return redirect('/')
             ->withInput()
             ->withErrors($validator);
     }

     $noticia = new Noticia;
     $noticia->title = $request->title;
     $noticia->text  = $request->text;
     $noticia->save();

     return redirect('/');
 });

/**
 * Eliminar Noticia
 */
Route::delete('/noticia/{id}', function ($id) {
  Noticia::findOrFail($id)->delete();

  return redirect('/');


});

Route::auth();

Route::get('/home', 'HomeController@index');
