<?php
 
header("Content-Type:application/json");
include('connection.php');
 
if (isset($_GET['customer_id']) && $_GET['customer_id']!="") {
 
 $customer_id = $_GET['customer_id'];
 $query = "Select * FROM `customers` Where customer_id=$customer_id";
 $result = mysqli_query($con,$query);
 $table = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
 $cData['customer_id'] = $table['customer_id'];
 $cData['customer_name'] = $table['customer_name'];
 $cData['customer_email'] = $table['customer_email'];
 $cData['customer_contact'] = $table['customer_contact'];
 $cData['customer_address'] = $table['customer_address'];
 $cData['country'] = $table['country'];
 
 $response["status"] = "true";
 $response["message"] = "Customer Details";
 $response["customers"] = $cData;
 }

else
 {
 $response["status"] = "false";
 $response["message"] = "None customers found!";
}
echo json_encode($response); exit;
 
?>