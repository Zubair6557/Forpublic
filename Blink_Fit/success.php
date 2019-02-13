<?php 
    require "header.php";
    require "menu.php";
        
        $pdate = date('Y-m-d');
        
        if ($_SESSION['n1']!='') {
            
            $member  = "INSERT INTO member(payid, name, contact_no, email,
                    passsword, is_paid, from_date, to_date) 
                    VALUES ('".$_SESSION['pid']."','".$_SESSION['n1']."','".$_SESSION['m1']."',
                    '".$_SESSION['e1']."','".$_SESSION['p1']."',
                    'paid','".$_SESSION['f1']."',
                    '".$_SESSION['t1']."')"; 
            $res_sql = mysqli_query($conn,$member); 
        
            $last_id = mysqli_insert_id($conn);
            //$last_id = $conn->insert_id;

            $payment = "INSERT INTO payment(memid, pay_date, amount) VALUES ('".$last_id."','".$pdate."','".$_SESSION['pp1']."')";
            $pay_res = mysqli_query($conn,$payment); 

        ?>  
            <br><br><br>
        <div class="about-3">
        <div style="color:white;background-color:green;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Registration Sccessfully Please Login.....</div>
        <script type="text/javascript">
                setTimeout(function () {            
               window.location.href='login.php'; // the redirect goes here
            },2000);    
        </script>   
    </div>
        <?php
        } else {
        ?>
        <br><br><br>
        <div class="about-3">
        <div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Registration Fail Please try again.....</div>
        <script type="text/javascript">
                setTimeout(function () {            
               window.location.href='package.php'; // the redirect goes here
            },2000);    
        </script>   
        </div>
        <?php
        }
?>
<?php require "footer.php"; ?>
    