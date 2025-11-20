<?php
namespace App\Livewire;

use App\Models\Ticket;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

class LiveTickets extends Component
{
    use WithPagination;
    protected $paginationThem = 'bootstrap';

    #[Validate('required')]
    public $ticketNumber;
    #[Validate('required')]
    public $description;

    #[Validate('required|date')]
    public $dateIssued;

    #[Validate('required')]
    public $department;

    #[Validate('required|date')]
    public $dateResolved;

    #[Validate('required')]
    public $status;

    #[Validate('nullable')]
    public $remarks;

    public $editingId;

    public function save()
    {
        $this->validate();

        if ($this->editingId) {
            Ticket::find($this->editingId)
                ->update([
                    'description'   => $this->description,
                    'date_issued'   => $this->dateIssued,
                    'department'    => $this->department,
                    'date_resolved' => $this->dateResolved,
                    'status'        => $this->status,
                    'remarks'       => $this->remarks,
                    'ticket_number' => $this->ticketNumber,
                ]);
        } else {
            Ticket::create([
                'description'   => $this->description,
                'date_issued'   => $this->dateIssued,
                'department'    => $this->department,
                'date_resolved' => $this->dateResolved,
                'status'        => $this->status,
                'remarks'       => $this->remarks,
                'ticket_number' => $this->ticketNumber,
            ]);
        }

        $this->reset();
    }

    public function editTicket($id)
    {
        $this->editingId = $id;

        $ticket = Ticket::find($id);

        $this->ticketNumber = $ticket->ticket_number;
        $this->description  = $ticket->description;
        $this->dateIssued   = $ticket->date_issued;
        $this->department   = $ticket->department;
        $this->dateResolved = $ticket->date_resolved;
        $this->status       = $ticket->status;
        $this->remarks      = $ticket->remarks;
    }

    public function deleteTicket($id)
    {
        Ticket::find($id)
            ->delete();
    }

    public function render()
    {
        $tickets = Ticket::paginate(15);

        return view('livewire.live-tickets')
            ->with('ticketData', $tickets);
    }
}
