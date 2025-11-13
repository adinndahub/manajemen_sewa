@extends('layouts/app') 

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{ $title }}
    </h1>
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-end">
            <a href="{{ route('propertyCreate') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Add Data Property
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Pemilik</th>
                        <th>Nama</th>
                        <th>Tipe</th>
                        <th>Alamat</th>
                        <th>Harga</th>
                        <th>Periode</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($property as $item)
                         <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->user ? $item->user->name : '-' }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->address }}</td>
                            <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                            <td>{{ ucfirst($item->rent_type) }}</td>
                            <td class="text-center">
                                <span class="badge badge-danger">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="text-center">
                                <button href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalPropertyShow{{ $item->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="{{ route('propertyEdit', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalPropertyDestroy{{ $item->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                                @include('admin/property/modal')
                            </td>
                         </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
