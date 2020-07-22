@if ($errors->any())
<div class="alert alert-custom alert-notice alert-light-primary fade show mb-5" role="alert">
    <div class="alert-icon">
        <i class="flaticon-warning"></i>
    </div>
    <div class="alert-text">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    <div class="alert-close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                <i class="ki ki-close"></i>
            </span>
        </button>
    </div>
</div>
@endif