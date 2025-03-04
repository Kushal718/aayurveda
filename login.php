<?php
session_start();
require_once '../vendor/autoload.php';
    include 'functions.php';

    use Medoo\Medoo;

    $db = new Medoo();
if (isset($_REQUEST['submit'])) {
    

    $mobile_no = $_REQUEST['mobile_number'];
    $password = md5($_REQUEST['password']);
    $admin = $db->get("users", "*", ["AND" => ['mobile_no' => $mobile_no, 'password' => $password]]);
    if ($admin) {
     
        if ($admin['is_blocked'] == '0') {
            $_SESSION['admin'] = $admin;
           
            header("location:index.php");
        } else {
            $error = "You are not allowed to login, Please contact admin.";
        }
    } else {

        $error = "Username or Password incorrect, Please try again.";
    }
}
?>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a>
</div>



<script>
                                        $(document).keyup(function () {
                                            $("#login-form").validate({
                                                rules: {
                                                    mobile_number: {
                                                        required: true,
                                                        maxlength: 10,
                                                        minlength: 10,

                                                    }
                                                },
                                                // Specify validation error messages
                                                messages: {
                                                    mobile_number: {
                                                        remote: "Phone number already exists, Please contact mess owner"
                                                    }
                                                },
                                                // Make sure the form is submitted to the destination defined
                                                // in the "action" attribute of the form when valid
                                                submitHandler: function (form) {
                                                    //alert();
                                                    form.submit();
                                                }
                                            });

                                        });
    </script>