<h1> I am view of expert</h1>
<h2>Here is the product single page</h2>
@if($product_name == 'habibali')
    <h3>Product Name: {{ $product_name }}</h3>
    <h3>Product image:{{ $image }}</h3>
    <h3>Product price:{{ $price }}</h3>
@elseif($product_name == 'hacker')
    <h1>Hacker dont buy they only steal</h1>
    <h3>Product image:{{ $image }}</h3>
    <h3>Product price:{{ $price }}</h3>
@else
    <h2>You are not part of 4th infantary</h2>
@endif