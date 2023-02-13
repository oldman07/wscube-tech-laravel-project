@extends('layouts.main')
@section('main-section')
<h1> I am view of intermediate</h1>

<?php $countries = [0,1,2,3,4,5,6,7,8,9] ?>

@foreach($countries as $country)
    {{$country}}
@endforeach

{{-- @if($firstname == 'ali')
    <h3>Welcome {{ $firstname }}</h3>

@elseif($firstname == 'hacker')
    <h1>You are Welcome master</h1>

@else 
    <h3>your are welcome data scientist</h3>
@endif 

<?php 
$counter = 0
?>
@while($counter <=3)
    <h1> Sniper level: {{$counter}}</h1>
    <?php $counter ++; ?>
@endwhile --}}

@endsection