@extends('dashboard')
@section('content')
      
       <div class="w-75 d-flex justify-content-center aligin-items-center">

            <form action="" class="d-flex flex-wrap m-auto">
                <div class="w-100 d-flex flex-wrap justify-content-center mb-2">
                    <h1>convierte tu moneda</h1>
                </div>
                       <div class="col d-flex flex-wrap flex-column mt-3">
                             <div class="w-100 d-flex flex-wrap justify-content-center">
                                <input type="tel" class="form-contorl w-100" name="cantidad">
                                <label for="">cantidad</label>
                             </div>
                             <div class="w-100 mt-2">
                                <select name="" id="" class="form-select">
                                    <option value="">selecciones el pais</option>
                                    @foreach ($monedas as $m)
                                    <option value="">{{$m->moneda}}</option>
                                    @endforeach
                                </select>
                             </div>
                       </div>

            </form>
       </div>
       <script src="js/logica.js"></script>
@endsection
