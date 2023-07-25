@extends('layouts.master')

@section('content')
    <section class="browse container my-5">
        <h2 class="main-title">لیست نوشته ها </h2>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-12  col-sm-6 col-md-4 col-lg-3">
                    <div class="card mt-4">
                        <img class="card-img-top" src="{{ asset('storage/' . $item->image) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title title">{{ Str::limit($item->title, 30, ' ...') }}</h5>
                            <p class="card-text body">{{ Str::limit($item->excerpt, 170, ' . . .') }}</p>
                            <a href="/post/{{ $item->slug }}" class="btn btn-primary">ادامه مطلب</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/front/browse.css') }}">
@endsection
