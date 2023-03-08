<!DOCTYPE html>
<html lang="en">
    <?php 
        include("modules/head.php");
    ?>
<body>
    <?php 
         include("modules/preloader.php");
         include("modules/header.php");
    ?>
     <!-- Start main-content -->
     <div class="main-content-area">
        <?php 
           
            include("modules/slider.php");
            include("modules/content.php");
            include("modules/services.php");
            include("modules/about.php");
            include("modules/gallery.php");
            include("modules/whoWeAre.php");
            include("modules/btnFlotantes.php");
            include("modules/footer.php");

        ?>
     </div>

     <?php
     include("modules/scripts.php");
     ?>
</body>
</html>