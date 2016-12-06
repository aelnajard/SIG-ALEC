@if(Session::has('message-error'))
<div class="alert alert-danger alert-dismissible" style="margin-top: 20px;margin-left: 500px;margin-right: 600px;" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"  style="margin-right: 15px;" ><span aria-hidden="true">&times;</span></button>

 {{Session::get('message-error')}}
  	</div>
@endif
