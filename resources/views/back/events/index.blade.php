@extends('layouts.back')

@section('styles')
    <link href="{{ asset('public/css/back/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/back/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('events.index') }}"><i class="pe-7s-display1"></i>Events</a>
    <a href="{{ route('events.create') }}" class="navbar-brand"><i class="pe-7s-plus"></i>New Events</a>
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
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td> {{$loop->iteration}}</td>
                                <td>
                                    <img src="{{ asset('public/img/'.$event->thumbnail) }}" class="img-fluid small" style="max-width:80px">
                                </td>
                                <td>{{$event->title}}</td>
                                <td>{!! $event->description !!}</td>
                                <td>{{ date('Y M d (l)',strtotime($event->created_at)) }}</td>
                                <td>{{ date('Y M d (l)',strtotime($event->updated_at))}}</td>
                                <td>
                                    <a href="{{ route('events.edit', $event->slug) }}" class="btn btn-info btn-fill btn-sm">
                                        Edit</a>
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
