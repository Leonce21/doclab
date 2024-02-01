<?php 
include './config/connection.php';

$message = '';


// Assuming you have a session variable for the logged-in user ID
$loggedInUserId = $_SESSION['user_id']; 

$queryUser = "SELECT `id`, `display_name`, `user_name`, `profile_picture` FROM `users` WHERE `id` = :user_id;";
$stmtUser = '';

try {

  $stmtUser = $con->prepare($queryUser);
  $stmtUser->bindParam(':user_id', $loggedInUserId, PDO::PARAM_INT);
  $stmtUser->execute();

} catch(PDOException $ex) {
  echo $ex->getTraceAsString();
  echo $ex->getMessage();
  exit;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include './config/site_css_links.php';?>

 
 <?php include './config/data_tables_css.php';?>
 <title>Profile - SCE Gen</title>

 <style>
  .user-img{
    width:3em;
    width:3em;
    object-fit:cover;
    object-position:center center;
  }
 </style>
</head>
<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include './config/header.php';
include './config/sidebar.php';?>  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile </h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <section class="content">
      <!-- Default box -->
      
      <div class="card card-outline card-primary rounded-0 shadow">
        <div class="card-header">
          <h3 class="card-title">My Profile</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
         <div class="row table-responsive">

          <table id="all_users" 
          class="table table-striped dataTable table-bordered dtr-inline" 
          role="grid" aria-describedby="all_users_info">
          <colgroup>
            <!-- <col width="5%"> -->
            <col width="10%">
            <col width="60%">
            <col width="25%">
            <col width="20%">
          </colgroup>
          <thead>
            <tr>
             <!-- <th class="p-1 text-center">S.No</th> -->
             <th class="p-1 text-center">Picture</th>
             <th class="p-1 text-center">Display Name</th>
             <th class="p-1 text-center">Username</th>
             <th class="p-1 text-center">Action</th>
           </tr>
         </thead>

         <tbody>
          <?php
          if ($user = $stmtUser->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <tr>
                  <td class="px-2 py-1 align-middle text-center">
                      <img class="img-thumbnail rounded-circle p-0 border user-img" src="user_images/<?php echo $targetFile['profile_picture'];?>">
                  </td>
                  <td class="px-2 py-1 align-middle"><?php echo $user['display_name']; ?></td>
                  <td class="px-2 py-1 align-middle"><?php echo $user['user_name']; ?></td>
                  <td class="px-2 py-1 align-middle text-center">
                      <a href="update_user.php?user_id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm btn-flat">
                          <i class="fa fa-edit"></i>
                      </a>
                  </td>
              </tr>
              <?php
          } else {
              echo '<tr><td colspan="4" class="text-center">No profile found.</td></tr>';
          }
          ?>
     </tbody>
   </table>
 </div>
</div>

<!-- /.card-footer-->
</div>

<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php 
include './config/footer.php';

$message = '';
if(isset($_GET['message'])) {
  $message = $_GET['message'];
}
?>  
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include './config/site_js_links.php'; ?>
<?php include './config/data_tables_js.php'; ?>


<script>
  showMenuSelected("#mnu_users", "");

  var message = '<?php echo $message;?>';

  if(message !== '') {
    showCustomMessage(message);
  }

  
  $(document).ready(function() {

    $("#user_name").blur(function() {
      var userName = $(this).val().trim();
      $(this).val(userName);

      if(userName !== '') {
        $.ajax({
          url: "ajax/check_user_name.php",
          type: 'GET', 
          data: {
            'user_name': userName
          },
          cache:false,
          async:false,
          success: function (count, status, xhr) {
            if(count > 0) {
              showCustomMessage("This user name exists. Please choose another username");
              $("#save_user").attr("disabled", "disabled");

            } else {
              $("#save_user").removeAttr("disabled");
            }
          },
          error: function (jqXhr, textStatus, errorMessage) {
            showCustomMessage(errorMessage);
          }
        });
      }

    });    
  });
</script>
</body>
</html>