@extends('layouts.back')

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('galleries.index') }}">Events</a>
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    {{ Form::open(['method' => 'post', 'route' => 'galleries.store', 'files' => true]) }}

                    <div class="form-group">
                        {{ Form::label('image', 'Image') }}
                        {{ Form::file('image', null, ['class' => 'form-control-file', 'required', $errors->has('image') ? ' is-invalid' : '']) }}
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('image') }}</strong>
								</span>
                        @endif
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

