@extends('layouts.back')

@section('styles')
    <link href="{{ asset('public/css/back/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/back/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('galleries.index') }}"><i class="pe-7s-display1"></i>Galleries</a>
    <a href="{{ route('galleries.create') }}" class="navbar-brand"><i class="pe-7s-plus"></i>New</a>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table id="event" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Image</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($galleries as $gallery)
                            <tr>
                                <td> {{$loop->iteration}}</td>
                                <td>
                                    <img src="{{ asset('public/img/'.$gallery->image) }}" class="img-fluid small" style="max-width:80px">
                                </td>
                                <td>{{ date('Y M d (l)',strtotime($gallery->created_at)) }}</td>
                                <td>{{ date('Y M d (l)',strtotime($gallery->updated_at))}}</td>
                                <td>

                                    {{ Form::open(['method' => 'delete', 'route' => ['galleries.destroy', $gallery->id]]) }}
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
            $('#event').DataTable();
        } );
    </script>
@endsection
