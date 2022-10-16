<div class="modal fade" id="modalEthix">
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
                                    <p>Votre balance est de 500€ , Max nombre ethix 5</p>
                             </div>
                             <div class="form-group col-md-12 mt-3">
                                <label label-title mb-3> Nbr ethix:</label>
                                <input type="number"  class="form-control  " id="nbr_ethix" value="" >
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