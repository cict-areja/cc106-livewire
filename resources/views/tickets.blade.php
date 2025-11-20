@extends('layouts.app')
{{-- Blade Directive - @ --}}
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header align-middle">
            Tickets
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="text-center">
                    <th>ID</th>
                    <th>Ticket Number</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Date Issued</th>
                    <th>Description</th>
                    <th>Actions</th>
                </thead>
                <tbody class="text-center align-middle">
                    @forelse ($ticketData as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->ticket_number }}</td>
                            <td>{{ $data->department }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->date_issued }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No tickets to show.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="text-end">
                {{ $ticketData->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</div>
@endsection
