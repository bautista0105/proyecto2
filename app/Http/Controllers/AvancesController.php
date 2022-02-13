<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avances;
use App\Http\Requests\AvancesNuevoRequest;
use App\Http\Requests\AvancesEditarRequest;


class AvancesController extends Controller
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
        
        $avances = Avances::all();
        return view('avances.index',compact('avances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('avances.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AvancesNuevoRequest $request)
    {
        $avances = $request->all(); 
       if($request->hasFile('reportes')){
           $avances['reportes'] = $request->file('reportes')->getClientOriginalName();
           $request->file('reportes')->storeAs('public/reportes', $avances['reportes']);
       }
        Avances::create($avances);
        return redirect()->route('avances.index',compact('avances'));
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
        $avances = Avances::findOrFail($id);
        return view('avances.editar',compact('avances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AvancesEditarRequest $request, $id)
    {
        $avances = Avances::find($id);
       
       if($request->hasFile('reportes')){
           $avances['reportes'] = $request->file('reportes')->getClientOriginalName();
           $request->file('reportes')->storeAs('public/reportes', $avances['reportes']);
       }
        $avances->update($request->all('Registro_id','descripcion','fecha','url'));
       return redirect()->route('avances.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avances = Avances::find($id);
        $avances->delete();
             return redirect()->route('avances.index');
    }
    public function download($id)
    {
        $avances = Avances::where('id',$id)->firstOrFail();
        $pathToFile = storage_path('app/public/reportes/' . $avances->reportes);
        return response()->download($pathToFile);
    }
}
