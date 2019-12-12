@extends('layouts.back')

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('testimonials.index') }}">Testimonials</a>
@endsection

@section('content')
        
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::open(['method' => 'post', 'route' => 'testimonials.store', 'files' => true]) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', null, ['class' => 'form-control', 'required']) }}
                        </div>
 
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => '10', 'cols' => '80', 'required' ]) }}
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-fill">Save</button>
                        </div>
                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- @section('scripts')
    <script src="{{ asset('public/js/back/plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor' );

        if($('#slug').length) {
            $('#title').keyup(function() {
                title = $(this).val();
                
                base = $('base').attr('href');

                $.get(base+'/get-slug/'+title).done(function(response) {
                    $('#slug').val(response.slug);
                });
            });
        }
    </script>
@endsection --}}