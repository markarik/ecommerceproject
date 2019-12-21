@extends('admin.layout.main')

@section('content')

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-2">
                @include('admin.Dashboard.parts.sidebar')

            </div>
            <div class="col-sm-10">
                @include('admin.Dashboard.parts.topbar')



            </div>
        </div>
    </div>



@endsection