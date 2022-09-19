@extends('admin.layouts.admin_home')

@section('content')
    <div class="container-fluid">
        <div class="content d-flex justify-content-center">
            <div class="card">
                <table class="table text-center">
                    <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($jiangdao as $data)
                            <tr  class="align-middle">
                                <td class="img-32 p-0">
                                    <img src="{{ asset('pengisi/' . $data->photos . '.png') }}">
                                </td>
                                <td class="ps-3" style="text-align: left">
                                    <span >
                                        {{ $data->name }}
                                    </span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-warning">
                                        <i class="fas fa-pencil"> </i>
                                        Ubah
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        </div>
@endsection

<style>
    .img-32 {
        min-width: 48px;
        max-width: 48px;
    }

    img {
        width: 100%;
        height: 100%;
    }
</style>
