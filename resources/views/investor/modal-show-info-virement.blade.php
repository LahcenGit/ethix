<div class="modal" tabindex="-1" id="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Virement</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Voici le RIB sur le quel vous pouvez effectuer votre virement.Pour information,un virement met en moyenne 72h à arriver sur votre portefeuille Ethix.
            <b></b>
          </p>
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">IBAN:</label>
              <input type="text" class="form-control" style="height: 50px;" id="recipient-name" value="FR75 3500 6500 1400 8956 321" disabled>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">BIC:</label>
                <input type="text" class="form-control"style="height: 50px;" id="recipient-name" value="BIC/SWIFT:BNPOFTPPXXX" disabled>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Bénéficiare:</label>
                <input type="text" class="form-control" style="height: 50px;" id="recipient-name" value="Farid ethix" disabled>
            </div>
          </form>
          <p><a href="{{ asset('app/virment/create') }}"><b>Cliquiez ici</b></a> pour envoyer le reçu de votre virement bancaire,après la réception votre compte sera automatiquement crédité</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" style="height: 55px;" data-bs-dismiss="modal">Fermer</button>
          <a href="{{ asset('/send-mail') }}" class="submit-btn " >Recevoir les instructions par email</a>
        </div>
      </div>
    </div>
  </div>
