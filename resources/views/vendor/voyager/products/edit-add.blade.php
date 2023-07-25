@php
    $edit = !is_null($dataTypeContent->getKey());
    $add = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height: 100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_title', __('voyager::generic.' . ($edit ? 'edit' : 'add')) . ' ' . $dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.' . ($edit ? 'edit' : 'add')) . ' ' . $dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="@if ($edit) {{ route('voyager.products.update', $dataTypeContent->id) }}@else{{ route('voyager.products.store') }} @endif" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            @if ($edit)
                {{ method_field('PUT') }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <!-- ### TITLE ### -->
                    <div class="panel">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="voyager-character"></i> عنوان
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="text" class="form-control" id="title" name="name" placeholder="عنوان" value="{{ $dataTypeContent->name ?? '' }}">
                        </div>
                    </div>

                    <!-- ### CONTENT ### -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">محتوای محصول</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                            </div>
                        </div>

                        <div class="panel-body">

                            @php
                                $dataTypeRows = $dataType->{$edit ? 'editRows' : 'addRows'};
                                $row = $dataTypeRows->where('field', 'description')->first();
                            @endphp
                            {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                        </div>
                    </div><!-- .panel -->

                    <!-- ### EXCERPT ### -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">شرح مختصر</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <textarea class="form-control" name="summary">{{ $dataTypeContent->summary ?? '' }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- ### DETAILS ### -->
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-clipboard"></i> جزئیات</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="status">وضعیت</label>
                                <select class="form-control" name="status">
                                    <option value="DRAFT"@if (isset($dataTypeContent->status) && $dataTypeContent->status == 'DRAFT') selected="selected" @endif>پیش نویس</option>
                                    <option value="PENDING"@if (isset($dataTypeContent->status) && $dataTypeContent->status == 'PENDING') selected="selected" @endif>در حال تکمیل</option>
                                    <option value="PUBLISHED"@if (isset($dataTypeContent->status) && $dataTypeContent->status == 'PUBLISHED') selected="selected" @endif>انتشار محصول</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="slug">موجودی در انبار</label>
                                <input type="number" class="form-control" name="stock" value="{{ $dataTypeContent->stock ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">حداقل تعداد فروش</label>
                                <input type="number" class="form-control" name="min_order" value="{{ $dataTypeContent->min_order ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">حداکثر تعداد فروش</label>
                                <input type="number" class="form-control" name="max_order" value="{{ $dataTypeContent->max_order ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">اسلاگ</label>
                                <input type="text" class="form-control" id="slug" disabled placeholder="این بخش به صورت خودکار تکمیل می شود" {!! isFieldSlugAutoGenerator($dataType, $dataTypeContent, 'slug') !!} value="{{ $dataTypeContent->slug ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">قیمت اصلی</label>
                                <input type="number" class="form-control" name="price" value="{{ $dataTypeContent->price ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">قیمت با تخفیف</label>
                                <input type="number" class="form-control" name="offPrice" value="{{ $dataTypeContent->offPrice ?? '' }}">
                            </div>

                        </div>
                    </div>

                    <!-- ### IMAGE ### -->
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> تصویر اصلی</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if (isset($dataTypeContent->pic))
                                <img src="{{ filter_var($dataTypeContent->pic, FILTER_VALIDATE_URL) ? $dataTypeContent->pic : Voyager::image($dataTypeContent->pic) }}" style="width:100%" />
                            @endif
                            <input type="file" name="pic">
                        </div>
                    </div>

                    <!-- ### IMAGES ### -->
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> تصاویر گالری</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="custom_id">

                                <input type="file" name="pics[]" multiple>

                                @if (isset($dataTypeContent->pics))
                                    <div class="form-group">
                                        @foreach (json_decode($dataTypeContent->pics) as $image)
                                            <div class="img_settings_container" data-field-name="pics" style="padding:5px;">
                                                <a href="#" class="voyager-x remove-multi-image" style="position: absolute;font-size: 40px"></a>
                                                <img src="{{ Voyager::image($image) }}" data-file-name="{{ $image }}" data-id="{{ $dataTypeContent->id }}" style="width:100%; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:5px;">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- ### SEO CONTENT ### -->
                    <div class="panel panel-bordered panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-search"></i> محتوای سئو </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="seo_title">{{ __('voyager::post.seo_title') }}</label>
                                <input type="text" class="form-control" name="seo_title" placeholder="SEO Title" value="{{ $dataTypeContent->seo_title ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_description">{{ __('voyager::post.meta_description') }}</label>
                                <textarea class="form-control" name="meta_description">{{ $dataTypeContent->meta_description ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">{{ __('voyager::post.meta_keywords') }}</label>
                                <textarea class="form-control" name="meta_keywords">{{ $dataTypeContent->meta_keywords ?? '' }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        @section('submit-buttons')
            <button type="submit" class="btn btn-primary pull-right">
                @if ($edit)
                    به روز رسانی محصول
                @else
                    <i class="icon wb-plus-circle"></i> ایجاد محصول جدید
                @endif
            </button>
        @stop
        @yield('submit-buttons')
    </form>

    <div style="display:none">
        <input type="hidden" id="upload_url" value="{{ route('voyager.upload') }}">
        <input type="hidden" id="upload_type_slug" value="{{ $dataType->slug }}">
    </div>
</div>

<div class="modal fade modal-danger" id="confirm_delete_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
            </div>

            <div class="modal-body">
                <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                <button type="button" class="btn btn-danger" id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete File Modal -->
@stop

@section('javascript')
<script>
    var params = {};
    var $file;

    function deleteHandler(tag, isMulti) {
        return function() {
            $file = $(this).siblings(tag);

            params = {
                slug: '{{ $dataType->slug }}',
                filename: $file.data('file-name'),
                id: $file.data('id'),
                field: $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
        };
    }

    $('document').ready(function() {
        $('#slug').slugify();

        $('.toggleswitch').bootstrapToggle();

        //Init datepicker for date fields if data-datepicker attribute defined
        //or if browser does not handle date inputs
        $('.form-group input[type=date]').each(function(idx, elt) {
            if (elt.type != 'date' || elt.hasAttribute('data-datepicker')) {
                elt.type = 'text';
                $(elt).datetimepicker($(elt).data('datepicker'));
            }
        });

        @if ($isModelTranslatable)
            $('.side-body').multilingual({
                "editing": true
            });
        @endif

        $('.side-body input[data-slug-origin]').each(function(i, el) {
            $(el).slugify();
        });

        $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
        $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
        $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
        $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

        $('#confirm_delete').on('click', function() {
            $.post('{{ route('voyager.' . $dataType->slug . '.media.remove') }}', params, function(response) {
                if (response &&
                    response.data &&
                    response.data.status &&
                    response.data.status == 200) {

                    toastr.success(response.data.message);
                    $file.parent().fadeOut(300, function() {
                        $(this).remove();
                    })
                } else {
                    toastr.error("Error removing file.");
                }
            });

            $('#confirm_delete_modal').modal('hide');
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@stop
