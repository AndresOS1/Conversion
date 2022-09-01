@extends('dashboard')
@section('content')
      
       <div class="w-75 d-flex justify-content-center aligin-items-center">

            <form action="" class="d-flex flex-wrap m-auto">
                <div class="w-100 d-flex flex-wrap justify-content-center mb-2">
                    <h1>convierte tu moneda</h1>
                </div>
                       <div class="col d-flex flex-wrap flex-column mt-3">
                             <div class="w-100 d-flex flex-wrap justify-content-center">
                                <input type="tel" class="form-contorl w-100">
                                <label for="">cantidad</label>
                             </div>
                             <div class="w-100 mt-2">
                                <select name="" id="" class="form-select">
                                    <option value="">selecciones el pais</option>
                                </select>
                             </div>
                       </div>
                       <div class="col d-flex justify-content-center p-4">
                              <button class="btn btn-dark"><i class="bi bi-shuffle"></i></button>
                       </div>
                       <div class="co-3">
                            <div class="d-flex m-3">
                                <select name="" id="" class="form-select">
                                    <option value="">selecciones el pais</option>
                                </select>
                            </div>
                       </div>
            </form>
       </div>
@endsection
