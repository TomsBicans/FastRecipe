@extends('layouts.app')

@section('content')
    <h3 class="text-center">Enter nutrition info below:</h3>
    <div class="row d-flex justify-content-center">
        {!! Form::open(['url' => '/submit']) !!}
        <div class="form-group text-center">
            <strong>{{Form::label('calories', 'Calories , kcal')}}</strong>
            {{Form::number('calories', '', ['class' => 'form-control' , 'placeholder' => '' , 'min'=>0])}}
        </div>
        <div class="text-center">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
        <div class="text-center">
        <br>
        <h4>Optional parameters</h4>
        
            <div class="form-group">
                <div class="">
                    <strong>{{Form::label('protein', 'Protein , g')}}</strong>
                </div>
                <div class="">
                    {{Form::number('protein', '', ['class' => 'form-control' , 'placeholder' => '', 'min'=>0])}}
                </div>
                
            </div>
            <div class="form-group">
                <div class="">
                    <strong>{{Form::label('carbohydrates', 'Carbohydrates , g')}}</strong>
                </div>
                <div class="">
                    {{Form::number('carbohydrates', '', ['class' => 'form-control' , 'placeholder' => '', 'min'=>0])}}
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <strong>{{Form::label('fat', 'Fat , g')}}</strong>
                </div>
                <div class="">
                    {{Form::number('fat', '', ['class' => 'form-control' , 'placeholder' => '', 'min'=>0])}}
                </div>
                
            </div> 
        </div>
        {!! Form::close() !!}
    </div>
    
@endsection


