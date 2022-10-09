<div class="modal fade" id="modalShow">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$user->first_name}} {{$user->last_name}}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                        
                    
    
                     <div class="form-row">
                             <div class="form-group col-md-12">
                                <label> Documents justicatifs:</label>
                                @foreach($user->documents as $document)
                                <h6><a href="{{url('downolad-file/'.$document->link)}}">{{$document->link}}</a></h6>
                                @endforeach
                             </div>
                     </div>
                 </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" id="updateF" data-id = "{{$user->id}}" class="btn btn-primary"style="background-color:  #0b9e9a; border-color:#0b9e9a">Enregistrer</button>
            </div>
        </div>
    </div>
</div>