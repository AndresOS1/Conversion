@extends('dashboard')
@section('content')
      
       <div class="w-75 d-flex justify-content-center aligin-items-center">

            <div  class="d-flex flex-wrap m-auto justify-content-center">
                <div class="w-100 d-flex flex-wrap justify-content-center mb-2 text-warning">
                    <h1>Convierte tu moneda</h1>
                </div>
                       <div class="col-9 d-flex flex-wrap flex-column ">
                       
                             <div class="w-100 d-flex flex-wrap justify-content-center mt-3 ">
                                <input placeholder="Ingrese el valor a convertir" type="number" class="form-control w-100  rounded-5"  size="12"  id="cantidad" required>
                             </div>
                             
                            <div class="w-100 mt-4">
                                <select name="" id="select-pais" class="form-select" required>
                                    <option value="">selecciones la moneda</option>
                                    @foreach ($monedas as $m)
                                    <option value="{{$m->id_moneda}}">{{$m->moneda}}</option>
                                    @endforeach
                                </select>
                             </div>
                             <div class="w-100 d-flex flex-wrap justify-content-center mt-3 ">
                                <p id="resultado" class="fs-2 text-warning"></p>
                            </div>
                             
                             
                             <div class="w-100 d-flex flex-wrap justify-content-center mt-3">
                                  <button class="btn btn-warning w-100 rounded-5" onclick="getValueInput()"><i class="bi bi-calculator text-white"></i></button>
                             </div>
                       </div>

                    </div>
       </div>
       <script src="js/logica.js"></script>
@endsection
