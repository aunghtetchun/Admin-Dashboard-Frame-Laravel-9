
<div class="card card-secondary">
    <div class="card-header d-flex flex-nowrap justify-content-between">
        <div class="m-0">
            <h4>{{ $title }}</h4>
        </div>
        <div class="card-header-action">
            {{ $button }}
            <a href="#" onclick="(function(e){e.preventDefault();})(event)" class="btn btn-primary btn-maximize" title="Maximize"><i class="fas fa-expand-alt fa-fw"></i></a>
{{--            <a href="#" class="btn btn-danger">Delete All</a>--}}
        </div>
    </div>
    <div class="card-body">
        {{ $body }}
    </div>
</div>
