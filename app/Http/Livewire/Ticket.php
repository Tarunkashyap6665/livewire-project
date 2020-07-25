<?php

namespace App\Http\Livewire;

use App\Models\SupportTicket;
use Livewire\Component;
use Livewire\WithPagination;

class Ticket extends Component
{
    use WithPagination;
    public $active;
    protected $listeners = [
        'ticketSelected',
    
    ];

    
    public function ticketSelected($ticketId){
        $this->active=$ticketId;
    }

    public function render()
    {
        
        $supportTicket=SupportTicket::paginate(2);
        return view('livewire.ticket',[
            'tickets'=>$supportTicket,
        ]);
    }
}
