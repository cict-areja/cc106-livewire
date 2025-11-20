<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketsController extends Controller
{
    public function index()
    {
        $allTickets = Ticket::select(
            'id',
            'ticket_number',
            'department',
            'date_issued',
            'status',
            'description')
            ->paginate(5);

        return view('tickets')
            ->with('ticketData', $allTickets);
    }

    public function add()
    {
        return view('add-ticket');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ticketNumber' => 'required|string',
            'department' => 'required|string',
            'description' => 'required|string',
            'dateIssued' => 'required|date',
            'dateResolved' => 'nullable|date',
            'status' => 'required|string',
            'remarks' => 'nullable|string',
        ]);

        Ticket::create($validated);
    }
}
