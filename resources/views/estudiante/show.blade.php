@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? "{{ __('Show') Estudiante" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $estudiante->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $estudiante->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Id Programa:</strong>
                            {{ $estudiante->id_programa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
