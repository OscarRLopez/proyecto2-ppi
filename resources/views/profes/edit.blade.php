@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($profes, ['route' => ['profes.update', $profes->id], 'method' => 'patch']) !!}

                        @include('profes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection