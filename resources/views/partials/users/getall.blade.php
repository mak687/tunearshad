<div class="row">
      @if (!empty($users))
		  @foreach ($users as $user)
			<div class="col-md-4">
			  <!-- Widget: user widget style 1 -->
			  <div class="box box-widget widget-user">
				<!-- Add the bg color to the header using any of the bg-* classes -->
				<div class="widget-user-header bg-aqua-active">
				  <h3 class="widget-user-username">{{$user->name}}</h3>
				  <h5 class="widget-user-desc">{{$user->occupation}}</h5>
				</div>
				<div class="widget-user-image">
  				 @if (!empty($user->avatar))
				 
					@php
						$fallBackImg = str_replace('http://localhost',URL::to('/'),$user->avatar_img_fallback);
					@endphp
				  <img class="img-circle" src="{{$user->avatar}}" alt="User Avatar" onerror=this.src="{{$fallBackImg}}">
				  @else
					  <span class="i-circle">@if (!empty($user->name[0])){{$user->name[0]}}@endif  </span>
				  @endif  
				</div>
				
				<!-----chart -->
				<div style="clear:both;">&nbsp;</div>
				<div class="row" >
					<div class="box-body text-center">
						<div class="inlinesparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="14" data-bar-Spacing="7" data-bar-Color="#f39c12">
						 {{$user->revenue}}
						</div>  
						<div>Conversions {{date('d/m', strtotime($user->minTime))}} - {{date('d/m', strtotime($user->maxTime))}}</div>
				  </div>
				</div>
				  <!-----/chart -->
				  
				<div class="box-footer">
				  <div class="row">
					<div class="col-sm-4 border-right">
					  <div class="description-block">
						<h5 class="description-header">{{$user->totalImpressions}}</h5>
						<span class="description-text">Impressions</span>
					  </div>
					  <!-- /.description-block -->
					</div>
					<!-- /.col -->
					<div class="col-sm-4 border-right">
					  <div class="description-block">
						<h5 class="description-header">{{number_format($user->totalConversions, 2)}}</h5>
						<span class="description-text">conversions</span>
					  </div>
					  <!-- /.description-block -->
					</div>
					<!-- /.col -->
					<div class="col-sm-4">
					  <div class="description-block">
						<h5 class="description-header">{{number_format($user->totalConversions + $user->totalImpressions, 2)}}</h5>
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