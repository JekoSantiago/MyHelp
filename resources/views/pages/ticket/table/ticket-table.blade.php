 


<div class="table-responsive">
    <table id="ticket_table" class="table table-striped table-bordered">
        <thead>
            <tr> 
                <th>Ticket No.</th>
                <th>Status</th>
                <th>Description</th> 
                <th>Concern To</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $r)
                @php 
                    $colorClass = '';
                    if($r->TicketStatus_ID == 5):
                        $colorClass = 'danger';
                    elseif($r->TicketStatus_ID == 4):
                        $colorClass = 'info';
                    elseif($r->TicketStatus_ID == 3):
                        $colorClass = 'success';
                    elseif($r->TicketStatus_ID == 2):
                        $colorClass = 'primary';
                    elseif($r->TicketStatus_ID == 1):
                        $colorClass = 'warning';
                    endif;
                @endphp
                <tr>
                    <td><a href="{{ URL::to('/ticket/ticket-details').'/'.$r->Ticket_ID}}">{{$r->TicketNumber}}</a></td>
                    <td><div class="badge rounded-pill text-{{$colorClass}} bg-light-{{$colorClass}} p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>{{$r->TicketStatus}}</div></td>
                    <td>{{$r->TicketCategory}} <span class="text-secondary">></span> {{$r->TicketSubCategory}}</td> 
                    <td>{{$r->Department}}</td>
                </tr>
            @endforeach
        </tbody>    
    </table>
</div>