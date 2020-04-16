<form action="{{ route('admin.role.store') }}" method="post" id="">
    @csrf
    <div class="form-group">
        <label for="role">Role Name</label>
        <input type="text" placeholder="Give an awesome name for role" name="name"
            class="form-control" id="role" required>
    </div>
    <div class="form-group">
        <label for="role">Assign Permissions</label>
        <div class="container">
            <table class="table table-bordered">
                @foreach ($permissions as $key => $value)
                    <tr>
                        <td rowspan ="{{count($value)+1}}">{!! $key !!}</td>
                        <td rowspan="{{count($value)+1}}">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="single select_all" id="select_all_{{$key}}" data-id="{{$key}}">
                                <label class="custom-control-label" for="select_all_{{$key}}">select_all</label>
                            </div>
                        </td>
                    </tr>
                    @foreach ($value as $per)
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="sing {{$key}}"  id="{{$per->name}}" multiple="multiple" name="permissions[]" value="{{$per->name}}"/>
                                    <label class="custom-control-label" for="{{$per->name}}">{{($per->name)}}</label>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
    <button type="submit" id="submit" class="btn btn-primary btn-sm">Store</button>
    <button type="button" id="submiting" class="btn btn-sm btn-info" id="submiting" style="display: none;">
        <i class="fa fa-spinner fa-spin fa-fw"></i>Loading...</button>

    <button type="button" class="btn btn-sm btn-danger float-right" data-dismiss="modal">Close</button>
</form>

<script>
$(document).ready(function() {
    handleSwitcheryElements();
});


function initSwitchery2($class, $color, $speed, $size, $secondarycolor) {
    var elems = Array.prototype.slice.call(document.querySelectorAll($class));
    
    elems.forEach(function(el) {
        if ($(el).data('switchery') != true) {
                    
            new Switchery(el,  { color: $color, speed: $speed, size: $size, secondaryColor: $secondarycolor });
            el.onchange = function(e) {
                var id =$(this).data('id');
                if ($(this).is(':checked')) {
                    $("."+id).attr("checked", '1' );
                    $("."+id).trigger("change");
                    // $("."+$(this).data("id-target")).removeClass("btn-danger").addClass("btn-success");
                } else {
                    $("#"+$(this).data("id-target")).html("Masquer");
                    $("#"+$(this).data("id-target")).removeClass("btn-success").addClass("btn-danger");
                }
            }
                   
         }
    });
}

function initSwitchery3($class, $color, $speed, $size, $secondarycolor) {
    var elems = Array.prototype.slice.call(document.querySelectorAll($class));
    
    elems.forEach(function(el) {
        if ($(el).data('switchery') != true) {
                    
            new Switchery(el,  { color: $color, speed: $speed, size: $size, secondaryColor: $secondarycolor });
         }
    });
}


handleSwitcheryElements = function() {
    initSwitchery2('.single', '#00ACAC', '0.3s', 'small', '#fff');
    initSwitchery3('.sing', '#00ACAC', '0.3s', 'small', '#fff');
};

</script>