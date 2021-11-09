 
<form action="{{ URL::to('/ticket/insert-ticket') }}" method="post" class=" g-2" id="ticket_form" enctype="multipart/form-data"> 
    <div class="row mb-2"> 
        <div class="col-md-6 form-group">
            <label for="experienceType" class="form-label">Who Experience the Problem?</label>
            <select name="experienceType" id="experienceType" class="form-select">
                <option value=""></option>   
                <option value="1">For Me</option>   
                <option value="2">For my Section/Store</option>   
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
                    <option value="{{$r->Department_ID}}">{{$r->Department}}</option> 
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
            </select>
            <div id="validation_ticketCategory" class="invalid-feedback"></div>
        </div>
        <div class="col-md-6 form-group">
            <label for="ticketSubCategory" class="form-label">Sub Category</label>
            <select name="ticketSubCategory" id="ticketSubCategory" class="form-select">
                <option ></option>   
            </select>
            <div id="validation_ticketSubCategory" class="invalid-feedback"></div>
        </div>
    </div>
    <div class="row mb-2">  
        <div class="col-md-12 form-group">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
            <div id="validation_description" class="invalid-feedback"></div>
        </div>
    </div>
    <div class="row mb-3"> 
        <div class="col-md-12 form-group">
            <label for="description" class="form-label">Attach File(s)</label>
            <input name="ticket_files[]" id="ticket_files" class="form-control" type="file" accept="image/*,.pdf" multiple="multiple">
            <div id="validation_ticket_files" class="invalid-feedback"></div>
        </div> 
    </div>
    <div class="row mb-4"> 
        <center>
            <button type="reset" class="btn btn-danger px-5 radius-30">Reset</button>
            <button type="submit" class="btn btn-success px-5 radius-30">Submit</button>
        </center>
    </div>
</form>

 