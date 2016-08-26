<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function ajaxNoti(){
    // $news = Noticia::all();

    $news = Noticia::table('noticias')
                  ->inRandomOrder();

                  dd($news->all());
      return response()->json($news->toArray());

    }
    public function index(Request $request)
    {

          $noticias = Noticia::orderBy('created_at', 'asc')->paginate(5);
          // $noticias => Noticia::orderBy('created_at', 'asc')->get();
          return view('noticias ',compact('noticias'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('registro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {


       $this->validate($request, [
           'title' => 'required',
           'text' => 'required',
       ]);
      //  Noticia::create($request->all());

         $noticia = new Noticia;
         $noticia->title = $request->title;
         $noticia->text  = $request->text;
         $noticia->save();
         return redirect()->route('admin.index')->with('success','Noticia creada exitosamente');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $item = Noticia::find($id);
      return view('registro.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $item = Noticia::find($id);
      return view('registro.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' => 'required',
        'text' => 'required',
      ]);

        // Noticia::find($id)->update($request->all());
        // return redirect()->route('admin.index')->with('success','Item updated successfully');

        $noticia = Noticia::find($id);
        $noticia->title = $request->title;
        $noticia->text  = $request->text;
        $noticia->save();
        return redirect()->route('admin.index')->with('success','Noticia Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Noticia::find($id)->delete();
      return redirect()->route('admin.index')
      ->with('success','Noticia eliminada con exito');
    }
}
