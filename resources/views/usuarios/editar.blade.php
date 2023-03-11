@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                            @foreach($errors->all() as $error)
                              <span class="badge badge-danger">{{$error}}</span>
                            @endforeach
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endif

                            <form action="{{route('usuarios.update',$user->id)}}" method="POST"> 
                                @csrf     
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="name">Nombre</label>
                                             <input class="form-control" value='{{$user->name}}' type="text" name="name" >
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="email">Email</label>
                                             <input class="form-control" value="{{$user->email}}" type="email" name="email">
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="password">Nueva Password</label>
                                             <input class="form-control" type="password" name="password">
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="confirm-password">Confirmar Password</label>
                                             <input class="form-control" type="password" name="confirm-password">
                                          </div>
                                      </div>

                                      @method('PATCH')
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="">Roles</label>
                                               <select name="roles">
                                                  <option selected disabled>Seleccione un rol</opcion>
                                                  @foreach($roles as $role)
                                                     <option id="$role->id" value="{{$role}}" >{{$role}}</option>
                                                  @endforeach                          
                                               </select>
                                          </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                      </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

