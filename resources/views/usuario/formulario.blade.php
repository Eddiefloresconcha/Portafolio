@extends('app.master')
@section('contenido')
    <div class="col-md-12">



          <form action="{{ action('App\Http\Controllers\UsuarioController@save') }}" method="post">
              {{ csrf_field() }}
              <input type="hidden" class="form-control" name="id" value="{{$usuario->id}}" >

            

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" value="{{$usuario->email}}" > 
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Rol</label>
                <select name="idrol" class="form-select" required>
                    @foreach($rols as $rol)
                        <option value="{{ $rol->id }}" 
                            @if($usuario->idrol == $rol->id) selected @endif>
                            {{ $rol->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>


            <input type="submit" class="btn btn-info" name="operacion" value="{{$operacion}}">
            @if($operacion=='Modificar')
            <input type="submit" class="btn btn-info" name="operacion" value="Eliminar">
            @endif
          </form>

    </div>
@endsection