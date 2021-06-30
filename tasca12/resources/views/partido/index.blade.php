@extends('layouts.plantillabase');

@section('contenido')

<a href="{{ route('createpartidos') }}" class="btn btn-primary">ALTA</a>




<table class="table table-success table-striped">
  <thread>
    <tr>
        <th scope="col">Id partido</th>
        <th scope="col">LOCAL GOLS</th>
        <th scope="col">VISITOR GOLS</th>
        <th scope="col">ENCUENTRO</th>
        
        <th scope="col">ACCION</th>

    </tr>
    </thread>
    <tbody>
        @foreach($partidos as $partido)
        

        <tr>
         <td>{{$partido->id}}</td>
         <td>{{$partido->local_gol}}</td>
         <td>{{$partido->visitor_gol}}</td>
         <td>{{$partido->encuentro}}</td>
         
         <td>

         
            <a href="{{ route('partido.edit',$partido->id )}}" class="btn btn-info">EDIT</a>
         

         
             <form action="{{route('partido.destroy',$partido->id)}}" method='POST'>
             @csrf
             @method('DELETE')
            <button type=submit class="btn btn-danger">BORRAR</button>
          </form>
          
         </td>
        </tr>
        
        @endforeach
    </tbody>
  
  
  </table>

@endsection