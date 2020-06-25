@extends('layouts.app')

@section('content')
<div class="card h-100 bg-light border-0 animated pulse">
    <div class="card-body p-2 d-flex flex-column border bg-white animated fadeIn">
        <div>
            <span class="float-right">x <i class="fa fa-heart-o"></i></span>
            <h4>{{$recipe->recipe_name}}</h4>
            @php
            $amount =0; $calories=0; $protein=0; $carbohydrate=0; $fat=0;
            @endphp
            @foreach($recipe->foods as $food)
            @php
            $m = ($food->pivot->amount)/100;
            @endphp
            <p style="padding-left:1em">
                {{$food->pivot->amount}}g
                <strong>{{$food->food_name}}</strong>&nbsp; 
                {{($food->calories)*$m}} kcal &nbsp; 
                ({{($food->protein)*$m}} g protein,
                {{($food->carbohydrate)*$m}} g carb,
                {{($food->fat)*$m}} g fat)
            </p>
            @php
            $amount += $food->pivot->amount;
            $calories += ($food->calories)*$m;
            $protein += ($food->protein)*$m;
            $carbohydrate += ($food->carbohydrate)*$m;
            $fat += ($food->fat)*$m;
            @endphp
            @endforeach
            <p>TOTAL: {{$amount}}g , {{$calories}}kcal, {{$protein}}g protein, {{$carbohydrate}}g carbs, {{$fat}}g fat</p>
        </div>
    </div>
</div>
@endsection

