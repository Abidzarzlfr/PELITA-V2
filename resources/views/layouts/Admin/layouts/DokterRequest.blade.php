@extends('layouts.Admin.includes.Main')

@section('dokterRequest')
<!-- Widget -->
<div class="row g-3 my-2">
    <div class="col-md-3">
        <div class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2 text-white">{{ \App\Models\User::where('role', 'dokter')->count() }}</h3>
                <p class="fs-5 text-white">Dokter</p>
            </div>
            <i class="fas fa-hand-holding-usd fs-1 text-white border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded">
            <div>
                <h3 class="fs-2">{{ \App\Models\User::where('dokter_request_status', 'requested')->count() }}</h3>
                <p class="fs-5">Daftar Dokter</p>
            </div>
            <i class="fas fa-chart-line fs-1 border rounded-full secondary-bg p-3"></i>
        </div>
    </div>
</div>

<div class="row my-5">
    <!-- Dokter Request Table -->
    <h3 class="fs-4 mb-3 text-primary">Dokter Requested Table</h3>
    <div class="col">
        <table class="table table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col" width="50">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Dokter Request</th>
                    <th scope="col">Dokter NIK</th>
                    <th scope="col">Dokter NIP</th>
                    <th scope="col">Dokter Detail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counter = 0;
                @endphp
                @foreach($users as $user)
                @if($user->dokter_request_status == 'requested')
                <tr class="table-warning">
                    <th scope="row">{{ ++$counter }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->dokter_request_status }}</td>
                    <td>{{ $user->dokter_nik }}</td>
                    <td>{{ $user->dokter_nip }}</td>
                    <td>{{ $user->dokter_detail }}</td>
                    <td>
                        <form method="POST" action="{{ route('adminDokterRequest', ['id' => $user->id]) }}">
                            @csrf
                            <button type="submit" class="btn btn-success mt-1"><i class="fas fa-check"></i></button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Dokter Approved Table -->
    <h3 class="fs-4 mb-3 text-primary mt-2">Dokter Approved Table</h3>
    <div class="col">
        <table class="table table-bordered rounded shadow-sm table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col" width="50">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Dokter Request</th>
                    <th scope="col">Dokter NIK</th>
                    <th scope="col">Dokter NIP</th>
                    <th scope="col">Dokter Detail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $counter = 0;
                @endphp
                @foreach($users as $user)
                @if($user->dokter_request_status == 'approved')
                <tr class="table-success">
                    <th scope="row">{{ ++$counter }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->dokter_request_status }}</td>
                    <td>{{ $user->dokter_nik }}</td>
                    <td>{{ $user->dokter_nip }}</td>
                    <td>{{ $user->dokter_detail }}</td>
                    <td>
                        <button type="button" class="btn btn-danger mt-1"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection