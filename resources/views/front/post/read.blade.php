@extends('layouts.master')
@section('title', $data->seo_title)
@section('description', $data->meta_description)
@section('keywords', $data->meta_keywords)

@section('content')
    <section class="read my-5">
        {{-- title --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <h2 class="title">{{ $data->title }}</h2>
                </div>
            </div>
        </div>
        {{-- image --}}
        <div class="container-fluid" data-aos="fade-up" data-aos-duration="2000">
            <div class="row">
                <div class="col-12 p-0">
                    <img src="{{ asset('storage/' . $data->image) }}" />
                </div>
            </div>
        </div>
        {{-- body --}}
        <div class="container">
            <div class="row">
                <div class="col-12 p-0 " data-aos="fade-up" data-aos-duration="2000">
                    <p class="excerpt"> {{ $data->excerpt }}</p>
                </div>
                <div class="col-12 p-0 " data-aos="fade-up" data-aos-duration="2000">
                    <p class="body"> {!! $data->body !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/front/read.css') }}">
@endsection
