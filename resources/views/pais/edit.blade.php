@extends('dashboard')
@section('content') 
        
        <div class="w-75 d-flex justify-content-center flex-column">
            <div class="w-100 d-flex p-1">
                <a href="{{-- {{route('pais.index')}} --}}" class="btn fs-1"><i class="bi bi-arrow-left-circle-fill"></i></a>
            </div>
            <form action="{{-- {{route('pais.update')}} --}}" class="d-flex flex-column w-75 m-auto mt-5 gap-5 " method="POST">
                @csrf
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <h1 class="d-flex justify-content-center">edita tu pais</h1>
                </div>
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <input type="text" class="form-control w-75 m-auto rounded-5" placeholder="ingresa el pais" name="nombre_pais" value="{{-- {{$pais->nombre_pais}} --}}">
                    <label for="" class="aligin-items-center d-flex justify-content-center text-info">Pais</label>
                </div>
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center rounded-5">
                    <select type="text" class="form-select w-75 m-auto rounded-5" placeholder="ingresa el pais" name="moneda_id" value="{{-- {{$pais->moneda_id}} --}}">
                          <option value="" selected class="">escoger la moneda</option>
                          {{-- @foreach ($monedas as $m)
                            <option value="{{$m->id_moneda}}" selected class="">{{$m->nombre_moneda}}</option>
                          @endforeach --}}
                    <select>
                    <label for="" class="aligin-items-center d-flex justify-content-center text-info">moneda</label>
                </div>
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center ">
                    <button class="btn btn-dark w-75 rounded-5 m-auto fs-3 d-flex justify-content-center "><i class="bi bi-plus-square"></i></button>
                    {{-- <label for="" class="aligin-items-center d-flex justify-content-center">crear</label> --}}
                    </div>
            </form>
        </div>
@endsection