@extends('index')

@section('contenido')
 <br><br><br><br>

 <div class="container-fluid table-full-width table-responsive">
    <div>
        <a class="btn btn-success" type="button" href="{{route('avances.create')}}" ><i class="fa fa-user" aria-hidden="true"> NUEVO AVANCE </i></a> 
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-md-12">
           
<table class="table">
    <thead>
      <tr>
        <th scope="col">Còdigo</th>
        <th scope="col">Descripción</th>
        <th scope="col">Fecha</th>
        <th scope="col">Url</th>
        <th scope="col">Reportes</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($avances as $avan)
          <tr>
            <td>{{ $avan->Registro_id}}</td>
            <td>{{ $avan->descripcion}}</td>
            <td>{{ $avan->fecha}}</td>
            <td>{{ $avan->url}}</td>
            <td> <a href="{{route('avan.download',$avan->id)}}">{{ $avan->reportes}}</a></td>
            <td class="btn-group " role="group">
                <a href="{{route('avances.edit',$avan->id)}}"><button class="btn btn-warning">Editar </button></a>  
                <form action="{{route('avances.destroy',$avan->id)}}" class="" method="post">
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