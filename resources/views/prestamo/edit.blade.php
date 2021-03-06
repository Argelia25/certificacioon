@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div  style="background-color:rgb(193, 243, 193)" class="card">
                 <center>  <div style="background-color:rgb(103, 241, 103)"  ><h1>Editar Prestamo #{{ $prestamo->id }}</h1></div></center> 
                  

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/prestamo/' . $prestamo->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('prestamo.form', ['formMode' => 'editar'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
