@extends('layout.main')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('create.banner') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 mb-1">
                    <div class="col-md-12 mb-1">
                        <label for="myDropzone" class="form-label">
                            <h4>Image</h4>
                        </label>
                        <input type="file" class="form-control"  name="image" accept=".jpeg, .png, .jpg">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-md-6">
                        <label class="form-label" for="event-date">Event Date Start</label>
                        <div class="input-group input-group-merge">
                            <input type="date" id="event-date" name="startdate"
                                class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="event-date-end">Event Date End</label>
                        <div class="input-group input-group-merge">
                            <input type="date" id="event-date-end" name="enddate"
                                class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" required/>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">

    flatpickr("#event-date", {
        minDate: "today",
        dateFormat: "Y-m-d"
    });
    flatpickr("#event-date-end", {
        minDate: "today",
        dateFormat: "Y-m-d"
    });
</script>
@endsection

