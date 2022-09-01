@extends('dashboard')
@section('content') 
@include('sweetalert::alert')

        <div class="w-75 d-flex justify-content-center flex-column h-100">
            <div class="w-100 d-flex gap-2">
                <a href="{{route('moneda.create')}}" class="btn btn-warning text-white "><i class="bi bi-journal-plus"></i></a>
                <form action="{{route('moneda.index')}}" method="get">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control col" name="buscar">
                        <button class="btn btn-warning bi bi-search text-white"></button>
                    </div>
                </form>

            </div>
            <table class="table mt-2">
                <thead>
                  <tr>
                    <th scope="col " class="text-warning">#</th>
                    <th scope="col" class="text-warning">MONEDA</th>
                    <th scope="col" class="text-warning">VALOR</th>
                    <th scope="col" class="text-warning">VALOR EN USD</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($monedas as $m)
                    <tr>
                        <th scope="row" class="text-warning">{{$m->id_moneda}}</th>
                        <td>{{$m->moneda}}</td>
                        <td>{{$m->valor}}</td>
                        <td>{{$m->valor_usd}}</td>
                        <td><a href="{{route('editarmoneda',$m->id_moneda)}}" class="btn text-warning border border-warning"><i class="bi bi-pencil-fill"></i></a></td>
                        <form action="{{route('eliminarmoneda',$m->id_moneda)}}" method="POST">
                           @csrf
                           @method ('DELETE')
                            <td><button class="btn btn-warning" type="submit"><i class="bi bi-trash3-fill text-white"></i></button></td>
                        </form>
                    </tr>
                    @endforeach
                
              </table>
              <div class="w-100">
                {{$monedas->links()}}
              </div>
        </div>
@endsection