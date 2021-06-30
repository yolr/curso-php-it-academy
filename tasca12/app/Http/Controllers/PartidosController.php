<?php

namespace App\Http\Controllers;
use App\Models\partido;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class PartidosController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function __construct()
    {
        $this->authorizeResource(partido::class, 'partido');
    }
    public function index()

    
    { 
        
        $partidos= partido::all();
            return view('partido.index')->with(['partidos'=>$partidos]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('partido.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([

            'local_gol'=>'required',
            'visitor_gol'=>'required',
            
            'encuentro'=>'required',

        ]);

    

        
        $partidos = new partido();
    
        $partidos ->local_gol =$request ->local_gol;
        $partidos ->visitor_gol =$request ->visitor_gol;
        $partidos ->encuentro=$request ->encuentro;
        
       
        $partidos ->save();

        return redirect ()->route('partido');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partido = partido::find($id);
        return view('partido.edit')->with('partido',$partido);
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
        

        $partido = partido::find($id);
    
        $partido ->local_gol =$request ->local_gol;
        $partido->visitor_gol=$request ->visitor_gol;
        $partido->encuentro=$request ->encuentro;
        
       
        $partido ->save();

        return redirect ()->route('partido');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleat = partido::find($id);
        $empleat -> delete ();
        return redirect ()->route('partido');
    }
    //
}
