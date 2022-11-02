
@if ($message = Session::get('success'))
    <div class="container mt-4 ">
        <div class="alert alert-success alert-dismissible fade show flash-alert" role="alert">
        <button type = "button" class = "btn-close" data-bs-dismiss = "alert" id = "close"> </button> 	
        <strong>{{ $message }} <i class="fa-solid fa-face-smile"></i></strong>
        </div>
    </div>
@endif










