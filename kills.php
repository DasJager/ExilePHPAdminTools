<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/ExilePHPAdminTools/includes/queries.php";
include_once ($path);
$Tabs=PlayerKills();
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
      <h1><center>Player/AI Kills</center></h1>
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
    <div class=" table-responsive" style="max-width:1200px;  margin:auto;">
      <table class=" table-bordered table table-hover" id="table" style="margin: auto;">
        <thead style='background-color: #375A7F;'>
          <tr>
            <th><center>Killer Name</center></th>
            <th><center>Killer ID</center></th>
            <th><center>Victim Name</center></th>
            <th><center>Victim ID</center></th>
            <th><center>Weapon</center></th>
            <th><center>Distance</center></th>
            <th><center>Date Killed</center></th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($Tabs as $tab) {
          echo "<tr>";
            echo "<td><center>".$tab['killer_name']."</center></td>";
            echo "<td><center><a href='playerinfo.php?pid=".$tab['killer_uid']."'>".$tab['killer_uid']."</a></center</td>";
            echo "<td><center>".$tab['victim_name']."<center></td>";
            echo "<td><center><a href='playerinfo.php?pid=".$tab['victim_uid']."'>".$tab['victim_uid']."</a></center</td>";
            echo "<td><center>".$tab['weapon']."<center></td>";
			echo "<td><center>".$tab['distance']."<center></td>";
			echo "<td><center>".$tab['died_at']."<center></td>";
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