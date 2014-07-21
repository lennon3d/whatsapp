<?php 
include_once 'include/header.php';
?>
	<h1 class="page-header">ADD Sender</h1>
	
    <ul role="tablist" class="nav nav-tabs nav-justified" id="myTab">
      <li class="active"><a data-toggle="tab" role="tab" href="#step1">1. Get SMS Code</a></li>
      <li class=""><a data-toggle="tab" role="tab" href="#step2">2. Fetch Password</a></li>
      <li class=""><a data-toggle="tab" role="tab" href="#step3">3. Add In Sender List</a></li>
    </ul>
    <div class="tab-content addsender-form" id="myTabContent">
      <!-- Step1 -->
      <div id="step1" class="tab-pane fade active in">
        <form class="form-horizontal" role="form" id="form-addsender-step-one">
		  <div class="form-group form-group-lg">
		    <label class="col-sm-2 control-label custom-label" for="formGroupInputLarge">Mobile </label>
		    <div class="col-sm-6">
		      <input class="form-control" type="text"  maxlength="10" name="mobilenumber">
		    </div>
		     <div class="col-sm-4">
		      <button class="form-control btn btn-primary" type="text" >Next </button>
		    </div>
		  </div>
		  </form>      
      </div>
      <!-- Step2 -->
     <div id="step2" class="tab-pane fade">
        <form class="form-horizontal" role="form" id="form-addsender-step-two">
		  <div class="form-group form-group-lg">
		    <label class="col-sm-2 control-label custom-label" for="formGroupInputLarge">Code </label>
		    <div class="col-sm-6">
		      <input class="form-control" type="text"  maxlength="6" name="smscode">
		    </div>
		     <div class="col-sm-4">
		      <button class="form-control btn btn-primary" type="text" >Next </button>
		    </div>
		  </div>
		  </form>      
	 </div>		
	  <!-- Step3 -->
      <div id="step3" class="tab-pane fade">
      	<button type="button" class="btn btn-success btn-lg btn-block">Add Sender To List</button>
      </div>
      
    </div>
<?php 
include_once 'include/footer.php';
?>