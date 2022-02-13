@extends('index')

@section('contenido')
<br>
<form  method="post" id="" class="" action="{{route('proyecto.update',$proyectos->id)}}" enctype="multipart/form-data"> 
    @method('PUT')           
    {{ @csrf_field() }}
    <div class="col">
           <div class="card card-body  ">
                <div class="card-title text-center " >
                <h2>Editar Proyecto </h2>
                </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="codigo">Código</label>
                        <input type="text" name="id" id="id" class="form-control @error('id') is-invalid @enderror" value="{{$proyectos->id}}" placeholder="Código Del Estudiante">
                        @error('id')
                            <div class="alert-danger text-center">{!!$errors->first('id')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{$proyectos->nombre}}" placeholder="Nombre Del Estudiante">
                        @error('nombre')
                            <div class="alert-danger text-center">{!!$errors->first('nombre')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="descripcion">Descripciòn</label>
                            
                            <textarea   name="descripcion" id="descripcion"  aria-label="With textarea" placeholder="Descripciòn Del Proyecto" class="form-control @error('descripcion') is-invalid @enderror" >{{$proyectos->descripcion}}</textarea>
                            @error('descripcion')
                            <div class="alert-danger text-center">{!!$errors->first('descripcion')!!}</div>
                        @enderror
                        </div>
                        <br>
                    </div>
                     <div class="form-row">
                        <div class="col">
                            <label for="requisitos">Reqisitos</label>
                        
                        <textarea  name="requisitos" id="requisitos"  aria-label="With textarea" placeholder="Requisitos Del Proyecto" class="form-control @error('requisitos') is-invalid @enderror" > {{$proyectos->requisitos}} </textarea>
                        @error('requisitos')
                            <div class="alert-danger text-center">{!!$errors->first('requisitos')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="inicio">Inicio</label>
                        <input type="date" name="inicio" id="inicio" class="form-control @error('inicio') is-invalid @enderror" value="{{$proyectos->inicio}}" placeholder="Fecha De inicio">
                        @error('inicio')
                            <div class="alert-danger text-center">{!!$errors->first('inicio')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="fin">Fin</label>
                            <input type="date" name="fin" id="fin" class="form-control @error('fin') is-invalid @enderror" value="{{$proyectos->fin}}" placeholder="Fecha Final">
                            @error('fin')
                            <div class="alert-danger text-center">{!!$errors->first('fin')!!}</div>
                        @enderror
                        </div>
                        <br>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" id="responsable" class="form-control @error('responsable') is-invalid @enderror" value="{{$proyectos->responsable}}" placeholder="Responsable Del Proyecto">
                        @error('responsable')
                            <div class="alert-danger text-center">{!!$errors->first('responsable')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="pdf">Pdf</label> 
                        <input type="file" name="pdf" id="pdf" class="form-control @error('pdf') is-invalid @enderror" accept="application/pdf" value="{{$proyectos->pdf}}" placeholder="PDF de Asginaciòn Del Proyecto">
                        @error('pdf')
                            <div class="alert-danger text-center">{!!$errors->first('pdf')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="repositorio">Repositorio</label>
                        <input type="text" name="repositorio" id="repositorio @error('repositorio') is-invalid @enderror" class="form-control" value="{{$proyectos->repositorio}}" placeholder="Repositorio GitHub">
                        @error('repositorio')
                            <div class="alert-danger text-center">{!!$errors->first('repositorio')!!}</div>
                        @enderror
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('proyecto.index')}}"><button type="button" class="btn btn-secondary" >Regresar</button></a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
            </div>
    </div>
          
           
    
  </form>  







@endsection