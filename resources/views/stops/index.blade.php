<!-- resources/views/stops/index.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('stop') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <!-- Location -->
            <div class="form-group">
                <label for="stop-location" class="col-sm-3 control-label">Location</label>

                <div class="col-sm-6">
                    <input type="text" name="location" id="stop-location" class="form-control">
                </div>
            </div>
<!-- Gas Mileage -->
            <div class="form-group">
                <label for="stop-location" class="col-sm-3 control-label">Number of Miles on the car</label>

                <div class="col-sm-6">
                    <input type="text" name="mileage" id="stop-gas-mileage" class="form-control">
                </div>
            </div>

<!-- Gas Price -->
            <div class="form-group">
                <label for="stop-location" class="col-sm-3 control-label">Gas Price</label>

                <div class="col-sm-6">
                    <input type="text" name="gas_price" id="stop-gas-price" class="form-control">
                </div>
            </div>

<!-- number of Gallons -->
            <div class="form-group">
                <label for="stop-location" class="col-sm-3 control-label">Number of Gallons purchased</label>

                <div class="col-sm-6">
                    <input type="text" name="num_gallons" id="stop-num-gallons" class="form-control">
                </div>
            </div>

<!-- Notes -->
            <div class="form-group">
                <label for="stop-location" class="col-sm-3 control-label">Notes</label>

                <div class="col-sm-6">
                    <input type="textarea" name="notes" id="stop-notes" class="form-control">
                </div>
            </div>


            <!-- Add Stop Button -->
            <k Name -->
            <div class="form-group">
                <label for="stop-location" class="col-sm-3 control-label">Location</label>

                <div class="col-sm-6">
                    <input type="text" name="location" id="stop-location" class="form-control">
                </div>
            </div>
iv class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Stop
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Stop -->
@endsection
