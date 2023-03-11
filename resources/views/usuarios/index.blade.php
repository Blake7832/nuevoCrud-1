@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Lista de Usuarios</h3>
                            @can('crear-rol')
                            <a class="btn btn-warning" href="{{ route('usuarios.create')}}">Nuevo</a>
                            @endcan
                            <table class="table table-striped at-2">
                                <thead style="background-color: #6777ef;">
                                  <th style="display: none;">ID</th>
                                  <th style="color: #fff;">Nombre</th>
                                  <th style="color: #fff;">Email</th>
                                  <th style="color: #fff;">Rol</th>
                                  <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                    <tr>
                                        <td style="display: none;">{{$usuario->id}}</td>
                                        <td>{{$usuario->name}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>
                                            @if(!empty($usuario->getRoleNames()))
                                              @foreach($usuario->getRoleNames() as $rolName)
                                              <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                              @endforeach
                                            @endif  
                                        </td>
                                        <td>
                                        <form action="{{ route('usuarios.destroy',$usuario->id)}}" method="POST">    
                                            @can('editar-rol')
                                            <a class="btn btn-info" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a> 
                                            @endcan                  
<!--                                            <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
                                            <a class="btn btn-danger">Borrar</a>
                                            </form>                                            
-->                                         
                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-rol')
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>

                            <div class="pagination justify-content-end">
                              {{$usuarios->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

