@extends('layouts.app')

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Stop
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Body -->
                    <tbody>
                            <tr>
                                <!-- Task Name -->
				<td></td>
                                <td class="table-text">
                                    <div>{{ $stop->location }}</div>
                                </td>

                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
