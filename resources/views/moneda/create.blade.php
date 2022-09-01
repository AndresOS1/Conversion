        
@extends('dashboard')
@section('content') 
@include('sweetalert::alert')

        <div class="w-75 d-flex justify-content-center flex-column">
            <div class="w-100 d-flex p-1">
                <a href="{{route('moneda.index')}}" class="btn fs-1"><i class="bi bi-arrow-left-circle-fill text-warning"></i></a>
            </div>
            <form action="{{route('moneda.store')}}" class="d-flex flex-column w-75 m-auto mt-5 gap-5 " method="POST">
                @csrf
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <h1 class="d-flex justify-content-center text-warning">Crea tu moneda</h1>
                </div>

                
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <input type="text" class="form-control w-75 m-auto rounded-5" placeholder="ingresa la moneda" name="moneda">
                    <label for="" class="aligin-items-center d-flex justify-content-center text-warning">moneda</label>
                </div>

                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <input type="text" class="form-control w-75 m-auto rounded-5" placeholder="ingresa la moneda" name="valor">
                    <label for="" class="aligin-items-center d-flex justify-content-center text-warning">valor</label>
                </div>

                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <input type="text" class="form-control w-75 m-auto rounded-5" placeholder="ingresa la moneda" name="valor_usd">
                    <label for="" class="aligin-items-center d-flex justify-content-center text-warning">valor usd</label>
                </div>

                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center ">
                    <button class="btn btn-warning w-75 rounded-5 m-auto fs-3 d-flex justify-content-center "><i class="bi bi-plus-square text-white"></i></button>
                    {{-- <label for="" class="aligin-items-center d-flex justify-content-center">crear</label> --}}
                    </div>
            </form>
        </div>
@endsection