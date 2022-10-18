<div class="modal fade" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{Str::ucfirst($user->first_name)}} {{Str::ucfirst($user->last_name)}}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                           Le statut a été bien modifier! 
                        </div>
                     <div class="form-row">
                            <div class="form-group col-md-12">
                                <label> Statut:</label>
                                <select  class="form-control " id="status"  class="selectpicker " data-live-search="true">
                                <option value="0" @if($user->status == 0) selected @endif >En attente</option>
                                <option value="1" @if($user->status == 1) selected @endif>Validé</option>
                                </select>
                            </div>
                     </div>
                    </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" id="updateF" data-id = "{{$user->id}}" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>