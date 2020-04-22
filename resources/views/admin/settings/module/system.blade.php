<form action="{{ route('admin.settings.change_settings') }}" method="POST" id="content_form">
    @csrf
    <div class="row">
        {{-- Log Report --}}
        <div class="col-md-4">
            <label for="log_report">{{ __('Log Report') }}</label>
            <select name="log_report" id="log_report" class="form-control select">
                <option {{get_option('log_report') == 'off' ? 'selected' : ''}} value="off">{{ __('Off') }}</option>
                <option {{get_option('log_report') == 'on' ? 'selected' : ''}} value="on">{{ __('On') }}</option>
            </select>
        </div>

        {{-- Default Log Delete --}}
        <div class="col-md-4 form-group">
            <label for="log_delete_date">{{ __('Default Log Delete Date') }}</label>
            <select name="log_delete_date" id="log_delete_date" class="form-control select">
                <option {{get_option('log_delete_date') == '1' ? 'selected' : ''}} value="1">{{ __('1 Day Before') }}</option>
                <option {{get_option('log_delete_date') == '7' ? 'selected' : ''}} value="7">{{ __('7 Day Before') }}</option>
                <option {{get_option('log_delete_date') == '15' ? 'selected' : ''}} value="15">{{ __('15 Day Before') }}</option>
                <option {{get_option('log_delete_date') == '30' ? 'selected' : ''}} value="30">{{ __('30 Day Before') }}</option>
                <option {{get_option('log_delete_date') == '90' ? 'selected' : ''}} value="90">{{ __('90 Day Before') }}</option>
                <option {{get_option('log_delete_date') == '180' ? 'selected' : ''}} value="180">{{ __('180 Day Before') }}</option>
                <option {{get_option('log_delete_date') == '365' ? 'selected' : ''}} value="365">{{ __('365 Day Before') }}</option>
            </select>
        </div>

        {{-- Log For Event --}}
        <div class="col-md-4 form-group">
            <label for="log_event">{{ __('Event For Log')}}</label>
            <select name="log_event[]" id="log_event" class="form-control select" multiple> 
                @php
                    $string = get_option('log_event');
                    $ex = explode(',', $string);
                 @endphp
                <option {{ in_array('created', $ex) ? 'selected' : ''}} value="created">{{ __('Create') }}</option>
                <option {{ in_array('updated', $ex) ? 'selected' : ''}} value="updated">{{ __('Update') }}</option>
                <option {{ in_array('deleted', $ex) ? 'selected' : ''}} value="deleted">{{ __('Delete') }}</option>
            </select>
        </div>

        {{-- Navbar Position --}}
        <div class="col-md-6 form-group">
            <label for="navbar_position">{{ __('Navbar Position') }}</label>
            <select name="navbar_position" id="navbar_position" class="form-control select">
                <option {{get_option('navbar_position') == 'top' ? 'selected' : ''}} value="top">{{ __('Top') }}</option>
                <option {{get_option('navbar_position') == 'bottom' ? 'selected' : ''}} value="bottom">{{ __('Bottom') }}</option>
            </select>
        </div>

        {{-- IP Filter --}}
        <div class="col-md-6 form-group">
            <label for="ip_filter">{{ __('IP Filter') }}</label>
            <select data-url="{{ route('admin.settings.open_ip_filter') }}" name="ip_filter" id="ip_filter" class="form-control select">
                <option {{get_option('ip_filter') == 'on' ? 'selected' : '' }} value="on">{{ __('On') }}</option>
                <option {{get_option('ip_filter') == 'off' ? 'selected' : '' }} value="off">{{ __('Off') }}</option>
            </select>
        </div>

        <div class="col-md-12 my-2 ip_filter"></div>
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20" name="submit" id="submit">{{ __("Save") }}</button>
        <button style="display:none;" type="button" name="submiting" id="submiting" disabled class="mt-5 btn btn-out btn-primary btn-square"><i class="fa fa-spinner fa-spin fa-1x fa-fw"></i>{{__('Loading')}}...</button>
    </div>
</form>

<script>
    _componentSelect2Normal();
    _componentDatePicker();
    _formValidation();

    $(function() {
        $('#ip_filter').change(function() {
            var val = $(this).val();
            var url = $(this).data('url');
            if(val == 'on') {
                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function (data) {
                        $('.ip_filter').html(data);
                    }
                });
            } else {
                $('.ip_filter').html('');
            }
        });
    });
</script>