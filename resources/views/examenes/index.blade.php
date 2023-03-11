@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Examenes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Lista de Examenes</h3>
                            @can('crear-rol')
                            <a class="btn btn-warning" href="{{ route('examenes.create')}}">Nuevo</a>
                            <a class="btn btn-info" href="{{route('examenes.edit', 1)}}">Generar Examen</a>
                            @endcan
                            <table class="table table-striped at-2">
                               
                            </table>

                            <div class="pagination justify-content-end">
                              {{$examenes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

