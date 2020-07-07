@extends('web.layouts.app')

@section('content')

    @include('web.layouts.bradcam')

<section class="bg-light" style="margin-bottom: 50px; height:650px;">
    <div class="container">
        <div class="heading-section text-center"><h1>Donation Form</h1></div>
    <form method="post" action="{{url('donation/'.$id)}}">
        {{csrf_field()}}
        <div class="text-danger">All the fields are required</div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" name="name" class="form-control" id="inputName" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Ward No. " required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" name="city" class="form-control" id="inputCity" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">District</label>
                <input type="text" name="district" class="form-control" id="inputCity" required>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip" required>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Event Id</label>
                <input readonly name="event_id" value='{{$id}}' class="form-control" id="inputEventId" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Phone Number</label>
                <input type="number" name="phoneNumber" class="form-control" id="inputCity" required>
            </div>
            <div class="form-group col-md-6">
                <label>Mobile Number</label>
                <input type="number" name="mobileNumber" class="form-control" required>
            </div>
        </div>
        <div class="button" style="float:right;" >
            <button type="submit" class="btn btn-primary">Next &longrightarrow;</button>
        </div>
    </form>
    </div>
</section>
    @endsection
