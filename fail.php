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
  <button onclick="location.href='view.php'" style="width:25%; font-size=20px">View</button>
  <button onclick="location.href='transaction.php'" style="width:25%; font-size=20px">Transaction</button>
  <button  onclick="location.href='index.php'" style="width:25%; font-size=20px"><i class="fa fa-phone" aria-hidden="true">  Contact</i></button>
</a>
</div>

<div class ="table-responsive">
                <center>
                <h2 style="text-align:center; font-family:'Times New Roman', Times, serif">Transaction History</h2>
                    <div class="container">
                        
                        <table id="view">
                            <thread>
                                <tr>
    
                                <th><b>Trans_Id</b></th>
                                    <th><b>Sender's Account</b></th>
                                    <th><b>Reciever's Account</b></th>
                                    <th><b>Amount</b></th>
                                    <th><b>Reason</b></th>
                                    <th><b>Date and Time</b></th>
                                </tr>
                            </thread>
                            <tbody>
                    <?php
                            include 'connection.php';
                            $selectquery = "select * from  failed_transaction ";
                            $query = mysqli_query($con,$selectquery);
                            if ($query){
                            while ($res = mysqli_fetch_array($query)){
                        ?>
                                <tr>
                                    <td><?php echo $res['Id']; ?></td>
                                    <td><?php echo $res['Sender_Account_Number']; ?></td>
                                    <td><?php echo $res['Reciever_Account_Number']; ?></td>
                                    <td><?php echo $res['Amount']; ?></td>
                                    <td  style="color:red"><?php echo $res['Reason']; ?></td>
                                    <td><?php echo $res['Date_Time']; ?></td>
                                
                                    
                                </tr> 
                        <?php
                            }  }
                           
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






    