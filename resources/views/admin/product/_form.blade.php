<div class="card-body">
    <div class="form-group">
        <label for="category_id">Select Category</label>
        <select class="form-control" name="category_id" id="category_id">
            <option value="category_id">Select Category</option>
                @foreach($categories as $category)

                <option @if(old('category_id',isset($product)?$category->id:null)  == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>

                @endforeach
        </select>

        @error('category_id')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{old('name', isset($product)?$product->name:null)}}" placeholder="Enter product Name">
        @error('name')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" name="color" class="form-control" id="color" value="{{old('color', isset($product)?$product->color:null)}}" placeholder="Enter Product color ">
        @error('color')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="Size">Size</label>
        <input type="text" name="size" class="form-control" id="size" value="{{old('size', isset($product)?$product->size:null)}}" placeholder="Enter Product size ">
        @error('size')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter product Description">{{old('description',isset($product)?$product->description:null)}}</textarea>
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" id="price" value="{{old('price', isset($product)?$product->price:null)}}" placeholder="Enter Product price ">
        @error('price')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="form-control" id="stock" value="{{old('stock', isset($product)?$product->stock:null)}}" placeholder="Enter Product stock ">
        @error('stock')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id="image" value="{{old('image', isset($product)?$product->image:null)}}" placeholder="Upload Product image ">
        @error('image')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label>Status</label>
        <div class="form-check">
            <input type="radio" @if(old('status',isset($product)?$product->status:null)  == 'Active') checked @endif name="status" class="form-check-input" value="active" id="active">
            <label  for="active">Active</label>
        </div>

        <div class="form-check">
            <input type="radio" @if(old('status',isset($product)?$product->status:null)  == 'Inactive') checked @endif name="status" class="form-check-input" value="inactive" id="inactive">
            <label for="inactive">Inactive</label>
        </div>
        @error('status')<i class="text-danger">{{ $message }}</i>@enderror
    </div>

</div>
<!-- /.card-body -->
