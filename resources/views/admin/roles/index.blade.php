@extends('admin.layouts.app', ['title' => 'Roles', 'modal' => 'lg'])

{{-- Header Option --}}
@section('page.header')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Role Management</h4>
                        <span>This Page is used for Role Management. You can Create, Update, Delete Role from here.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Role</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Role Management
                    @permitTo('CreateRole')
                        {{-- <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-outline-success">New Role</a> --}}
                        <button id="content_managment" data-url ="{{ route('admin.role.create') }}" class="btn btn-out-dotted btn-primary btn-square"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                            New</button>
                    @endpermitTo
                </h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="feather icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-trash-2 close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered content_managment_table" data-url="{{ route('admin.role.datatable') }}">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Admin</th>
                                <th>Permission</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
    
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@stop

@push('admin.scripts')
    <script type="text/javascript" src="{{asset('assets/backend/admin/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/backend/admin/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/backend/admin/js/buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/admin/js/responsive.min.js') }}"></script>
    <script src="{{ asset('js/pages/role.js') }}"></script>
@endpush