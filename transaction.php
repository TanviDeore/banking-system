
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'script.html';?>
        
        <title>Form</title>
        <style>
           <?php include 'styles.html';?>
                  </style>
    </head> 
    <body>
    <div class="bg">
    <div class="scroll">
    <div class="btn-group" style="width:100%">

<button onclick="location.href='index.php'" style="width:25%; font-size=20px">Home</button>
  <button onclick="location.href='view.php'" style="width:25%; font-size=20px">View</button>
  <button onclick="location.href='transaction.php'" style="width:25%; font-size=20px">Transaction</button>
  <button  onclick="location.href='index.php'" style="width:25%; font-size=20px"><i class="fa fa-phone" aria-hidden="true">  Contact</i></button>
</a>
</div>
      
        <center>
            <br>
  
        <button onclick="location.href='show.php'" style="color:white; background-color: #800000">Successful_Transaction_History</button>
        <button onclick="location.href='fail.php'" style="color:white; background-color: #800000">Failed_Transaction_History</button>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <br>
    <b style="color:black">TRANSFER</b> <input type="number" name="amt" min="1" size="10" required><b style="color:black"> FROM</b>
    <input type="number" name="from" size="10" min="1001" max="1010" required><b style="color:black"> TO</b>
    <input type="number" name="to" size="10" min="1001" max="1010" required>
    
    <input type='submit' name="submit" value="Transfer" style="color:white; background-color: #800000">
    <input type='reset' name="reset" value="Reset" style="color:white; background-color: #800000">
    <h4>Account Balance</h4>
    <br>
    </form>
    
    
    
    <table id="view">
    <thread>
                        <tr>
    
                            <th><b>Account Number</b></th>
                            <th><b>Account Type</b></th>
                            <th><b>Name</b></th>
                            <th><b>Balance</b></th>
                         
                        </tr>

                    </thread>
                    <?php
                    
    error_reporting(E_ALL ^ E_WARNING); 
    // connect to database
        $dbh = mysqli_connect('localhost',"root",'','grip_bank')
    // turn off auto-commit
    mysqli_autocommit($dbh, FALSE);
    
    
    // look for a transfer
    if (isset($_GET["submit"])) {
        // subtract $$ from source account
        $test = mysqli_query($dbh,"SELECT Balance from view_all_customers WHERE  Account_Number = " . $_GET['from']); 
        
        //echo $query;
        $row = mysqli_fetch_array($test);
        $check = $row['Balance'];
        $amount = $_GET['amt'];

        if ($check <= $amount) {
            $Sender_Account_Number = $_GET['from'];
            $Reciever_Account_Number= $_GET['to'];
            $Amount= $_GET['amt'];
            $res =mysqli_query($dbh,"INSERT into  failed_transaction (Sender_Account_Number,Reciever_Account_Number,Amount) VALUES ('$Sender_Account_Number','$Reciever_Account_Number',$Amount)");
            mysqli_commit($dbh);
           
            echo '<script>alert("Insufficient Balance! ")</script>';
            mysqli_rollback($dbh);
            
              // if error, roll back transaction
           
        }
        else{
            $result = mysqli_query($dbh, "UPDATE view_all_customers SET Balance = Balance - " . $_GET['amt'] . " WHERE Account_Number = " . $_GET['from']);
            $result1 = mysqli_query($dbh, "UPDATE view_all_customers SET balance = Balance + " . $_GET['amt'] . " WHERE Account_Number = " . $_GET['to']);
            $Sender_Account_Number = $_GET['from'];
            $Reciever_Account_Number= $_GET['to'];
            $Amount_Transferred= $_GET['amt'];
            $res =mysqli_query($dbh,"INSERT into transaction_history (Sender_Account_Number,Reciever_Account_Number,Amount_Transferred) VALUES ('$Sender_Account_Number','$Reciever_Account_Number',$Amount_Transferred)");
            mysqli_commit($dbh);
        
            echo '<script>alert("Transaction Successful! ")</script>';
         }
    }
         
    $result = mysqli_query($dbh, "SELECT * FROM view_all_customers");
    while ($row = mysqli_fetch_assoc($result)) {
        $view_all_customers[] = $row;
    }
    
    // close connection
    mysqli_close($dbh);
    ?>

    <?php
    foreach ($view_all_customers as $a) {
        echo "<tr><td>".$a['Account_Number'] ."</td><td>". $a['Account_Type'] ."</td><td>". $a['Name'] . "</td><td>" . $a['Balance'] . "</td></tr>";  
    }
    ?>
    </table>
</center>
</div>
</div>
    </body>
</html>











