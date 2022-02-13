@extends('index')

@section('contenido')
<br>
<form  method="post" id="" class="" action="{{route('proyecto.store')}}" enctype="multipart/form-data"> 
    {{ @csrf_field() }}   
   
    <div class="col">
           <div class="card card-body  ">
                <div class="card-title text-center " >
                <h2>Nuevo Proyecto </h2>
                </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="codigo">Código</label>
                        <input type="text" name="id" id="id" value="{{old('id')}}" class="form-control @error('id') is-invalid @enderror" placeholder="Código Del Estudiante">
                        @error('id')
                            <div class="alert-danger text-center">{!!$errors->first('id')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre Del Estudiante">
                        @error('nombre')
                            <div class="alert-danger text-center">{!!$errors->first('nombre')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="descripcion">Descripciòn</label>
                            <textarea   name="descripcion" id="descripcion"   aria-label="With textarea" placeholder="Descripcion Del Proyecto" class="form-control @error('descripcion') is-invalid @enderror" >{{old('descripcion')}}</textarea>
                            @error('descripcion')
                            <div class="alert-danger text-center">{!!$errors->first('descripcion')!!}</div>
                        @enderror
                        </div>
                        
                        <br>
                    </div>
                     <div class="form-row">
                        <div class="col">
                            <label for="requisitos">Reqisitos</label>
                            <textarea class="form-control @error('requisitos') is-invalid @enderror" name="requisitos" id="requisitos"  aria-label="With textarea" placeholder="Requisitos Del Proyecto">{{old('requisitos')}}</textarea>
                        @error('requisitos')
                            <div class="alert-danger text-center">{!!$errors->first('requisitos')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="inicio">Inicio</label>
                        <input type="date" name="inicio" id="inicio" value="{{old('inicio')}}" class="form-control @error('inicio') is-invalid @enderror" placeholder="Fecha De inicio">
                        @error('inicio')
                            <div class="alert-danger text-center">{!!$errors->first('inicio')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="fin">Fin</label>
                            <input type="date" name="fin" id="fin" value="{{old('fin')}}" class="form-control @error('fin') is-invalid @enderror" placeholder="Fecha Final">
                            @error('fin')
                            <div class="alert-danger text-center">{!!$errors->first('fin')!!}</div>
                        @enderror
                        </div>
                        <br>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="responsable">Responsable</label>
                        <input type="text" name="responsable" value="{{old('responsable')}}" id="responsable" class="form-control @error('responsable') is-invalid @enderror" placeholder="Responsable Del Proyecto">
                        @error('responsable')
                            <div class="alert-danger text-center">{!!$errors->first('responsable')!!}</div>
                        @enderror
                        </div>

                        <div class="col">
                            <label for="pdf">Pdf</label>
                        <input type="file" name="pdf" id="pdf" value="{{old('pdf')}}" class="form-control @error('pdf') is-invalid @enderror" accept="application/pdf" placeholder="PDF de Asginaciòn Del Proyecto">
                        @error('pdf')
                            <div class="alert-danger text-center">{!!$errors->first('pdf')!!}</div>
                        @enderror
                        </div>
                        
                        <div class="col">
                            <label for="repositorio">Repositorio</label>
                        <input type="text" name="repositorio" value="{{old('repositorio')}}" id="repositorio" class="form-control @error('repositorio') is-invalid @enderror" placeholder="Repositorio GitHub">
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

