@extends('layout.main')

@section('content')
<div class="col-md-12">
    <h3>Add New Event</h3>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('update.event', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label class="form-label" for="input-event">Event Name</label>
                    <div class="col-md-12 mb-1">
                        <input type="text" class="form-control" id="input-event"
                            placeholder="Event Name" name="name"/>
                    </div>
                </div>
                <div class="col-md-12 mb-1">
                    <label class="form-label" for="select-room">Room</label>
                    <select class="select2 form-select" id="select-room" name="room">
                        <option value="">--Choose Room--</option>
                        <option value="2M-LITTLE EAGLE">2M-Little Eagle</option>
                        <option value="2M-MULTIFUNCTION ROOM">2M-Multifunction Room</option>
                        <option value="2M-MAIN HALL">2M-Main Hall</option>
                        <option value="3-MEETING ROOM 1">3-Meeting Room 1</option>
                        <option value="3-MEETING ROOM 2">3-Meeting Room 2</option>
                        <option value="3-MEETING ROOM 3">3-Meeting Room 3</option>
                        <option value="2-CHAPEL">2-Chapel</option>
                    </select>
                </div>
                <div class="row mb-1">
                    <div class="col-md-6">
                        <label class="form-label" for="time">Event Time Start</label>
                        <div class="input-group input-group-merge">
                            <input type="date" id="time" name="starttime"
                                class="form-control flatpickr-basic" placeholder="H:i:S" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="time">Event Time End</label>
                        <div class="input-group input-group-merge">
                            <input type="date" id="time" name="endtime"
                                class="form-control flatpickr-basic" placeholder="H:i:S" required/>
                        </div>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cbx-oneday" name="oneday" value="true">
                                <label class="form-check-label" for="cbx-oneday">One Day Event</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="event-date">Event Date Start</label>
                        <div class="input-group input-group-merge">
                            <input type="date" id="event-date" name="startdate"
                                class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" required/>
                        </div>
                    </div>
                    <div class="col-md-4">
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

    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('cbx-oneday');
        const dateInput = document.getElementById('event-date-end');

        checkbox.addEventListener('change', function() {
            dateInput.disabled = checkbox.checked;
        });
    });



    flatpickr("#time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        defaultDate: "07:00",
        maxTime: "20:00",

    });
</script>
@endsection

