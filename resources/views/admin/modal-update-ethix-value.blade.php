<div class="modal fade" id="ethixModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier la valeur d'éthix</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
           
            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                           La valeur a été bien modifier! 
                        </div>
                     <div class="form-row">
                            <div class="form-group col-md-12">
                                <label> Valeur:</label>
                                <input class="form-control" id="value" type="text" value="{{$ethix->value}}">
                            </div>
                     </div>
                    </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" id="update-value" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>