@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ver registro
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('chiefs.show_fields')
                    <a href="{{ route('chiefs.index') }}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
