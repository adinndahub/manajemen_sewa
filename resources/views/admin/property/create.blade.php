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
        <form action="{{ route('propertyStore') }}" method="post">
        @csrf

        <div class="row mb-2">
            <div class="col-12">
                <label for="">
                    Own Name
                    <span class="text-danger">*</span>
                </label>
                <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                    <option selected disabled>-- Select Own --</option>
                    @foreach ($user as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-xl-6 mb-1">
                <label>
                    Property Name
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                       value="{{ old('name') }}" placeholder="Masukkan nama properti">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-xl-6 mb-1">
                <label>
                    Type
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="type" class="form-control @error('type') is-invalid @enderror"
                    value="{{ old('type') }}" placeholder="Contoh: Rumah, Apartemen, Ruko">
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
                <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3"
                    placeholder="Masukkan alamat lengkap">{{ old('address') }}</textarea>
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
                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                       value="{{ old('price') }}" placeholder="Masukkan harga sewa">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-xl-6 mb-1">
                <label>
                    Rent Type
                    <span class="text-danger">*</span>
                </label>
                <select name="rent_type" class="form-control @error('rent_type') is-invalid @enderror">
                    <option selected disabled>-- Select Type --</option>
                    <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
                </select>
                @error('rent_type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-xl-12 mb-1">
                <label>
                    Status
                    <span class="text-danger">*</span>
                </label>
                <select name="status" class="form-control @error('status') is-invalid @enderror">
                    <option selected disabled>-- Select Status --</option>
                    <option value="available">Available</option>
                    <option value="booked">Booked</option>
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
