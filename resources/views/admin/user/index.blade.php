@extends('layouts/app') 

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{ $title }}
    </h1>

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-end">
            <a href="{{ route('userCreate') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Add Data Tenant
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Active Until</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach ($user as $item)
                         <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="text-center">
                                @if ($item->role == 'Super Admin')
                                    <span class="badge badge-success">
                                        {{ $item->role }}
                                    </span>
                                @else
                                    <span class="badge badge-info">
                                        {{ $item->role }}
                                    </span>
                                @endif                                
                            </td>
                            <td>{{ $item->active_until }}</td>
                            <td class="text-center">
                                <a href="{{ route('userEdit', $item->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{ $item->id }}">
                                    <i class="fas fa-trash"></i>
                                </button>
                                @include('admin/user/modal')
                            </td>
                         </tr>
                     @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
