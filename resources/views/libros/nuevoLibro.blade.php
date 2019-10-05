@extends('plantillas.plantilla1')
@section('titulo','Nuevo Libro')
@section('contenido')
	<div class="row">
		<div class="col">
		<br><br>
		<h2>Nuevo Libro</h2>
			<form method="post" action="/libros">
			@csrf
			  <div class="form-group">
			    <label for="titulo">Titulo</label>
			    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo del libro">
			  </div>
			  <div class="form-group">
			    <label for="isbn">ISBN</label>
			    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN Libro">
			  </div>
			  <div class="form-group">
			    <label for="autor">Autor</label>
			    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor del libro">
			  </div>

			  <div class="form-group">
			    <label for="carrera">Carrera</label>
			    <select class="form-control" id="carrera" name="carrera_id">
			      <option value="0">Selecciona una carrera</option>
			      @foreach($carreras as $carrera)
			      <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
			      @endforeach
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="Categoria">Categoría</label>
			    <select class="form-control" id="Categoria" name="categoria_id">
			      <option value="0">Selecciona una categoria</option>
			      @foreach($categorias as $categoria)
			      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
			      @endforeach
			    </select>
			  </div>

			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>
@endsection