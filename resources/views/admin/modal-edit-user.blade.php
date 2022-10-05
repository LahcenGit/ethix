<div class="modal fade" id="exampleModal">
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
                        <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                            Thank you for getting in touch! 
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
    
                     <div class="form-row">
                             <div class="form-group col-md-12">
                                <label> Solde:</label>
                                <input type="number"  class="form-control  " id="solde" value="{{$user->solde}}" >
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