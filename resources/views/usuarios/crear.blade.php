@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Usuarios</h3>
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

                            <form action="usuarios.store" method="POST">
                                @csrf
                                  
                                  <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="name">Nombre</label>
                                             <input class="form-control" type="text" name="Nombre" value="" placeholder="Ingrese el Nombre">
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="email">Email</label>
                                             <input class="form-control" type="email" name="Nombre" value="" placeholder="Ingrese el Email">
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="password">Password</label>
                                             <input class="form-control" type="password" name="Nombre" value="" placeholder="Ingrese la Contraseña">
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="confirm-password">Confirmar Password</label>
                                             <input class="form-control" type="password" name="Nombre" value="" placeholder="Confirme la Contraseña">
                                          </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="">Roles</label>
                                               <select name="roles">
                                                  @foreach($roles as $role)
                                                     <option id=$role->id>$role->name</option>
                                                  @endforeach                                          
                                               </select>
                                          </div>
                                      </div>

                                      <button class="btn btn-info" type="submit">Guardar</button>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

