<!DOCTYPE html>
<html>

    <head>
        <title>View</title>
        <?php include 'script.html';?>
    </head>
    <style>
<?php include 'styles.html';?>
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

    <body>
        <div class="bg">
        <div class="scroll">
    <div class="btn-group" style="width:100%">

<button onclick="location.href='index.php'" style="width:25%; font-size=20px">Home</button>
  <button onclick="location.href='view.php'" style="width:25%">View</button>
  <button onclick="location.href='transaction.php'" style="width:25%">Transaction</button>
  <button  onclick="location.href='index.php'" style="width:25%"><i class="fa fa-phone" aria-hidden="true">  Contact</i></button>
</a>
</div>
        <div class ="table-responsive">
            <center>
                <br>
            <button onclick="location.href='detail.php'" style="color:white; background-color: #800000"><i class="fa fa-search" aria-hidden="true">  Search Data</i></button>
    <br>
   
                <table id="view">
                    
                    <thread>
                        <tr>
                            <br>
    
                            <th><b>Account Number</b></th>
                            <th><b>Account Type</b></th>
                            <th><b>Gender</b></th>
                            <th><b>Name</b></th>
                            <th><b>Mail_id</b></th>
                            <th><b>Balance</b></th>
                        </tr>

                    </thread>
                    <tbody>
                    <?php
                            include 'connection.php';
                            $selectquery = "select * from view_all_customers";
                            $query = mysqli_query($con,$selectquery);
                            $nums = mysqli_num_rows($query);
                        
                            while ($res = mysqli_fetch_array($query)){
                        ?>
                                <tr>
                                    <td><?php echo $res['Account_Number']; ?></td>
                                    <td><?php echo $res['Account_Type']; ?></td>
                                    <td><?php echo $res['Gender']; ?></td>
                                    <td><?php echo $res['Name']; ?></td>
                                    <td><?php echo $res['Mail_id']; ?></td>
                                    <td><?php echo $res['Balance']; ?></td>
                                </tr> 
                        <?php
                            }  
                        ?>  
                                    
                    </tbody>
                </table>
            </center>
        </div>
        </div>
                        
        </div>                
    </body>
</html>