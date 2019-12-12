@extends('layouts.back')

@section('pageTitle')
    <a class="navbar-brand" href="#">Edit Testimonials</a>
@endsection

@section('content')
        
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::model($testimonial, ['method' => 'patch', 'route' => ['testimonials.update', $testimonial->id]]) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
                        </div>

                        {{-- <div class="form-group">
                            {{ Form::label('slug', 'Slug') }}
                            {{ Form::text('slug', null, ['class' => 'form-control', 'required']) }}
                        </div> --}}
                        
                        <div class="form-group">
                            {{ Form::label('title', 'Title') }}
                            {{ Form::text('title', null, ['class' => 'form-control', 'required']) }}
                        </div>

                        <div class="form-group">
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('description', null, ['class' => 'form-control', 'id' => 'editor', 'rows' => '10', 'cols' => '80', 'required']) }}
                                
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-fill btn-sm">Save</button>
                        </div>
                    {{ Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection
