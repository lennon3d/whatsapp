<?php 
include_once 'include/header.php';
?>
<h1 class="page-header">Messaging Panel</h1>
<div id="info"></div>
<form class="form-horizontal" role="form" id="send-sms"  action="sendmessage.php">
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Mobile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" maxlength="10" name="mobile">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" maxlength="120" name="message"></textarea>
    </div>
  </div>
  
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Send </button>
    </div>
  </div>
</form>
<?php 
include_once 'include/footer.php';
?>