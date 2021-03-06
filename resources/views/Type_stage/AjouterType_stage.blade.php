


@extends('app')

@section('conten')
<ol class="breadcrumb">
  <li><a href="{{ url('/home') }}" style=" font-weight:bold"><i>Stage+</i></a></li>
  <li><a href="{{ url('/type_stage') }}">types de stage</a></li>
  <li class="active">ajouter un type de stage</li>
</ol>



<hr>
<div class="container-fluid">
	

	<div class="row">
		<div class="col-md-10 col-md-offset-1">

			<div class="panel panel-default">
			
					
              <legend>  &nbsp;<i class="fa fa-plus-square fa-lg"></i>&nbsp;<i>Ajouter Un Type De Stage</i></legend>
				
				<div class="panel-body">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Oups!</strong> Il y avait quelques problèmes avec votre entrée.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                      

	                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/type_stage')}}">
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         

						
                        <div class="form-group">
							<label class="col-md-4 control-label">Nom </label>
							<div class="col-md-3">
							<input type="text" class="form-control " name="type_nom" value="{{old('type_nom') }}">	    
							</div>
						</div>
                        <div class="form-group">
							<label class="col-md-4 control-label">Durée maximal </label>
							<div class="col-md-3">
																	
										          <div class="input-group spinner">
										           <input type="text" class="form-control" name="type_dur_max"   id="type_dur_max" value="@if(old('type_dur_max')=='') 1 @else {{old('type_dur_max')}} @endif">
										             <div class="input-group-btn-vertical">
										              <button type="button"  id="utype_dur_max" class="btn btn-default"><i class="fa fa-caret-up"></i></button>
										              <button type="button"  id="dtype_dur_max" class="btn btn-default"><i class="fa fa-caret-down"></i></button>
										             </div>
										           </div>

		                        	<label class="control-label">jours</label>

							</div>
							      <script type="text/javascript">
							         $(document).ready(function ($) {
							  $('.spinner .btn#utype_dur_max:first-of-type').on('click', function() {
							    $('.spinner input#type_dur_max').val( parseInt($('.spinner input#type_dur_max').val(), 10) + 1);
							  });
							  $('.spinner .btn#dtype_dur_max:last-of-type').on('click', function() {
							     if($('.spinner input#type_dur_max').val()>1)
							    $('.spinner input#type_dur_max').val( parseInt($('.spinner input#type_dur_max').val(), 10) - 1);
							  });
							  })(jQuery);

							 </script>
						</div>
						
                        <div class="form-group">
							<label class="col-md-4 control-label">Durée minimal</label>
							<div class="col-md-3">
							

                      <div class="input-group spinner">
                     <input type="text" class="form-control" id="type_dur_min" name="type_dur_min" value="@if(old('type_dur_min')=='') 1 @else {{old('type_dur_min')}} @endif">
                       <div class="input-group-btn-vertical">
                      <button type="button" id="utype_dur_min" class="btn btn-default"><i class="fa fa-caret-up"></i></button>
                       <button type="button" id="dtype_dur_min" class="btn btn-default"><i class="fa fa-caret-down"></i></button>
                        </div>
                        </div>


                      <label class="control-label">jours</label>

                    <script type="text/javascript">
							   $(document).ready(function ($) {
							  $('.spinner .btn#utype_dur_min:first-of-type').on('click', function() {
							    $('.spinner input#type_dur_min').val( parseInt($('.spinner input#type_dur_min').val(), 10) + 1);
							  });
							  $('.spinner .btn#dtype_dur_min:last-of-type').on('click', function() {
							     if($('.spinner input#type_dur_min').val()>1)
							    $('.spinner input#type_dur_min').val( parseInt($('.spinner input#type_dur_min').val(), 10) - 1);
							  });
							  })(jQuery);

							 </script>

							</div>
						</div>
					    <div class="form-group">
						<label class="col-md-4 control-label"></label>
							<div class="col-md-3">

						         <label class="col-md-4 checkbox">
                                  <input class="col-md-4" type="checkbox" name="type_encadreur" value="1">&nbsp;Encadreur
                                 </label>
                             </div>
						</div>

						<div class="form-group">
						<label class="col-md-4 control-label"></label>
							<div class="col-md-3">

						         <label class="col-md-4 checkbox">
                                  <input class="col-md-4" type="checkbox" name="type_obligatoire" value="1">&nbsp;Obligatoire
                                 </label>
                             </div>
						</div>
						
						<div class="form-group">
						<label class="col-md-4 control-label"></label>
							<div class="col-md-3">

						         <label class="col-md-4 checkbox">
                                  <input class="col-md-4" type="checkbox" name="type_soutenable" value="1">&nbsp;Soutenable
                                 </label>
                             </div>
						</div>
                      
                        <div class="form-group">
							<label class="col-md-4 control-label">Nombre maximum</label>
							<div class="col-md-6">
								 <div class="input-group spinner">
				             <input type="text" class="form-control" name="type_nb_max" id="type_nb_max" value="@if(old('type_nb_max')=='') 1 @else {{old('type_nb_max')}} @endif">
				               <div class="input-group-btn-vertical">
				            <button type="button" class="btn btn-default" id="uptype_nb_max"><i class="fa fa-caret-up"></i></button>
				             <button type="button" class="btn btn-default" id="downtype_nb_max"><i class="fa fa-caret-down"></i></button>
				             </div>
				            </div>&nbsp;<label class="control-label">étudiants</label>
				             <script type="text/javascript">
							         $(document).ready(function ($) {
							  $('.spinner .btn#uptype_nb_max:first-of-type').on('click', function() {
							    $('.spinner input#type_nb_max').val( parseInt($('.spinner input#type_nb_max').val(), 10) + 1);
							  });
							  $('.spinner .btn#downtype_nb_max:last-of-type').on('click', function() {
							     if($('.spinner input#type_nb_max').val()>1)
							    $('.spinner input#type_nb_max').val( parseInt($('.spinner input#type_nb_max').val(), 10) - 1);
							  });
							  })(jQuery);

							 </script>
                        </div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nombre minimum</label>
							<div class="col-md-6">
							<div class="input-group spinner">
					             <input type="text" class="form-control" name="type_nb_min" id="type_nb_min" value="@if(old('type_nb_min')=='') 1 @else {{old('type_nb_min')}} @endif">
					               <div class="input-group-btn-vertical">
					            <button type="button" id="utype_nb_min"class="btn btn-default"><i class="fa fa-caret-up"></i></button>
					             <button type="button"id="dtype_nb_min" class="btn btn-default"><i class="fa fa-caret-down"></i></button>
					             </div>
					            </div>&nbsp;<label class="control-label">étudiants</label>

					                <script type="text/javascript">
							         $(document).ready(function ($) {
							  $('.spinner .btn#utype_nb_min:first-of-type').on('click', function() {
							    $('.spinner input#type_nb_min').val( parseInt($('.spinner input#type_nb_min').val(), 10) + 1);
							  });
							  $('.spinner .btn#dtype_nb_min:last-of-type').on('click', function() {
							     if($('.spinner input#type_nb_min').val()>1)
							    $('.spinner input#type_nb_min').val( parseInt($('.spinner input#type_nb_min').val(), 10) - 1);
							  });
							  })(jQuery);

							 </script>
                           </div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary btn-sm">
								 <span class="glyphicon glyphicon-floppy-open"></span>
								 Enregistrer
								</button>
								
								<button type="reset" class="btn btn-danger btn-sm">
									<span class="glyphicon glyphicon-remove"></span>
									 Annuler
							    </button>
								
							</div>
						</div>




					</form>
					</div>
				</div>
			</div>
		</div>
</div>
</div>
	
@endsection