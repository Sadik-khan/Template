@permitTo('DeleteRole,UpdateRole')
    <a href="" class="btn btn-sm btn-secondary mr-3"
        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $model->id }}').submit();">Delete</a>
<form id="delete-form-{{ $model->id }}" action="{{ route('admin.role.delete',$model->id) }}" method="POST"
    style="display: none;">
    @csrf @method('delete')
</form>
@endpermitTo

@permitTo('UpdateRole')
<a href="{{ route('admin.role.edit',$model->id) }}" class="btn btn-sm btn-primary mr-3">Edit</a>
@endpermitTo

{{-- <div class="tool-box">
    <div data-toolbar="user-options" class="btn-toolbar btn-success btn-toolbar-success" id="success-toolbar"><i
            class="fa fa-cog"></i></div>
</div>
<div id="toolbar-options" class="hidden">
    <a href="#"><i class="fa fa-plane"></i></a>
    <a href="#"><i class="fa fa-car"></i></a>
    <a href="#"><i class="fa fa-bicycle"></i></a>
</div> --}}