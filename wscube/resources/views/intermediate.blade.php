
<h1> I am view of intermediate</h1>

@if($firstname == 'ali')
    <h3>Welcome {{ $firstname }}</h3>

@elseif($firstname == 'hacker')
    <h1>You are Welcome master</h1>

@else 
    <h3>your are welcome data scientist</h3>
@endif