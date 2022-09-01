@extends('dashboard')
@section('content') 
        
        <div class="w-75 d-flex justify-content-center flex-column">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">PAIS</th>
                    <th scope="col">MONEDA</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($pais as $p)
                    <tr>
                        <th scope="row">{{$p->pais_id}}</th>
                        <td>{{$p->nombre_pais}}</td>
                        <td>{{$p->moneda_id}}</td>
                        <td><a href="{{route('monedaedit',$m->id_moneda)}}" class="btn "><i class="bi bi-pencil-fill"></i></a></td>
                        <form action="{{route('monedadestroy',$m->id_moneda)}}">
                            <button class="btn btn-dark" type="submit"><i class="bi bi-pencil-fill"></i></button></td>
                        </form>
                    </tr> 
                    @endforeach
              </table>
        </div>
@endsection