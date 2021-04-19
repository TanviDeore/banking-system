<!doctype html>
<html>
    <head>
        <title>Details</title>
        <?php include 'script.html';?>
    </head>
        <style>
    <?php include 'styles.html';?>
        </style>
   
    <body onload="loader()">
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
                    <h1 style="color:black">Search Data and Transaction History</h1>
                    <div class="container">
                        <form action="" method="GET">
                            <label style="color:black"><strong>Enter Account Number</strong></label>
                        <input type="Number" name="Account Number" size=2000 min="1001" max="1010" width=100px required/>
                            <input type="submit" name="search" value="search" style="color:white; background-color: #800000"/>
   <br>
   <br>
                        </form>
                        <table id="view">
                            <thread>
                                <tr>
    
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
                            if(isset($_GET["search"]))
                            {
                                $id = $_GET['Account_Number'];
                            $selectquery = "select * from view_all_customers where Account_Number = '$id'";
                            $query = mysqli_query($con,$selectquery);
                            if ($query){
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
                            }  }
                            else {
                                echo '<script>alert("Account ID Not available")</script>';
                            }
                        }
                            ?>  
                    
                                    
                    </tbody>
                        </table>
                        <br>
                        <br>
                        <table id="view">
                            <thread>
                                <tr>
    
                                <th><b>Trans_Id</b></th>
                                    <th><b>Sender's Account</b></th>
                                    <th><b>Reciever's Account</b></th>
                                    <th><b>Amount_Transferred</b></th>
                                    <th><b>Date and Time</b></th>
                                </tr>
                            </thread>
                            <tbody>
                    <?php
                            include 'connection.php';
                            if(isset($_GET["search"]))
                            {
                                $id = $_GET['Account_Number'];
                            $selectquery = "select * from transaction_history where	Sender_Account_Number = '$id'";
                            $query = mysqli_query($con,$selectquery);
                            if ($query){
                            while ($res = mysqli_fetch_array($query)){
                        ?>
                                <tr>
                                <td><?php echo $res['id']; ?></td>
                                    <td><?php echo $res['Sender_Account_Number']; ?></td>
                                    <td><?php echo $res['Reciever_Account_Number']; ?></td>
                                    <td><?php echo $res['Amount_Transferred']; ?></td>
                                    <td><?php echo $res['Date_Time']; ?></td>
                                    
                                </tr> 
                        <?php
                            }  }
                            else {
                                echo '<script>alert("Account ID Not available")</script>';
                            }
                        }
                            ?>  
                    
                                    
                    </tbody>
                        </table>
                    </div>
                </center>
            </div>
        
      
</header> 
</div>  
                    </div>
    </body>
  
</html>