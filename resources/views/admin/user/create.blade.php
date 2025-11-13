@extends('layouts/app') 

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{ $title }}
    </h1>

<div class="card">
    <div class="card-header text-primary">
        <h4>data tenant</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('userStore') }}" method="post">
        @csrf
        <div class="row mb-2">
            <div class="col-xl-6 mb-1">
                <label for="">
                    Name
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
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
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
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
            <div class="col-12">
                <label for="">
                    Role
                    <span class="text-danger">*</span>
                </label>
                <select name="role" class="form-control @error('role') is-invalid @enderror">
                    <option selected disabled>-- Select --</option>
                    <option value="Super Admin">Super Admin</option>
                    <option value="Admin">Admin</option>
                </select>
                @error('role')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
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
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fas fa-save mr-1"></i>
                    <b>Save</b>
                </button>
            </div>
        </div>

        </form>
    </div>
</div>
@endsection
