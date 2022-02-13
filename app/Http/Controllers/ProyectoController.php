<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Http\Requests\ProyectoNuevoRequest;
use App\Http\Requests\ProyectoEditarRequest;

class ProyectoController extends Controller
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
    public function index()
    {   
        $proyectos = Proyecto::all();
        return view('proyecto.index',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoNuevoRequest $request)
    {
  

       $proyectos = $request->all();
       if($request->hasFile('pdf')){
           $proyectos['pdf'] = $request->file('pdf')->getClientOriginalName();
           $request->file('pdf')->storeAs('public/pdf', $proyectos['pdf']);
       }
        Proyecto::create($proyectos);
        

         return redirect()->route('proyecto.index',compact('proyectos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyectos = Proyecto::findOrFail($id);
        return view('proyecto.editar',compact('proyectos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyectoEditarRequest $request, $id)
    {
       

       $proyectos = Proyecto::find($id);
       
       if($request->hasFile('pdf')){
           $proyectos['pdf'] = $request->file('pdf')->getClientOriginalName();
           $request->file('pdf')->storeAs('public/pdf', $proyectos['pdf']);
       }
        $proyectos->update($request->all('id','nombre','descripcion','requisitos','inicio','fin','responsable','repositorio'));
       return redirect()->route('proyecto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyectos = Proyecto::find($id);
        $proyectos->delete();
             return redirect()->route('proyecto.index');
    }

    public function download($id)
    {
        $proyectos = Proyecto::where('id',$id)->firstOrFail();
        $pathToFile = storage_path('app/public/pdf/' . $proyectos->pdf);
        return response()->download($pathToFile);
    }
}
