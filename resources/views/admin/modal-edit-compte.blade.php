<div class="modal fade" id="modal-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Injecter le solde </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                           Le compte a été bien crédité!
                        </div>
                     <div class="form-row">
                            <div class="form-group col-md-12">
                                <label> Investisseur :</label>
                               <input class="form-control" id="investor-name" type="text" value="{{ $user->first_name }} {{ $user->last_name }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label> Montant* :</label>
                               <input class="form-control" id="amount" type="text" placeholder="0.00 €">
                            </div>
                            <div class="form-group col-md-12">
                                <label> Statut* :</label>
                                <select  class="form-control " id="status"  class="selectpicker " data-live-search="true">
                                 <option value="0" @if($virment->status == 0) selected @endif >En attente</option>
                                 <option value="1" @if($virment->status == 1)selected @endif >Traité</option>
                                </select>
                            </div>
                            <input class="form-control" id="investor" type="hidden" value="{{ $user->id }}">
                            <input class="form-control" id="virment" type="hidden" value="{{ $virment->id }}">
                     </div>
                    </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Fermer</button>
                <button type="button" id="editCompte"  class="btn btn-primary">Mise à jour</button>
            </div>
        </div>
    </div>
</div>
