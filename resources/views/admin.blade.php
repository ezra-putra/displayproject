@extends('layout.main')

@section('content')
    {{-- <div class="row"> --}}
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h3>Event</h3>
                <a href="#" class="btn btn-dark">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <table id="event" class="table display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Room</th>
                        <th scope="col">Floor</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time Start</th>
                        <th scope="col">Time End</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h3>Banner</h3>
                <a href="#" class="btn btn-dark">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <table id="banner" class="table display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    {{-- </div> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

    <script>
        $('#event').DataTable();
        $('#banner').DataTable();
    </script>
@endsection
