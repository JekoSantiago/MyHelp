 
<form action="{{ URL::to('/ticket/update-ticket') }}" method="post" class=" g-2" id="ticket_form" enctype="multipart/form-data"> 
    <input type="hidden" name="ticketID" id="ticketID" value="{{$ticket->Ticket_ID}}" />
    <div class="row mb-2"> 
        <div class="col-md-6 form-group">
            <label for="experienceType" class="form-label">Who Experience the Problem?</label>
            <select name="experienceType" id="experienceType" class="form-select">
                <option value=""></option>   
                <option value="1" {{$ticket->ExperienceType_ID == 1 ? 'selected':''}}>For Me</option>   
                <option value="2"  {{$ticket->ExperienceType_ID == 2 ? 'selected':''}}>For my Section/Store</option>   
            </select>
            <div id="validation_experienceType" class="invalid-feedback"></div>
        </div> 
        <div class="col-md-6 form-group">
            <label for="ticketCategory" class="form-label">Concern To (Department)</label>
            <select name="department" id="department" class="form-select">
                <option ></option>   
                @php 
                    foreach($departments as $r):  
                @endphp;
                    <option value="{{$r->Department_ID}}" {{$ticket->Department_ID == $r->Department_ID ? 'selected':''}}>{{$r->Department}}</option> 
                @php   
                endforeach;
                @endphp;
            </select>
            <div id="validation_department" class="invalid-feedback"></div>
        </div>
    </div>    
    <div class="row mb-2"> 
        <div class="col-md-6 form-group">
            <label for="ticketCategory" class="form-label">Category</label>
            <select name="ticketCategory" id="ticketCategory" class="form-select">
                <option ></option>   
                @php 
                    foreach($categories as $r):  
                @endphp;
                    <option value="{{$r->TicketCategory_ID}}" {{$ticket->TicketCategory_ID == $r->TicketCategory_ID ? 'selected':''}}>{{$r->TicketCategory}}</option> 
                @php   
                endforeach;
                @endphp;   
            </select>
            <div id="validation_ticketCategory" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6 form-group">
            <label for="ticketSubCategory" class="form-label">Sub Category</label>
            <select name="ticketSubCategory" id="ticketSubCategory" class="form-select">
                <option ></option>   
                @php 
                    foreach($subCategories as $r):  
                @endphp;
                    <option value="{{$r->TicketSubCategory_ID}}" {{$ticket->TicketSubCategory_ID == $r->TicketSubCategory_ID ? 'selected':''}}>{{$r->TicketSubCategory}}</option> 
                @php   
                endforeach;
                @endphp;     
            </select>
            <div id="validation_ticketSubCategory" class="invalid-feedback"></div>
        </div>
    </div>
    <div class="row mb-2">  
        <div class="col-md-12 form-group">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{$ticket->Description}}</textarea>
            <div id="validation_description" class="invalid-feedback"></div>
        </div>
    </div> 
    <div class="row mb-3"> 
        <div class="col-md-12 form-group">
            <label for="description" class="form-label">Attached File(s)</label> 
            <div>
                @php $imgExt = array('png','jpeg','jpg','heic'); @endphp
                @if(count(Storage::disk('public')->allFiles('uploads/ticket/'.$ticket->Ticket_ID)) > 0)
                     @foreach(Storage::disk('public')->allFiles('uploads/ticket/'.$ticket->Ticket_ID) as $f)
                     @php 
                        $icon =  'file-blank';
                        if(in_array(pathinfo($f, PATHINFO_EXTENSION),$imgExt))
                            $icon =  'images';
                     @endphp
                     <a href="{{URL::asset('storage/'.$f)}}" target="_blank"><i class="bx bx-{{$icon}}"></i> {{basename($f)}}</a>
                     <a href="javascript:;" class="ms-1 delete-file" data-id="{{$ticket->Ticket_ID}}" data-filename="{{basename($f)}}"><i class="bx bx-trash text-danger"></i></a><br />
                     @endforeach
                @else
                    <i>No attachement</i>
                @endif   
            </div>
        </div> 
    </div>
    <div class="row mb-3"> 
        <div class="col-md-12 form-group">
            <a href="javascript:;" class="ms-1 add-file"><i class="bx bx-plus text-primary"></i> Add file</a>
        </div>
    </div>
    <div class="row mb-3 ticket-files" style="display: none;"> 
        <div class="col-md-12 form-group">
            <label for="description" class="form-label">Attach New File(s)</label>
            <input name="ticket_files[]" id="ticket_files" class="form-control" type="file" accept="image/*,.pdf" multiple="multiple">
            <div id="validation_ticket_files" class="invalid-feedback"></div>
        </div> 
    </div>
    <div class="row mb-4"> 
        <center>
            <a href="{{ URL::to('/ticket/my-ticket') }}" class="btn btn-primary px-5 radius-30">Back to My Ticket</a>
            <button type="submit" class="btn btn-success px-5 radius-30">Save to Update</button>
        </center>
    </div>
</form>

 