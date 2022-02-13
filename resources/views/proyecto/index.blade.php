@extends('index')

@section('contenido')
 <br><br><br><br>

 <div class="container-fluid table-full-width table-responsive">
    <div>
        <a class="btn btn-success" type="button" href="{{route('proyecto.create')}}" ><i class="fa fa-user" aria-hidden="true"> NUEVO PROYECTO </i></a> 
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-12">
           
<table class="table">
    <thead>
      <tr>
        <th scope="col">Còdigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripción</th>
        <th scope="col">Requisitos</th>
        <th scope="col">Inicio</th>
        <th scope="col">Fin</th>
        <th scope="col">Responsable de Desarrollo</th>
        <th scope="col">PDF</th>
        <th scope="col">Repositorio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($proyectos as $pro)
          <tr>
              <td>{{ $pro->id}}</td>
              <td>{{ $pro->nombre}}</td>
              <td>{{ $pro->descripcion}}</td>
              <td>{{ $pro->requisitos}}</td>
              <td>{{ $pro->inicio}}</td>
              <td>{{ $pro->fin}}</td>
              <td>{{ $pro->responsable}}</td>
              <td> <a href="{{route('proy.download',$pro->id)}}">{{ $pro->pdf}}</a></td>
              <td>{{ $pro->repositorio}}</td> 
              <td class="btn-group " role="group">
                <a href="{{route('proyecto.edit',$pro->id)}}"><button class="btn btn-warning">Editar </button></a>  
                <form action="{{route('proyecto.destroy',$pro->id)}}" class="" method="post">
                  @method('DELETE')
                  {{ @csrf_field() }}
                  <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
              </td> 
              
          </tr>
      @empty
          
      @endforelse
    </tbody>
  </table>
      </div>
   </div>
</div>




@endsection