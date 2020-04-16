@extends('admin.layouts.app', ['title' => 'Dahsboard', 'modal' => false])

{{-- Header Option --}}
@section('page.header')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4>Settings</h4>
                    <span>Make All The Configuration From Here</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.home') }}"> <i class="feather icon-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a>Settings</a> </li>
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
                <h5 id="header">General Settings</h5>
                <span id="sub_header">Configure Your General Settings From Here.</span>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="feather icon-maximize full-card"></i></li>
                        <li><i class="feather icon-minus minimize-card"></i></li>
                        <li><i class="feather icon-trash-2 close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="col-md-12">
                    <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link active settings" data-id="General Settings">General Settings</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link settings" data-id="System Settings">System Settings</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link settings" data-id="Mail Settings">Mail Settings</a>
                            <div class="slide"></div>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" class="nav-link settings" data-id="SMS Settings">SMS Settings</a>
                            <div class="slide"></div>
                        </li>
                    </ul>
                    <div class="tab-content tabs-left-content card-block col-md-12" >
                        <div style="position: absolute;top: 25%;left: 50%;z-index:100; display:none;" id="settings_loader">
                            <i class="fa fa-spinner fa-spin fa-5x fa-fw"></i><h3>Loading...</h3>
                        </div>
                        <div id="show_area"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@push('admin.scripts')
    <script>
        $(function() {
            $(document).on('click', '.settings', function() {
                var id = $(this).data('id');
                $('.settings').removeClass('active');
                $(this).addClass('active');
                $('#header').html(id);
                $('#sub_header').html('Configure your '+ id + ' from here.');
                var url = '{{ route("admin.settings.configure") }}';
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {id:id},
                    beforeSend: function() {
                        $('#settings_loader').fadeIn();
                    },
                    success: function (data) {
                        $('#settings_loader').fadeOut();
                        $('#show_area').html(data);
                    }
                });
            });
        });
    </script>
@endpush