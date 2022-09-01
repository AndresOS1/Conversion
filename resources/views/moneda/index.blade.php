@extends('dashboard')
@section('content') 
@include('sweetalert::alert')

        <div class="w-75 d-flex justify-content-center flex-column h-100">
            <div class="w-100 d-flex flex-wrap gap-2 mb-2">
                <a href="{{route('moneda.create')}}" class="btn btn-dark "><i class="bi bi-journal-plus"></i></a>
                <form action="{{route('moneda.index')}}" method="GET">
                    @csrf
                    <div class="input-group col">
                        <input type="text" class="form-control" name="buscar">
                        <button class="btn input-group-text bi bi-search bg-warning text-white"></button>
                     </div>
                </form>

            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">MONEDA</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">VALOR EN USD</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($monedas as $m)
                    <tr>
                        <th scope="row">{{$m->modena_id}}</th>
                        <td>{{$m->moneda}}</td>
                        <td>{{$m->valor}}</td>
                        <td>{{$m->valor_usd}}</td>
                        <td><a href="{{route('editarmoneda',$m->id_moneda)}}" class="btn "><i class="bi bi-pencil-fill"></i></a></td>
                        <form action="{{route('eliminarmoneda',$m->id_moneda)}}" method="POST">
                           @csrf
                           @method ('DELETE')
                            <td><button class="btn btn-dark" type="submit"><i class="bi bi-trash3-fill"></i></button></td>
                        </form>
                    </tr>
                    @endforeach
                
              </table>
              <div class="w-100">
                {{$monedas->links()}}
              </div>
        </div>
@endsection