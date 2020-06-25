@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="list-group-item list-group-item-primary text-center bg-light"><h4>Add a new recipe</h4></div>

                <div class="list-group-item" >
                    {{ Form::open(['action' => 'RecipeController@store', 'class' => 'form-horizontal']) }}

                    <div class="form-group row">
                        {{ Form::label('recipe_name', 'Recipe name', ['class' => 'col-md-4 control-label text-md-right']) }}
                        <div class="col-md-6">
                            {{ Form::text('recipe_name', '', ['class' => 'form-control']) }}
                        </div>
                        {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
                    </div>
                    <input type="number" value="0" onclick="" id="input-count" min="1" max="10" name="foodamounts">
                    <input type="button" value="Add foods" onclick="addFood();">
                    
                    <div id="form-append">
                        
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            
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
        
        var InputCount = document.getElementById('input-count').value;
        if(InputCount > 10)
            return;
        var toAppend = document.getElementById('form-append');
        toAppend.innerHTML = '';
        
        console.log(foods);
        console.log(InputCount);
        var count = 0;
        for(var i=0; i<InputCount; i++)
        {
            count++;
            var selection = document.createElement('div');
            selection.classList.add('form-group');
            selection.classList.add('row');
            
            var input = document.createElement('select');
            input.type = 'text';
            input.name = 'food[]';
            input.setAttribute('id', 'food[]');
            input.classList.add('form-control');
            input.classList.add('col-md-6');
            
            
            var amount = document.createElement('input');
            amount.type = 'number';
            amount.min = 0;
            amount.max = 2000;
            amount.name = 'foodamount[]';
            amount.setAttribute('id', 'foodamount[]');
            amount.classList.add('form-control');
            amount.classList.add('col-md-4');
            
            
            var amountLabel = document.createElement('span');
            //amountLabel.for = 'foodamount'+count;
            amountLabel.innerHTML = 'g';
            for(var j in foods)
            {
                var option = document.createElement('option');
                option.textContent = foods[j].food_name;
                option.value = foods[j].id;
                input.appendChild(option);
            }
            selection.appendChild(input);
            selection.appendChild(amount);
            selection.appendChild(amountLabel);
            toAppend.appendChild(selection);
        }
    }
</script>
@endsection

