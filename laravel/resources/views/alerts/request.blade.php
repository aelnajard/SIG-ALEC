@if(count($errors)> 0)
	<div class="alert alert-danger alert-dismissible" style="margin-top: 0px;margin-bottom:0px;margin-left: 408px;margin-right: 160px;" role="alert">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close" style="margin-right: 15px;"><span aria-hidden="true">&times;</span></button>
		<ul>
			@foreach($errors->all() as $error)	
				<li>
					{!!$error!!}
				</li>
			@endforeach
		</ul>
  	</div>
	@endif