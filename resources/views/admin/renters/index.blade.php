@extends('layouts/app') 

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        {{ $title }}
    </h1>

<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-sm btn-primary">
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
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Brayn</td>
                        <td>081xxxx</td>
                        <td>@gmail.com</td>
                        <td>2</td>
                        <td>5/8/2025</td>
                        <td>6/8/2025</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-warning btn-sm mb-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm mb-1">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
