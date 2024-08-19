@extends("layout.app")
@section("content")
<div class="container p-5">
    <form action="{{route("product.store")}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4"> name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4"> descreption</label>
                <input type="text" class="form-control" name="description">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlSelect1">category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="cat_id">
                    @foreach ($categories as $category)
                    <option  value="{{$category->cat_id}}">{{$category->name}}</option>
                    @endforeach
                    
            
                </select>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection