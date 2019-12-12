@extends('layouts.back')

@section('styles')
    <link href="{{ asset('public/css/back/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('public/css/back/dataTables.bootstrap.min.css') }}" rel="stylesheet"/>
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('testimonials.index') }}"><i class="pe-7s-comment"></i>Testimonials</a>
    <a href="{{ route('testimonials.create') }}" class="navbar-brand"><i class="pe-7s-plus"></i>Add Testimonial</a>
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table id="test" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($testimonials as $testimonial)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$testimonial->name}}</td>
                                <td>{{$testimonial->title}}</td>
                                <td>{{$testimonial->description}}</td>
                                <td>{{ date('Y M d (l)',strtotime($testimonial->created_at)) }}</td>
                                <td>{{date('Y M d (l)',strtotime($testimonial->updated_at))}}</td>
                                <td>
                                    <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-info btn-fill btn-sm">Edit</a>

                                    {{ Form::open(['method' => 'delete', 'route' => ['testimonials.destroy', $testimonial->id]]) }}
                                    <button class="btn btn-danger btn-sm delete" type="submit">Delete</button>
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="{{ asset('public/js/back/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/js/back/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('#test').DataTable();
        } );


    </script>
@endsection
