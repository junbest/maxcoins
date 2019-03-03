@extends('layouts.dash')

@section('content')

                   <div class="row">
			       <div class="col-lg-12"><center><h2>Settings</h2><br>
				   <h4></h4>
				   </center></div>
				   </div>
				   <br>
				   <div class="row">
				<div class="col-lg-2"></div>
				
			<div class="col-lg-8">
		<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" href="#collapse1">
      <h4 class="panel-title">
        <a style="color:black" data-toggle="collapse" href="#collapse1" ><i  class="fas fa-gear"></i>    Account Settings</a>
      </h4>
    </div>
	<hr>
	

	
	
	<br>
    <div style="box-shadow: 0px 0px 8px -1px rgba(0,0,0,0.75);" id="collapse1" class="panel-collapse collapse">
     <div class='list-group'>
	  <div class="my-3 p-3 bg-white rounded box-shadow">
        
        <div class="media text-muted pt-3">
        
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Language</strong>
              <a href="#">Change</a>
            </div>
            <span class="d-block">English</span>
          </div>
        </div>
        <div class="media text-muted pt-3">
         
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Receive Skrill Offers</strong>
              <a href="#">Change</a>
            </div>
            <span class="d-block">Disabled</span>
          </div>
        </div>
        <div class="media text-muted pt-3">
          
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Account Status</strong>
              <a href="#">Close Account</a>
            </div>
            <span class="d-block">Active</span>
          </div>
        </div>
        
      </div>
	 
	 
	 </div>
      
    </div>
  </div>
</div>
														
										</div>
			</div>
			<div class="col-lg-2">
                                     
										
										
                                    </div>
									</div>

									
								
									

@endsection