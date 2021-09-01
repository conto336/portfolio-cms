@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ __('Whoops! Something went wrong.') }}
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="list-group-item list-group-item-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
