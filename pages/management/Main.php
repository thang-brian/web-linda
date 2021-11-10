
<div class="container">
  <div class="row">
    <div class="col-4">
      <?php include "pages/management/Sidebar.php"?>
    </div>
    <div class="col-8">
      <?php 
      if(isset($_GET["page"]) && $_GET["page"] == 'dangtin')
      {
        include "pages/management/page/dangtin.php";
      }else if(isset($_GET["page"]) && $_GET["page"] == 'tinban')
      {
        include "pages/management/page/tinban/index.html";
      }
      ?>
    </div>
  </div>
</div>