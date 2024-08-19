@extends("layout.app")
@section("content")
<div class="container p-5">
    <form action="{{route("product.update" , 1)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4"> name</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4"> descreption</label>
                <input type="text" class="form-control" name="description" value="{{$product->description}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">price</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">category</label>
                <input type="text" class="form-control" name="cat_id" readonly="true" value="{{$product->category->name}}">
                </select>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection