<a href="{{ route('show', $show) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div>
        {{ $show->name }}
        <div class="small">
            @include('shows._genres', ['show' => $show])
        </div>
    </div>
</a>
