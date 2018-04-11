@extends('master')
@section('title', 'Meal Up')
@section('content')


<h1 class="pt-5">Ingredients</h1>

@foreach($ingredients as $g)

    <p>{{$g->ingredient->name}}</p>
@endforeach



<h1>Step By Step</h1>



    <p>{{$recipe->steps}}</p>


<h1>Prep Time</h1>
<p>{{$recipe->prep_time}}</p>
<h1>Cook Time</h1>
<p>{{$recipe->cook_time}}</p>


@endsection
