<?php include "conn.php";



    $sql = "INSERT INTO inventory (VIN, YEAR, Make, Model, Trim, Ext_color, Int_color, Asking_price, Sale_prie, Purchase_price, Mileage, Transmission, Purhase_date, Sale_date) VALUES ('10001', '2016', 'Hyundai}', '{Grand i10}', 'Sportz', 'Sleek Silver', 'Gray', '300000', '280000', '450000', '45000', 'Manual', '', ''	)" ;
    $result = mysqli_query($conn, $sql) or die("Query Unsuccesfull");


header("Location: /car_mangment/");
mysqli_close($conn);

?>