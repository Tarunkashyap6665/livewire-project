<div class="px-2 border bg-white">


    <h2 class="text-center mt-3">Support Tickets</h2>
    <hr>
    
    @foreach ($tickets as $ticket)
    <div class="card mt-2 {{$active==$ticket->id ? 'bg-success text-white' : ''}}" style="width:100%;cursor:pointer;"
        wire:click="$emit('ticketSelected',{{$ticket->id}})">
        <div class="card-body">
            <p class="card-text">{{$ticket->question}}</p>

        </div>
    </div>
    @endforeach
    {{$tickets->links('pagination-links')}}

</div>