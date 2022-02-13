<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\Avances;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //  $result = Avances::select("descripcion")->get();
        //  return view('estadisticas.index',['result'=>$result]);
        //  dd($result);
         //*************************************************************** */
          // echo $chartData;
       
            $result=DB::select(DB::raw("SELECT * FROM `proyecto`"));
            $chartData ="";
            foreach($result as $list){
                $chartData.="['".$list->nombre."' , ".$list->id."]";
            }
            $arr['chartData']=rtrim($chartData,",");
            return view('estadisticas.index' ,$arr);
            

            // return view('estadisticas.index' , $chartData->toJson());














            // dd($arr);
            //********************************************************* */
            // echo $chartData;
            //  return view('estadisticas.index');
        
        // $proyectos = Proyecto::all();
        // return view('estadisticas.index',compact('proyectos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
