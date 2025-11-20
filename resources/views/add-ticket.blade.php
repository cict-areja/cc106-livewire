@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add Ticket
            </div>
            <form action="" class="form">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Ticket Number</label>
                        <input type="text" name="ticketNumber" class="form-control" placeholder="Ticket No.">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Department</label>
                        <select name="department" id="" class="form-select">
                            <option value="Department1">Department1</option>
                            <option value="Department2">Department2</option>
                            <option value="Department3">Department3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date Issued</label>
                        <input type="date" name="dateIssued" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date Resolved</label>
                        <input type="date" name="dateResolved" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select name="status" id="" class="form-select">
                            <option value="Pending">Pending</option>
                            <option value="Resolved">Resolved</option>
                            <option value="Submitted">Submitted</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Remarks</label>
                        <textarea name="remarks" class="form-control" rows="3">Remarks</textarea>
                    </div>

                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
