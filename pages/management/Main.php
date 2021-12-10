
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
        include "pages/management/page/tinban/tinban.php";
      }
      else if(isset($_GET["page"]) && $_GET["page"] == 'lsgiaodich')
      {
        include "pages/management/page/lichsugiaodich/lichsugiaodich.php";
      }else if(isset($_GET["page"]) && $_GET["page"] == 'tdmatkhau')
      {
        include "pages/management/page/thaydoimatkhau/thaydoimatkhau.php";
      }
      ?>
    </div>
  </div>
</div>