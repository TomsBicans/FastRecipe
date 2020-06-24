@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Browse</h1>
</div>
@if(count($recipes) > 0)
<div id="mainContainer" ng-controller="mainCtrl">
    <div class="container py-4">
        <section class="row">
            @foreach($recipes as $recipe)
            <div class="col-md-6 col-lg-6 py-3">
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
            </div>
            @endforeach
        </section>
    </div>
</div>


<div class="row">
    <div class="col-12 py-3 text-center" ng-show="needToLoadMore & amp; & amp;!done">
        <a href="" class="btn btn-outline-primary">More</a>
    </div>
    <div class="col-12 text-center" ng-show="done">
        <h4>That's the End!</h4>
    </div>
</div>

@endif
@endsection

