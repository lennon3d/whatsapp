
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/js/jquery-1.10.2.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/js/sendmessage.js"></script>
    <script type="text/javascript">
    $('#form-addsender-step-one').on("submit", function (e) {
    	  e.preventDefault();
    	  $('#myTab a[href="#step2"]').tab('show');
    });
    $('#form-addsender-step-two').on("submit", function (e) {
  	  e.preventDefault();
  	  $('#myTab a[href="#step3"]').tab('show');
    });
    
	</script>
  </body>
</html>
