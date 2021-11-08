
<div class="container">
  <div class="row">
    <div class="col-4">
      <?php include "pages/management/Sidebar.php"?>
    </div>
    <div class="col">
      <?php 
      if(isset($_GET["quanly"]) && $_GET["quanly"] == 'dangtin')
      {
        include "pages/management/dangtin.php";
      }
      ?>
    </div>
  </div>
</div>