@extends('layouts.main')

@section('content')


<h2 style="text-align:center">Product Card</h2>
@foreach($products as $product )
<div class="card" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
">
  <img src="{{asset('images'.$product->image)}}" alt="Denim Jeans" style="width:100%">
  <h1><a href"{{route('single_oproduct','id'=>product->id)}}"{{$product->name}}</a></h1>
  @if($product->sale_price)
 $ <p class="price" style=" color: grey;
  font-size: 22px;">{{$product->sale_price}}</p>

 $ <p class="price" style=" color: red;
  font-size: 20px;">{{$product->price}}</p>
  @@else

 $ <p class="price" style=" color: grey;
  font-size: 22px;">{{$product->sale_price}}</p>
  @endif
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>
@endforeach

@endsection