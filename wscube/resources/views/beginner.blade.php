<h1> I am view of begginer</h1>

{{-- @if($name == 'habibali')
    <h3>{{ $name }}</h3>
@endif

<h3>{{ $id }}</h3> --}}

@for($i = 0;$i< 3;$i++)
    <h1>counting is : {{$i}}</h1>
@endfor