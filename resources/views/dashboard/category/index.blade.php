@extends('dashboard.layouts.master')

@section('title')
    Categories
@endsection

@section('css')
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>

        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i>
            New Category
        </a>
    </div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Categories List
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($models as $model)
                                <tr>
                                    <td>{{ $model->name }}</td>
                                    <td>
                                        <img src="{{ $model->photo }}" />
                                    </td>
                                    <td>
                                        <i class="fas fa-{{ $model->icon }}"></i>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-warning">
                                            Edit
                                        </a>

                                        <a href="" class="btn btn-danger">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $models->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
