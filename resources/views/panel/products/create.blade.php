@extends('panel.template')
@section('style')
    <style href="{{ asset('assets/css/btn-file/btn-file.css') }}"></style>
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script>
        tinymce.init({
            selector: '#descriptionArea',
            plugins: 'link'
        });
    </script>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1>
                Create a new product
            </h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::open(['method' => 'post', 'action' => 'Panel\ProductsController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('description', null, ['id' => 'descriptionArea', "class" => "form-control", "placeholder" => "Description"]) !!}
            </div>
            <div class="form-group">
                Upload Image

                {!! Form::file('image') !!}
            </div>
            <div class="form-group">
                Upload Sub-Image

                {!! Form::file('sub-image') !!}
            </div>



            <div class="form-group">
                {!! Form::select('section_id', $dropdown_sections, null,["class" => "form-control", "placeholder" => "Section"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create new product', ['class' => 'btn btn-primary']) !!}
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