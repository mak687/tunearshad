<div class="row">
      @if (!empty($employees))
		  @foreach ($employees as $employee)
			<div class="col-md-4">
			  <!-- Widget: user widget style 1 -->
			  <div class="box box-widget widget-user">
				<!-- Add the bg color to the header using any of the bg-* classes -->
				<div class="widget-user-header bg-aqua-active">
				  <h3 class="widget-user-username">{{$employee->name}}</h3>
				  <h5 class="widget-user-desc">{{$employee->occupation}}</h5>
				</div>
				<div class="widget-user-image">
  				 @if (!empty($employee->avatar))
				 
					@php
						$fallBackImg = asset("/assets/dist/img/".$employee->avatar_img_fallback);
					@endphp
				  <img class="img-circle" src="{{$employee->avatar}}" alt="User Avatar" onerror=this.src="{{$fallBackImg}}">
				  @else
					  <span class="i-circle">@if (!empty($employee->name[0])){{$employee->name[0]}}@endif  </span>
				  @endif  
				</div>
				
				<!-----chart -->
				<div style="clear:both;">&nbsp;</div>
				<div class="row" >
					<div class="box-body text-center">
						<div class="inlinesparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="14" data-bar-Spacing="7" data-bar-Color="#f39c12">
						 {{$employee->revenue}}
						</div>  
						<div>Conversions {{date('d/m', strtotime($employee->minTime))}} - {{date('d/m', strtotime($employee->maxTime))}}</div>
				  </div>
				</div>
				  <!-----/chart -->
				  
				<div class="box-footer">
				  <div class="row">
					<div class="col-sm-4 border-right">
					  <div class="description-block">
						<h5 class="description-header">{{$employee->totalImpressions}}</h5>
						<span class="description-text">Impressions</span>
					  </div>
					  <!-- /.description-block -->
					</div>
					<!-- /.col -->
					<div class="col-sm-4 border-right">
					  <div class="description-block">
						<h5 class="description-header">{{number_format($employee->totalConversions, 2)}}</h5>
						<span class="description-text">conversions</span>
					  </div>
					  <!-- /.description-block -->
					</div>
					<!-- /.col -->
					<div class="col-sm-4">
					  <div class="description-block">
						<h5 class="description-header">{{number_format($employee->totalConversions + $employee->totalImpressions, 2)}}</h5>
						<span class="description-text">revenue</span>
					  </div>
					  <!-- /.description-block -->
					</div>
					<!-- /.col -->
				  </div>
				  <!-- /.row -->
				</div>
			  </div>
			  <!-- /.widget-user -->
			</div>

		  @endforeach
	  @endif 
      </div>

     <script>
      jQuery('.inlinesparkline').sparkline('html', {type: 'line', height: '3.5em', width: '20em'}); 
     </script> 