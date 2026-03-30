@extends('app.master')
@section('contenido')
    <div class="col-md-12">        
                    
                    <a href="{{ action('App\Http\Controllers\UsuarioController@formulario') }}" class="btn btn-info">Agregar</a>
                    <table class="table table-striped">
                        <tr>
                            <td>ID</td>
                            <td>Email</td>
                            
                            <td>Rol</td>
                        </tr>
                        @foreach($lista as $elemento)
                            <tr>
                                <td>{{$elemento->id}}</td>
                                <td><a href="{{ action('App\Http\Controllers\UsuarioController@formulario',$elemento->id) }}">{{$elemento->email}}</a></td>
                            
                                <td>{{$elemento->rol}}</td>
                            </tr>
                        @endforeach
                    </table>
           </div>
@endsection