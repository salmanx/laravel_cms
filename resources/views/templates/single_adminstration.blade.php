<div class="sixteen columns" id="left-content">
    <div id="printable_area">
        <h3>{{ $admin->position }}</h3>
        <img alt="{{ $admin->position }}" height="" src="/upload/adminstrations/{{$admin->image}}" width="200">
        <p>
        <span style="font-size:16px">
            <span style="font-size:14px">{{ $admin->status }}<br>
                {{ $admin->name }}<br>
            </span>
        </span>
        </p> 
        <p>{!! $admin->body !!}</p>
    </div>
</div>
