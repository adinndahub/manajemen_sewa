@extends('layouts/app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{ $title }}
    </h1>

<div class="card">
    <div class="card-header text-primary">
        <h4>Data Renter</h4>
    </div>

    <div class="card-body">
        {{-- pastikan route name sesuai --}}
        <form action="{{ route('rentersStore') }}" method="POST">
            @csrf

            {{-- TENANT --}}
            <div class="row mb-2">
                <div class="col-12">
                    <label>
                        Tenant Name
                        <span class="text-danger">*</span>
                    </label>
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                        <option selected disabled>-- Select Tenant --</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- FULL NAME & PHONE --}}
            <div class="row mb-2">
                <div class="col-xl-6 mb-1">
                    <label>
                        Full Name
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name') }}" placeholder="Enter renter full name">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xl-6 mb-1">
                    <label>
                        Phone Number
                    </label>
                    <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                           value="{{ old('phone') }}" placeholder="Enter phone number">
                    @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- EMAIL & UNIT --}}
            <div class="row mb-2">
                <div class="col-xl-6 mb-1">
                    <label>
                        Email
                    </label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           value="{{ old('email') }}" placeholder="Enter email address">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xl-6 mb-1">
                    <label>
                        Unit
                        <span class="text-danger">*</span>
                    </label>
                    <select name="property_id" class="form-control @error('property_id') is-invalid @enderror">
                        <option selected disabled>-- Select Unit --</option>
                        @foreach ($properties as $property)
                            <option value="{{ $property->id }}" {{ old('property_id') == $property->id ? 'selected' : '' }}>
                                {{ $property->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('property_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- START & END DATE --}}
            <div class="row mb-2">
                <div class="col-xl-6 mb-1">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                           value="{{ old('start_date') }}">
                    @error('start_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-xl-6 mb-1">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                           value="{{ old('end_date') }}">
                    @error('end_date')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- BUTTON --}}
            <div class="row d-flex justify-content-end">
                <div class="mr-2">
                    <a href="{{ route('renters') }}" class="btn btn-sm btn-secondary">
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