@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Maskapai</h2>
        <a href="{{ route('airlines.create') }}" class="btn btn-primary">
            + Tambah Airline
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Kode</th>
                        <th>Nama Maskapai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($airlines as $a)
                        <tr>
                            <td>{{ $a->code }}</td>
                            <td>{{ $a->name }}</td>
                            <td>
                                <a href="{{ route('airlines.edit', $a->id) }}"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('airlines.destroy', $a->id) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Data airline belum ada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
