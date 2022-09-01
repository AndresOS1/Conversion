<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Moneda;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::all();
        $monedas = Moneda::all();
        
        return view('pais.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monedas = Moneda::all();

        return view('pais.create', compact('monedas'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[   
                    'nombre_pais' => 'required',
                    'moneda_id' =>'required',
        ]);


        if(!$validator->fails()){

            $pais = new Pais;
            $pais->nombre_pais = $request->nombre_pais;
            $pais->moneda_id = $request->moneda_id;
            $pais->save();
            if($pais){

                Alert::success('Pais creada correctamente');
                return redirect()->route('pais.index');
            }else{
                Alert::error('Error');
                return redirect()->route('pais.create');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('pais.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function show(Pais $pais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $pais = Pais::find($id);
        $monedas = Moneda::all();

        return view('pais.edit', compact('pais', 'monedas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(),[   
                    'nombre_pais' => 'required',
                    'moneda_id' =>'required',
        ]);


        if(!$validator->fails()){

            $pais = Pais::find($id);
            $pais->nombre_pais = $request->nombre_pais;
            $pais->moneda_id = $request->moneda_id;
            $pais->save();
            if($pais){

                Alert::success('Pais atualizado correctamente');
                return redirect()->route('pais.index');
            }else{
                Alert::error('Error');
                return redirect()->route('pais.edit');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('pais.edit');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pais  $pais
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pais = Pais::findOrFail($id);
        $pais->delete();
        Alert::success('Pais Eliminado correctamente');
        return redirect()->route('pais.index');
    }
}
