        
@extends('dashboard')
@section('content') 
        
        <div class="w-75 d-flex justify-content-center">
            <form action="" class="d-flex flex-column w-75 m-auto gap-5 ">
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <h1 class="d-flex justify-content-center">Crea tu pais</h1>
                </div>
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center">
                    <input type="text" class="form-control w-75 m-auto" placeholder="ingresa el pais">
                    <label for="" class="aligin-items-center d-flex justify-content-center text-info">Pais</label>
                </div>
                <div class="w-100 d-flex  flex-column justify-content-center aligin-items-center ">
                    <button class="btn btn-dark w-75 rounded-75 m-auto fs-3 d-flex justify-content-center "><i class="bi bi-plus-square"></i></button>
                    <label for="" class="aligin-items-center d-flex justify-content-center">crear</label>
                    </div>


            </form>
        </div>
@endsection