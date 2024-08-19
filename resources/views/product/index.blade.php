<?php

// use  App\Models\product;

// product::factory(25)->create();
?>





@extends("layout.app")
@section("content")
<a href="{{route("product.create")}}" class="btn btn-warning">Add product</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">name</th>
      <th class="text-center" scope="col">description</th>
      <th class="text-center" scope="col">created_at</th>
      <th class="text-center" scope="col">category</th>
      <th class="text-center" scope="col">opertation</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row" class="text-center">{{$product->id}}</th>
      <td class="text-center"> {{$product->name}}</td>
      <td class="text-center">{{$product->description}}</td>
      <td class="text-center">{{date('y/m/d' , strtotime($product->created_at))}}</td>
      <td class="text-center">{{$product->category->name}}</td>

      <td class="text-center">
        <form action="" style="display:inline-block">
          <a href="{{route('product.edit' , $product->id)}}" class="btn btn-primary">Edit product</a>
          <a href="" class="btn btn-success">View</a>
        </form>
        <form action="" method="POST" style="display:inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>

    </tr>
    @endforeach


  </tbody>
</table>
@endsection