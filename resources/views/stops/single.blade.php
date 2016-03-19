@extends('layouts.app')

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Stop
		<span style="float:right">TODO: Edit Button</span>
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Body -->
                    <tbody>
                            <tr>
				<td>Location</td>
                                <td class="table-text">
                                    <div>{{ $stop->location }}</div>
                                </td>
                            </tr>
			    <tr>
				<td>Gas Price</td>
				<td class="table-text">
				    <div>{{ $stop->gas_price }}</div>
				</td>
			    </tr>
			    <tr>
				<td>Number of Miles on the Car</td>
				<td>{{ $stop->mileage }}</td>
			    </tr>
			    <tr>
				<td>Number of Gallons bought</td>
				<td>{{ $stop->number_gallons }}</td>
			    </tr>
			    <tr>
				<td>Notes</td>
				<td>{{ $stop->notes }}</td>
			    </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
