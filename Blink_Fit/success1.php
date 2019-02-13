<?php 
    require "header.php";
    require "menu.php";
        
        if ($_SESSION['supid']!='') {
            
            $member  = "INSERT INTO paymentsuppliments(memid, supid, amount) 
                    VALUES ('".$_SESSION['id']."','".$_SESSION['supid']."','".$_SESSION['price']."')"; 
            $res_sql = mysqli_query($conn,$member); 

        ?>  
            <br><br><br>
        <div class="about-3">
        <div style="color:white;background-color:green;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Supplements Sccessfully Purchase.....</div>
        <script type="text/javascript">
                setTimeout(function () {            
               window.location.href='supplements.php'; // the redirect goes here
            },2000);    
        </script>   
    </div>
        <?php
        } else {
        ?>
        <br><br><br>
        <div class="about-3">
        <div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Supplements Purchase Fail Please try again.....</div>
        <script type="text/javascript">
                setTimeout(function () {            
               window.location.href='supplements.php'; // the redirect goes here
            },2000);    
        </script>   
        </div>
        <?php
        }
?>
<?php require "footer.php"; ?>
    