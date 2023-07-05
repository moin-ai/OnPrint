
    <?php



$con  = mysqli_connect("localhost","root","","onprint");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM inventory WHERE OutletID='P'";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
	
			
            $InventoryID[]  = $row['item']  ;
            $InvQuantity[] = $row['InvQuantity'];
	
		 }
		 
		 $sqr ="SELECT * FROM inventory WHERE OutletID='G'";
         $result = mysqli_query($con,$sqr);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
	
			
            $InventoryID2[]  = $row['item']  ;
            $InvQuantity2[] = $row['InvQuantity'];
	
		 }
 
 
 }


?>