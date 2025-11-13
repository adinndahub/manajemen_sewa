@extends('layouts/app') 

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{ $title }}
    </h1>

<div class="card">
    <div class="card-header text-warning">
        <h4>Edit data property</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('propertyUpdate', $property->id) }}" method="post">
        @csrf
        <div class="row mb-2">
            <div class="col-12">
                <label for="">
                    Own Name
                    <span class="text-danger">*</span>
                </label>
                <input type="text" value="{{ $property->user->name }}" class="form-control" name="user_id" disabled>                    
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-xl-6 mb-1">
                <label>
                    Property Name
                    <span class="text-danger">*</span>
                </label>
                <input type="text" value="{{ $property->name }}" class="form-control" name="name">         
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror           
            </div>

            <div class="col-xl-6 mb-1">
                <label>
                    Type
                    <span class="text-danger">*</span>
                </label>
                <input type="text" value="{{ $property->type }}" class="form-control" name="type">     
                @error('type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror               
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-xl-12 mb-1">
                <label>
                    Address
                    <span class="text-danger">*</span>
                </label>
                <input type="text" value="{{ $property->address }}" class="form-control" name="address">     
                @error('address')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-xl-6 mb-1">
                <label>
                    Price
                    <span class="text-danger">*</span>
                </label>
                <input type="number" value="{{ number_format($property->price, 0, '', '') }}" class="form-control" name="price">     
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-xl-6 mb-1">
                <label>
                    Rent Type
                    <span class="text-danger">*</span>
                </label>
                <select name="rent_type" class="form-control" value="{{ $property->rent_type }}">
                <option disabled>-- Select --</option>
                    <option value="montly" {{ $property->rent_type == 'monthly' ? 'selected' : '' }}>Monthly</option>
                    <option value="yearly" {{ $property->rent_type == 'yearly' ? 'selected' : '' }}>Yearly</option>    
                </select>
                @error('rent_type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-xl-12 mb-1">
                <label>
                    Status
                    <span class="text-danger">*</span>
                </label>
                <select name="status" class="form-control" value="{{ $property->status }}">
                <option disabled>-- Select --</option>
                    <option value="available" {{ $property->status == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="booked" {{ $property->status == 'booked' ? 'selected' : '' }}>Booked</option>    
                </select>                
                @error('status')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row d-flex justify-content-end">
            <div class="mr-2">
                <a href="{{ route('property') }}" class="btn btn-sm btn-secondary">
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
