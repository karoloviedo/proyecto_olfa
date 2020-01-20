{{-- @extends('layouts.master') --}}
{{-- aqui esta la vista donde viene la plantilla y sus derivados --}}

@extends('test')

@section('content')

    <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
         <client> </client> <!--Añadimos nuestro componente vuejs-->
    </div>
    <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
   
@endsection

