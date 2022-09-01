<?php

namespace App\Http\Controllers;

use App\Models\Moneda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class MonedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monedas = Moneda::all();

        return view('moneda.index', compact('monedas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moneda.create');
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
                    'moneda' => 'required',
                    'valor' => 'required',
                    'valor_usd' =>'required',
        ]);


        if(!$validator->fails()){

            $moneda = new Moneda;
            $moneda->moneda = $request->moneda;
            $moneda->valor = $request->valor;
            $moneda->valor_usd = $request->valor_usd;
            $moneda->save();
            if($moneda){

                Alert::success('Moneda creada correctamente');
                return redirect()->route('moneda.index');
            }else{
                Alert::error('Error');
                return redirect()->route('moneda.create');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('moneda.create');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function show(Moneda $moneda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moneda = Moneda::find($id);

        return view('moneda.edit', compact('moneda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(),[   
                    'moneda' => 'required',
                    'valor' => 'required',
                    'valor_usd' =>'required',
        ]);


        if(!$validator->fails()){

            $moneda = Moneda::find($id);
            $moneda->moneda = $request->moneda;
            $moneda->valor = $request->valor;
            $moneda->valor_usd = $request->valor_usd;
            $moneda->save();
            if($moneda){

                Alert::success('Moneda actualizada correctamente');
                return redirect()->route('moneda.index');
            }else{
                Alert::error('Error');
                return redirect()->route('moneda.edit');
            }
        }else{
            Alert::error('Falta un campo');
            return redirect()->route('moneda.edit');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moneda  $moneda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $moneda = Moneda::findOrFail($id);
        $moneda->delete();

        Alert::success('Moneda eliminada correctamente');

        return redirect()->route('moneda.index');
    }
}
