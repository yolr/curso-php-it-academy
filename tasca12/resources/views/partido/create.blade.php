@extends('layouts.plantillabase');

@section('contenido')

<h2>CREAR REGISTROS</h2>

<form action="{{route('partido.store') }}" method="post">
@csrf


  <div class="mb-3">
    <label for="local_gol" class="form-label">LOCAL GOL</label>
    <input type="text" class="form-control" id="local_gol" aria-describedby="local_gol" name="local_gol">

     @error('local_gol')

      <br>
      <samll>*{{$message}}</samll>
      <br>
     @enderror

  </div>
  <div class="mb-3">
    <label class="form-label" for="visitor_gol">VISITOR GOL</label>
    <input type="text" class="form-control" id="visitor_gol" name="visitor_gol">

    @error('visitor_gol')

    <br>
    <samll>*{{$message}}</samll>
    <br>
    @enderror
        
  </div>
  <div class="mb-3">
    <label class="form-label" for="encuentro">ENCUENTRO</label>
    <input type="date" class="form-control" id="encuentro" name="encuentro">

    @error('encuentro')

    <br>
    <samll>*{{$message}}</samll>
    <br>
    @enderror
    
  </div>

  <a href ="{{ route('partido') }}" class ="btn btn-secondary" tabninex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabinex ="4">Submit</button>
</form>



@endsection