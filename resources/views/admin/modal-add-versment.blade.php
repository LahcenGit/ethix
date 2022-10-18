<div class="modal fade" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter Un Versment</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                           Le versement a été bien ajouter! 
                        </div>
                     <div class="form-row">
                            <div class="form-group col-md-12">
                                <label> Investisseurs* :</label>
                                <select  class="form-control " id="user"  class="selectpicker " data-live-search="true">
                                 @foreach($users as $user)
                                 <option value="{{$user->id}}" >{{$user->first_name}} {{$user->last_name}}</option>
                                 @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label> Type* :</label>
                                <select  class="form-control " id="type"  class="selectpicker " data-live-search="true">
                                 <option value="1" >Entrer</option>
                                 <option value="0" >Sortie</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label> Montant* :</label>
                               <input class="form-control" id="montant" type="number">
                            </div>
                     </div>
                    </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" id="storeVersment"  class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </div>
</div>