@extends('layout')
@section('content')
<body class="bg-light">
    <div class="container">
        <h4 class="card-header text-center custom-bold">Cập Nhập Thông Tin Khách Hàng</h4>
        <div class="row justify-content-center mt-2">
            <div class="col-md-6 card">
                <div class="card-body">
                    <form action="{{ route('user.postUpdateUser', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if($errors->has('name'))
                            <span class="error-message">{{ $errors->first('name') }}</span>
                        @endif
                        <div class="mb-3 d-flex align-items-center">
                            <label for="name" class="form-label fw-bold me-2" style="width: 100px;">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                        </div>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="email" class="form-label fw-bold me-2" style="width: 100px;">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                        </div>
                        @if($errors->has('phone'))
                            <span class="error-message">{{ $errors->first('phone') }}</span>
                        @endif
                        <div class="mb-3 d-flex align-items-center">
                            <label for="phone" class="form-label fw-bold me-2" style="width: 100px;">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                        </div>
                        @if($errors->has('role'))
                            <span class="error-message">{{ $errors->first('role') }}</span>
                        @endif
                        <div class="mb-3 d-flex align-items-center position-relative">
                            <label for="role" class="form-label fw-bold me-2" style="width: 100px;">Role:</label>
                            <select class="form-control" id="role" name="role">
                                <option value="user" @if($user->role == 'user') selected @endif>User</option>
                                <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                            </select>
                            <span class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%);">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </div>
                        @if($errors->has('avatar'))
                            <span class="error-message">{{ $errors->first('avatar') }}</span>
                        @endif
                        <div class="mb-3 d-flex align-items-center">
                            <label for="avatar" class="form-label fw-bold me-2" style="width: 100px;">Avatar:</label>
                            <div>
                                <label for="avatar" class="avatar-image">
                                    <img id="avatar-preview" src="{{ asset('avatar/' . $user->avatar) }}" width="100px" height="100px" alt="Current Avatar">
                                </label>
                            </div>
                            <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*" onchange="updateFileName()">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin') }}" class="btn btn-success">Quay lại</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateFileName() {
            var input = document.getElementById('avatar');
            var fileName = input.files[0] ? input.files[0].name : 'No file chosen';
            var fileNameDisplay = document.getElementById('file-name');

            fileNameDisplay.textContent = fileName;

            // Thay đổi hình ảnh hiển thị
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('avatar-preview').src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
@endsection