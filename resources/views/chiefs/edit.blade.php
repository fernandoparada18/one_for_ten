@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Modificación
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($chief, ['route' => ['chiefs.update', $chief->id], 'method' => 'patch']) !!}

                        @include('chiefs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection