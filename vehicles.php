<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ExilePHPAdminTools/includes/queries.php";
include_once ($path);
$Tabs=VehicleList();
?>
<!DOCTYPE html>
<?php include('header.php'); ?>
<head>
  <script>
  $(document).ready(function(){
  $(function(){
  $("#table").tablesorter();
  });
  });
  </script>
</head>
<html>
  <body>
    <!-- Navigation Bar Start -->
    <?php $search = "False"; ?> <!-- True or False -->
    <?php include('navbar.php'); ?>
    <!-- Navigation Bar End -->
    <!-- Jumbotron - Start -->
    <div class="jumbotron" style="padding-top:10px; margin-top:-21px; ">
      <h1><center>Vehicle List</center></h1>
      <h2><center><?php echo $_SESSION['dbase'];?></center></h2>
    </div>
    <div style="height: 10px;">&nbsp;</div>
    <!-- Jumbotron - End -->
    <center>
    <div class="form-group">
      <div class="input-group input-group-default">
        <input class="form-control input-sm" type="text" id="search" placeholder="Quick Search...">
      </div>
    </div>
    </center>
    <!-- Datatable Start -->
    <div class=" table-responsive" style="max-width:1500px;  margin:auto;">
      <table class=" table-bordered table table-hover" id="table" style="margin: auto;">
        <thead style='background-color: #375A7F;'>
          <tr>
            <th><center>Vehicle Name</center></th>
            <th><center>Owner ID</center></th>
            <th><center>Lock State</center></th>
            <th><center>Pincode</center></th>			
            <th><center>Spawn Date</center></th>
            <th><center>Last Updated</center></th>
            <th><center>Deleted</center></th>			
            <th><center>Territory Virtural Garage</center></th>
            <th><center>Public Virtural Garage</center></th> <!-- remove if you do not have this installed on your server echo "<td><center>".$tab['vg_public']."<center></td>"; -->
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($Tabs as $tab) {
          echo "<tr>";
            echo "<td><center>".$tab['class']."</center></td>";
            echo "<td><center><a href='playerinfo.php?pid=".$tab['account_uid']."'>".$tab['account_uid']."</a></center</td>";
            echo "<td><center>".$tab['is_locked']."<center></td>";
            echo "<td><center>".$tab['pin_code']."<center></td>";			
            echo "<td><center>".$tab['spawned_at']."<center></td>";
			echo "<td><center>".$tab['last_updated_at']."<center></td>";
			echo "<td><center>".$tab['deleted_at']."<center></td>";			
			echo "<td><center>".$tab['territory_id']."<center></td>";
			echo "<td><center>".$tab['vg_public']."<center></td>";
          echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
    <!-- Datatable End -->
    <!-- Footer Start -->
    <div style="height: 100px;">&nbsp;</div>
    <footer id="footer" class="container footer">
      <div class="copyright">
        <center>Copyright © 2017 <a href="http://www.atdgaming.com">ATD Gaming</a></center>
        <div style="height: 10px;">&nbsp;</div>
      </div>
    </footer>
    <!-- Footer End -->
  </body>
</html>
<script type="text/javascript">
$( '#table' ).searchable();
</script>