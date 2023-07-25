    @switch($content)
        @case('pending')
            <span class="badge badge-warning">در حال تکمیل</span>
        @break

        @case('paid')
            <span class="badge badge-success">تکمیل پرداخت </span>
        @break

        @case('posted')
            <span class="badge badge-info">تحویل به مامور پست</span>
        @break

        @case('delivered')
            <span class="badge badge-light">تحویل به مشتری </span>
        @break

        @case('canceled')
            <span class="badge badge-danger">انصراف از خرید</span>
        @break

        @default
            <span class="">{{ $content }}</span>
    @endswitch
