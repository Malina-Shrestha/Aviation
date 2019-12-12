@extends('layouts.back')

@section('styles')
    <link href="{{ asset('public/css/back/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/css/back/dataTables.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('pageTitle')
    <a class="navbar-brand" href="{{ route('contactqueries.index') }}"><i class="pe-7s-comment"></i>Contact Queries</a>
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table id="contact" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>followed</th>
                            <th>Followed By</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contactqueries as $contactquery)
                            <tr>
                                <td @if($contactquery->followed) style="border-left:5px solid green" @endif>{{$loop->iteration}}</td>
                                <td>{{$contactquery->name}}</td>
                                <td>{{$contactquery->email}}</td>
                                <td>{{$contactquery->subject}}</td>
                                <td>{{$contactquery->message}}</td>
                                <td>@if($contactquery->followed)True @else False @endif</td>
                                <td>{{$contactquery->followed_by}}</td>
                                <td>{{ date('Y M d (l)',strtotime($contactquery->created_at)) }}</td>
                                <td>{{date('Y M d (l)',strtotime($contactquery->updated_at))}}</td>
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
            $('#contact').DataTable();
        } );


    </script>
@endsection
