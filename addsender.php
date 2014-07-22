<?php 
include_once 'include/header.php';
?>
	<h1 class="page-header">ADD Sender</h1>
	
    <ul role="tablist" class="nav nav-tabs nav-justified" id="myTab">
      <li class="disabled"><a  role="tab" href="#step1" class="disabled">1. Get SMS Code</a></li>
      <li class="disabled "><a  role="tab" href="#step2" class="disabled">2. Fetch Password</a></li>
      <li class="disabled "><a  role="tab" href="#step3" class="disabled">3. Add In Sender List</a></li>
    </ul>
    <div class="tab-content addsender-form" id="myTabContent">
      <!-- Step1 -->
      <div id="info"></div>
      <div id="step1" class="tab-pane fade active in">
      	
        <form class="form-horizontal" role="form" id="form-addsender-step-one" action="apicall.php">
          <input type="hidden" name="action" value="getsmscode" />
		  <div class="form-group form-group-lg">
		    <label class="col-sm-2 control-label custom-label" for="formGroupInputLarge">Mobile </label>
		    <div class="col-sm-6">
		      <input class="form-control" type="text"  maxlength="10" name="mobile">
		    </div>
		     <div class="col-sm-4">
		      <button class="form-control btn btn-primary" type="text" >Next </button>
		    </div>
		  </div>
		  </form>      
      </div>
      <!-- Step2 -->
     <div id="step2" class="tab-pane fade">
        <form class="form-horizontal" action="apicall.php" role="form" id="form-addsender-step-two">
        <input type="hidden" name="action" value="getpassword" />
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