@extends('layout.main')

@section('content')
    {{-- <div class="row"> --}}
        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h3>Event</h3>
                <a href="/form-add-event" class="btn btn-outline-dark">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            <table id="event" class="table display">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Room</th>
                        <th scope="col">Date Start</th>
                        <th scope="col">Date End</th>
                        <th scope="col">Time Start</th>
                        <th scope="col">Time End</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1
                    @endphp
                    @foreach ($event as $e)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->room }}</td>
                        <td>{{ $e->startdate }}</td>
                        <td>{{ $e->enddate }}</td>
                        <td>{{ \Carbon\Carbon::parse($e->timestart)->format('H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($e->timeend)->format('H:i') }}</td>
                        <td>
                            <a href="#" class="btn btn-icon btn-flat-secondary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-flat-secondary">
                                <i class="fa fa-eye"></i>
                            </a>
                            <form method="POST" action="{{ route('delete.event', $e->id) }}"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-icon btn-danger"
                                    onclick="return confirm('Do you want to delete this Event (Name: {{ $e->name }})?');">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            <div class="d-flex justify-content-between">
                <h3>Banner</h3>
                <a href="/form-add-banner" class="btn btn-outline-dark">
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
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($banner as $b)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td><img src="{{ asset("upload/banner/$b->id/".$b->url) }}" class="img-thumbnail" style="width:100px"/></td>
                        <td>
                            <form method="POST" action="{{ route('delete.banner', $b->id) }}"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-icon btn-danger"
                                    onclick="return confirm('Do you want to delete this Banner?');">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
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
