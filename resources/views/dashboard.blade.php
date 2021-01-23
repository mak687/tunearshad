@extends('adminlte::page')

@section('title', 'User Dashboard')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content_header')
    <h1>User Dashboard</h1>
@stop

@section('content')
<style>
.i-circle {
    color: #fff;
    padding: 5px 20px;
    border-radius: 50%;
    font-size: 35px;
    border: 2px solid #fff;
}
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">		
		jQuery(document).ready(function () {
      
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            
            postData = {
                '_token': CSRF_TOKEN
            };
		      	var url = "{{ URL::to('/getAllUsers') }}";
			
		
            //jQuery('.content-grid-loader').show();
            jQuery.ajax({
              url: url,
              type: 'POST',
              data: postData,
              dataType: 'JSON',
              success: function (response) 
              {
				jQuery('.content-grid-loader').show();  
                $("#users").html(response.html);
				jQuery('.content-grid-loader').hide();
              }
            });
       

    });
</script>      

<div id="users">Please wait....</div>    
    
     

     

     

    









     

@stop