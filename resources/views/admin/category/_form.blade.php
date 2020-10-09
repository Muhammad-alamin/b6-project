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

</div>
<!-- /.card-body -->
