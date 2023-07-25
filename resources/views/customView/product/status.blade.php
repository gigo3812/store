    @switch($content)
        @case('DRAFT')
            <span class="badge badge-warning">پیش نویس</span>
        @break

        @case('PUBLISHED')
            <span class="badge badge-success">انتشار</span>
        @break

        @case('PENDING')
        <span class="badge badge-info">در انتظار بازبینی</span>
        @break

        @default
            <span class="">{{ $content }}</span>
    @endswitch
