<div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Ticket Details
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-1">
                                <label class="form-label">Ticket Number</label>
                                <input wire:model.live="ticketNumber" type="text" class="form-control"
                                    placeholder="Ticket No.">
                                @error('ticketNumber')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label class="form-label">Department</label>
                                <select wire:model.live="department" class="form-select">
                                    <option value="">Select --</option>
                                    <option value="Department1">Department1</option>
                                    <option value="Department2">Department2</option>
                                    <option value="Department3">Department3</option>
                                </select>
                                @error('department')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label class="form-label">Description</label>
                                <input wire:model.live="description" type="text" class="form-control"
                                    placeholder="Description">
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label class="form-label">Date Issued</label>
                                <input wire:model.live="dateIssued" type="date" class="form-control">
                                @error('dateIssued')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label class="form-label">Date Resolved</label>
                                <input wire:model.live="dateResolved" type="date" class="form-control">
                                @error('dateResolved')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label class="form-label">Status</label>
                                <select wire:model.live="status" class="form-select">
                                    <option value="Pending">Pending</option>
                                    <option value="Resolved">Resolved</option>
                                    <option value="Submitted">Submitted</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-1">
                                <label class="form-label">Remarks</label>
                                <textarea wire:model.live="remarks" class="form-control" rows="3">{{ $remarks }}</textarea>
                                @error('remarks')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button wire:click="save" wire:confirm="Save ticket information?" type="button"
                                class="btn btn-success">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
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
                                            <button wire:click="editTicket({{ $data->id }})" type="button" class="btn btn-warning">Edit</button>
                                            <button wire:click="deleteTicket({{ $data->id }})" wire:confirm="Delete ticket information?" type="button" class="btn btn-danger">Delete</button>
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
                            {{ $ticketData->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
