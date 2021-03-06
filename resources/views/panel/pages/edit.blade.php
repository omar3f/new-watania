@extends('panel.template')
@section('style')
    <style href="{{ asset('assets/css/btn-file/btn-file.css') }}"></style>
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script>
        tinymce.init({
            selector: '#descriptionArea'
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1>
                Edit {!! $page->title !!}
            </h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::model($page, ['method' => 'put', 'action' => ['Panel\PagesController@update', $page->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('url', null, ["class" => "form-control", "placeholder" => "URL"]) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('content', null, ['id' => 'descriptionArea', "class" => "form-control", "placeholder" => "Description"]) !!}
            </div>
            <div class="form-group">
                Upload Image{!! Form::file('image') !!}
            </div>

            <div class="form-group">
                {!! Form::select('parent_id', $dropdown_pages, null,["class" => "form-control", "placeholder" => "Parent page"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit Page', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @include('panel.includes.validation_errors')
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/btn-file/btn-file.js') }}">  </script>
@endsection