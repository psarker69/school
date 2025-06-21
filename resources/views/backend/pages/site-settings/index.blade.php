@extends('backend.layout.master')

@section('title')
    Profile
@endsection


@section('main_contents')

<main class="app-content">
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">
                    <div class="row">
                        <div class="col-md-6 col-6">Information</div>
                        <div class="col-md-6 col-6 text-right text-info" title="Edit" data-toggle="modal" data-target="#editData"><i class="fa fa-edit"></i></div>
                    </div>
                </h3>
                <div class="tile-body">
                    <table class="table" width="100%">
                        <tr>
                            <td width="30%">Name</td>
                            <td width="70%">{{ $site->name }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Establish</td>
                            <td width="70%">{{ $site->establish }}</td>
                        </tr>
                        <tr>
                            <td width="30%">EIIN</td>
                            <td width="70%">{{ $site->eiin }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Code</td>
                            <td width="70%">{{ $site->code }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Address</td>
                            <td width="70%">{{ $site->address }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Mobile</td>
                            <td width="70%">{{ $site->mobile }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Phone</td>
                            <td width="70%">{{ $site->phone }}</td>
                        </tr>
                        <tr>
                            <td width="30%">Email</td>
                            <td width="70%">{{ $site->email }}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</main>


@include('backend.layout.inc.modal')


@push('fro')

@endpush

@endsection
