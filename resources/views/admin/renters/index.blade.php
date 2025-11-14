@extends('layouts/app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-end">
            <a href="{{ route('rentersCreate') }}" class="btn btn-sm btn-primary">
                <i class="fas fa-plus mr-2"></i>
                Add Data Renters
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Tenant Own</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Unit</th>
                        <th>Tanggal Sewa</th>
                        <th>Tanggal Selesai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($renters as $renter)
                        <tr>
                            <td>{{ $renter->user->name ?? '-' }}</td>
                            <td>{{ $renter->name }}</td>
                            <td>{{ $renter->phone ?? '-' }}</td>
                            <td>{{ $renter->email ?? '-' }}</td>
                            <td>{{ $renter->property->name ?? '-' }}</td>
                            <td>{{ $renter->start_date ? \Carbon\Carbon::parse($renter->start_date)->format('d/m/Y') : '-' }}</td>
                            <td>{{ $renter->end_date ? \Carbon\Carbon::parse($renter->end_date)->format('d/m/Y') : '-' }}</td>
                            <td class="text-center">
                                <a href="{{ route('rentersEdit', $renter->id) }}" class="btn btn-warning btn-sm mb-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted">Belum ada data renter</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection