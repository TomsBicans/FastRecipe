@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="list-group-item list-group-item-primary text-center bg-light"><h4>Add a new recipe</h4></div>

                <div class="list-group-item">
                    {{ Form::open(['action' => 'RecipeController@store', 'class' => 'form-horizontal']) }}

                    <div class="form-group row">
                        {{ Form::label('recipe_name', 'Recipe name', ['class' => 'col-md-4 control-label text-md-right']) }}
                        <div class="col-md-6">
                            {{ Form::text('recipe_name', '', ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('food[]', 'Food', ['class' => 'col-md-4 control-label text-md-right']) }}
                        <div class="col-md-6">
                            {{ Form::select('food[]',$foods,  null, ['class' => 'form-control',]) }}
                        </div>
                        <input type="button" value="Add food" onclick="addFood();">
                    </div>
                    <div id="form-append">
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var foods = <?php echo json_encode($foods)?> ;
    function addFood()
    {
        var toAppend = document.getElementById('form-append');
        var selection = document.createElement('div');
        selection.classList.add('form-group');
        selection.classList.add('row');
        
        console.log(foods);
        selection.innerHTML = '\
        <select id ="food[]">\
        \
        \
        \
        '
        
                
    }
</script>
@endsection

