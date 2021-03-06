@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div style="background-color:rgb(103, 241, 103)"  class="card-header"><h1>Editar Editorial #{{  $editorial->id }}</h1></div>

                  
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/editorial/' . $editorial->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('editorial.form', ['formMode' => 'Editar'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
