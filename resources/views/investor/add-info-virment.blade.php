@extends('layouts.front')
@section('content')
@include('investor.header-investor')
    <!-- Breadcrumb area end -->

        <div class="container d-flex justify-content-center " style="margin-top: 100px;margin-bottom: 100px;">
            <div class="login-wrapper login-shadow bg-white col-md-6">
                <div class="login-wrapper-flex">

                    <div class="login-wrapper-contents login-padding ">
                        <h2 class="single-title"> L'envoi du reçu bancaire</h2>

                        <form action="{{url('app/virment')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="single-input mt-4">
                               <label class="mb-2"> Téléviser le reçu de votre virement bancaire</label>
                               <input class="form-control"  type="file"  name="received" value="{{old('received')}}" accept="image/*" required>
                            </div>
                            <div class="single-input mt-4">
                                <label class="mb-2"> Indiquer le montant versé</label>
                                <input class="form-control" style="height: 50px;" type="text" name="amount" placeholder="0.00 €"  required>
                            </div>

                            <button class="submit-btn w-100 mt-4" type="submit"> Envoyer</button>

                        </form>

                     </div>
                </div>
            </div>
        </div>




@endsection
@push('show-modal-info')
<script>
    $( ".add-money" ).click(function() {
        $.ajax({
        url: '/app/show-modal-virement-info',
        type: "GET",
        success: function (res) {

          $('#modal-show-virement').html(res);
          $("#modal").modal('show');
        }
      });
      });
</script>
@endpush
