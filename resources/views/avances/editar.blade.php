@extends('index')

@section('contenido')
<br><br>
<form  method="post" id="" class="" action="{{route('avances.update',$avances->id)}}" enctype="multipart/form-data"> 
    @method('PUT') 
    {{ @csrf_field() }}   
   
    <div class="col">
           <div class="card card-body  ">
                <div class="card-title text-center " >
                <h2>Nuevos Avances </h2>
                </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="Registro_id">Código</label>
                        <input type="text" name="Registro_id" id="Registro_id" class="form-control @error('Registro_id') is-invalid @enderror" value="{{$avances->Registro_id}}" placeholder="Código Del Estudiante">
                        @error('Registro_id')
                            <div class="alert-danger text-center">{!!$errors->first('Registro_id')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="descripcion">Descripciòn</label>
                      
                        <textarea class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" id="descripcion"  aria-label="With textarea" placeholder="Descripcion Del Proyecto">{{$avances->descripcion}}</textarea>
                        @error('descripcion')
                            <div class="alert-danger text-center">{!!$errors->first('descripcion')!!}</div>
                        @enderror
                        </div>
                    
                    </div>
                     <div class="form-row">
                        <div class="col">
                            <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{$avances->fecha}}" placeholder="Fecha Del Avance">
                        @error('fecha')
                            <div class="alert-danger text-center">{!!$errors->first('fecha')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="url">Url</label>
                        <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="{{$avances->url}}" placeholder="URL">
                        @error('url')
                            <div class="alert-danger text-center">{!!$errors->first('url')!!}</div>
                        @enderror
                        </div>
                        <div class="col">
                            <label for="reportes">Reportes</label>
                            <input type="file" name="reportes" id="reportes" value="{{$avances->reportes}}" accept="application/pdf" class="form-control @error('reportes') is-invalid @enderror" placeholder="Reportes">
                            @error('reportes')
                            <div class="alert-danger text-center">{!!$errors->first('reportes')!!}</div>
                        @enderror
                        </div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('avances.index')}}"><button type="button" class="btn btn-secondary" >Regresar</button></a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
            </div>
    </div>
    
  </form>  


@endsection