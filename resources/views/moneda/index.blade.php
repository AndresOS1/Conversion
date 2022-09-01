@extends('dashboard')
@section('content') 
        
        <div class="w-75 d-flex justify-content-center flex-column">
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
                        <td>{{$m->nombre_moneda}}</td>
                        <td>{{$m->valor}}</td>
                        <td>{{$m->valor_usd}}</td>
                        <td><a href="{{route('monedaedit',$m->id_moneda)}}" class="btn "><i class="bi bi-pencil-fill"></i></a></td>
                        <form action="{{route('monedadestroy',$m->id_moneda)}}">
                            <button class="btn btn-dark" type="submit"><i class="bi bi-pencil-fill"></i></button></td>
                        </form>
                    </tr> 
                    @endforeach
              </table>
        </div>
@endsection