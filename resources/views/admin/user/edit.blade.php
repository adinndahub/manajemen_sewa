@extends('layouts/app') 

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{ $title }}
    </h1>

<div class="card">
    <div class="card-header text-white bg-warning">
        <h4>edit data tenant</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('userUpdate', $user->id) }}" method="post">
        @csrf
        <div class="row mb-2">
            <div class="col-xl-6 mb-1">
                <label for="">
                    Name
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
                @error('name')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="col-xl-6 mb-1">
                <label for="">
                    Email
                    <span class="text-danger">*</span>
                </label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                @error('email')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-xl-6 mb-1">
                <label for="">
                    Password
                    <span class="text-danger">*</span>
                </label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="col-xl-6 mb-1">
                <label for="">
                    Password Confirmation
                    <span class="text-danger">*</span>
                </label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-6">
                <label for="">
                    Role
                    <span class="text-danger">*</span>
                </label>
                <select name="role" class="form-control @error('role') is-invalid @enderror">
                    <option disabled>-- Select --</option>
                    <option value="Super Admin" {{ $user->role == 'Super Admin' ? 'selected' : '' }}>Super Admin</option>
                    <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                </select>
                @error('role')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="col-xl-6 mb-1">
                <label for="">
                    Active Until
                    <span class="text-danger">*</span>
                </label>
                <input type="date" name="active_until" class="form-control @error('active_until') is-invalid @enderror" value="{{ $user->active_until }}">
            </div>
        </div>

        <div class="row d-flex justify-content-end">
            <div class="mr-2">
                <a href="{{ route('user') }}" class="btn btn-sm btn-secondary">
                    <i class="fas fa-arrow-left mr-1"></i>
                    <b>Back</b>
                </a>
            </div>
            <div>
                <button type="submit" class="btn btn-sm btn-warning">
                    <i class="fas fa-edit mr-1"></i>
                    <b>Edit</b>
                </button>
            </div>
        </div>

        </form>
    </div>
</div>
@endsection
