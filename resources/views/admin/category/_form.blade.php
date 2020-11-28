<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{old('name', isset($category)?$category->name:null)}}" placeholder="Enter Category Name">
        @error('name')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Category Description">{{old('description',isset($category)?$category->description:null)}}</textarea>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" @if(old('is_featured',isset($category)?$category->is_featured:null)  == 1) checked @endif name="is_featured" class="form-check-input" value="1" id="is_featured">
            <label  for="is_featured">is_featured?</label>
        </div>
    </div>

    <div class="form-group">
        <label>Status</label>
        <div class="form-check">
            <input type="radio" @if(old('status',isset($category)?$category->status:null)  == 'Active') checked @endif name="status" class="form-check-input" value="active" id="active">
            <label  for="active">Active</label>
        </div>

        <div class="form-check">
            <input type="radio" @if(old('status',isset($category)?$category->status:null)  == 'Inactive') checked @endif name="status" class="form-check-input" value="inactive" id="inactive">
            <label for="inactive">Inactive</label>
        </div>
        @error('status')<i class="text-danger">{{ $message }}</i>@enderror
    </div>

    <div class="form-group" >
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control" id="image" value="{{old('image', isset($category)?$category->image:null)}}" placeholder="Upload Product image ">
        @error('image')<i class="text-danger">{{$message}}</i>@enderror
    </div>
    @if (isset($category))
        <img src="{{asset($category->image)}}" width="150px;">
    @endif
</div>
<!-- /.card-body -->
