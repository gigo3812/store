    @switch($content)
        @case(1)
            <span class="badge badge-info">اسلایدر صفحه اصلی</span>
        @break

        @case(2)
            <span class="badge badge-danger">پست و نوشته</span>
        @break
        
        @default
        <span class="badge badge-dark">متفرقه  </span>
    @endswitch
