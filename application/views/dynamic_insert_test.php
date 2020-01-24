<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insert Data in PHP using jQuery AJAX without Page Refresh</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
      src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
  </head>
  <body>
 
 
    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Insert Data in PHP jQuery AJAX</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="post" action="<?php echo base_url('userpanel/insert');?>" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="student_name" class="control-label">Enter Name</label>
                                  <input type="text" class="form-control" id="student_name" name="student_name" value="" required="" title="Please enter you Name" placeholder="">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="student_roll_no" class="control-label">Enter Roll No</label>
                                  <input type="text" class="form-control" id="student_roll_no" name="student_roll_no" value="" required="" title="Please enter your Roll No">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="student_class" class="control-label">Enter Class</label>
                                  <input type="text" class="form-control" id="student_class" name="student_class" value="" required="" title="Please enter your Class">
                                  <span class="help-block"></span>
                              </div>
 
 
                              <input type="submit" class="btn btn-success btn-block" name="insert-data" id="insert-data" onclick="insertData()" value="Insert Data">
                              <br>
                            <p id="message"></p>
                          </form>
                      </div>
                  </div>
 
              </div>
          </div>
      </div>
  </div>
 
</body>
 
<script type="text/javascript">
 
  function insertData() {
    var student_name=$("#student_name").val();
    var student_roll_no=$("#student_roll_no").val();
    var student_class=$("#student_class").val();
 
 
// AJAX code to send data to php file.
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('userpanel/insert')?>",
            data: {student_name:student_name,student_roll_no:student_roll_no,student_class:student_class},
            dataType: "JSON",
            success: function(data) {
             $("#message").html(data);
            $("p").addClass("alert alert-success");
            },
            error: function(err) {
            alert(err);
            }
        });
 
}
 
  </script>
</html>