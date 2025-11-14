@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>

    <div class="card">
        <div class="card-header text-warning">
            <h4>Edit Data Renter</h4>
        </div>

        <div class="card-body">
            <form id="form-renter-edit" action="{{ route('rentersUpdate', $renter->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row mb-2">
                    <div class="col-12">
                        <label>Tenant Owner <span class="text-danger">*</span></label>
                        <select name="user" class="form-control @error('user') is-invalid @enderror" required>
                            <option value="">-- Select Tenant --</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $renter->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('user')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-xl-6 mb-1">
                        <label>Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               value="{{ old('name', $renter->name) }}" required>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xl-6 mb-1">
                        <label>Phone Number</label>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                               value="{{ old('phone', $renter->phone) }}">
                        @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-xl-6 mb-1">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email', $renter->email) }}">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xl-6 mb-1">
                        <label>Unit <span class="text-danger">*</span></label>
                        <select name="property_id" class="form-control @error('property_id') is-invalid @enderror" required>
                            <option value="">-- Select Unit --</option>
                            @foreach ($properties as $property)
                                <option value="{{ $property->id }}" {{ $renter->property_id == $property->id ? 'selected' : '' }}>
                                    {{ $property->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('property_id')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-xl-6 mb-1">
                        <label>Start Date</label>
                        <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror"
                               value="{{ old('start_date', $renter->start_date) }}">
                        @error('start_date')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xl-6 mb-1">
                        <label>End Date</label>
                        <input type="date" name="end_date" class="form-control @error('end_date') is-invalid @enderror"
                               value="{{ old('end_date', $renter->end_date) }}">
                        @error('end_date')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="row d-flex justify-content-end mt-3">
                    <div class="mr-2">
                        <a href="{{ route('renters') }}" class="btn btn-sm btn-secondary">
                            <i class="fas fa-arrow-left mr-1"></i> Back
                        </a>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection