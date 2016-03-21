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
                    <input type="text" name="number_gallons" id="stop-num-gallons" class="form-control">
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
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Stop
                    </button>
                </div>
            </div>
        </form>
    </div>

        <!-- All Stops -->
    @if (count($stops) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                All Stops
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Date</th>
                        <th>Location</th>
			<th>Gas Mileage</th>
			<th>Number of Gallons</th>
			<th>Gas Price</th>
			<th>Notes</th>
			<th>Modify</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($stops as $stop)
                            <tr>
                                <!-- Stop Name -->
                                <td class="table-text">
                                    <div>{{ $stop->created_at }}</div>
                                </td>
				<td class="table-text">
                                    <div>{{ $stop->location }}</div>
                                </td>
				<td class="table-text">
                                    <div>{{ $stop->mileage }}</div>
                                </td>
				<td class="table-text">
                                    <div>{{ $stop->number_gallons }}</div>
                                </td>
				<td class="table-text">
                                    <div>{{ $stop->gas_price }}</div>
                                </td>
				<td class="table-text">
                                    <div>{{ $stop->notes }}</div>
                                </td>

                                <td>
                                    <form action="{{ url('stop/'.$stop->id) }}" method="POST">
           				{!! csrf_field() !!}
            				{!! method_field('DELETE') !!}

           				 <button type="submit" id="delete-stop-{{ $stop->id }}" class="btn btn-danger">
               				 	<i class="fa fa-btn fa-trash"></i>Delete
           				 </button>
       				    </form>
					<button class="btn btn-submit">
						<a href="{{ url('stop/'.$stop->id) }}">View</a>
					</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
