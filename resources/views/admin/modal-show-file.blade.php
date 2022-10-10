<div class="modal fade" id="modalShow">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{Str::ucfirst($user->first_name)}} {{Str::ucfirst($user->last_name)}}</h4>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                        
                    
    
                     <div class="form-row">
                             <div class="form-group col-md-12">
                                @if($test)
                                    <h5> Documents justicatifs:</h5>
                                    @foreach($user->documents as $document)
                                    <div class="alert alert-secondary" role="alert">
                                    <a href="{{url('downolad-file/'.$document->link)}}"><strong>{{$document->link}}</strong></a>
                                    </div>
                                    @endforeach
                                @else
                                    <div class="alert alert-secondary" role="alert">
                                    <span>Aucun document trouvé pour cet investisseur !</span>
                                    </div>
                                @endif
                             </div>
                     </div>
                 </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>