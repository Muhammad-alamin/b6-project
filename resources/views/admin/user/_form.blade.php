<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{old('name', isset($user)?$user->name:null)}}" placeholder="Enter User Name">
        @error('name')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{old('email', isset($user)?$user->email:null)}}" placeholder="Enter User Email">
        @error('email')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" value="{{old('phone', isset($user)?$user->phone:null)}}" placeholder="Enter User phone Number">
        @error('phone')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <textarea name="text" id="address" cols="30" rows="5" class="form-control" >{{old('address', isset($user)?$user->address:null)}} </textarea>
        @error('address')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter User password">
        @error('password')<i class="text-danger">{{$message}}</i>@enderror
    </div>

    <div class="form-group">
        <label for="confirmed_password">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Enter Confirm password">

    </div>

    <div class="form-group">
        <label>Status</label>
        <div class="form-check">
            <input type="radio" @if(old('status',isset($user)?$user->status:null)  == 'Active') checked @endif name="status" class="form-check-input" value="active" id="active">
            <label  for="active">Active</label>
        </div>

        <div class="form-check">
            <input type="radio" @if(old('status',isset($user)?$user->status:null)  == 'Inactive') checked @endif name="status" class="form-check-input" value="inactive" id="inactive">
            <label for="inactive">Inactive</label>
        </div>
        @error('status')<i class="text-danger">{{ $message }}</i>@enderror
    </div>


</div>
<!-- /.card-body -->
