@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Amigos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($patrol, ['route' => ['patrols.update', $patrol->id], 'method' => 'patch']) !!}

                        @include('patrols.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection