@extends('layouts.app')

@section('content')
    <h3 class="text-center">Enter your unique recipe idea below:</h3>
    {!! Form::open(['url' => 'recipe/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Recipe name')}}
        {{Form::text('name', '', ['class' => 'form-control' , 'placeholder' => 'Enter recipe name'])}}
    </div>
    <div class="form-group">
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection

