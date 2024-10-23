@extends('layout')
@section('content')
<h3 class="text-center">Danh sách User</h3>
<div class="content" style="background-color: #ccc; height:600px; overflow-y: auto; overflow-x: hidden;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Session::has('success'))
                <p class="text-success">{{ Session::get('success') }}</p>
            @elseif (Session::has('failed'))
                <p class="text-danger">{{ Session::get('failed') }}</p>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Avatar</th>
                        <th class="text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0; // Khởi tạo biến $stt
                    @endphp
                    @foreach($users as $user)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td class="text-center">{{ $stt }}</td>
                            <td>
                                <div class="info-item name">{{ $user->name }}</div>
                            </td>
                            <td>
                                <div class="info-item email">{{ $user->email }}</div>
                            </td>
                            <td>
                                <div class="info-item phone">{{ $user->phone }}</div>
                            </td>
                            <td>
                                <div class="info-item role">{{ $user->role }}</div>
                            </td>
                            <td>
                                <img src="{{ asset('avatar/' . $user->avatar) }}" width="70px" height="70px" alt="avatar">
                            </td>
                            <td class="text-center">
                                <a class="btn btn-success" href="{{ route('user.updateUser', $user->id) }}">Update</a>
                                <a class="btn btn-info" href="{{ route('user.readUser', $user->id) }}">READ</a>
                                <a class="btn btn-danger" href="{{ route('user.deleteUser', $user->id) }}"
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa user có tên là: {{ $user->name }} này?');">DELETE</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
