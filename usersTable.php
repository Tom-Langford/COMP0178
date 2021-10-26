<?php
$link = mysqli_connect("localhost", "root", "", "comp0078_group_project");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "CREATE TABLE Users(
    userID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userName varchar(30) NOT NULL,
    firstName varchar(30) NOT NULL,
    lastName varchar(30) NOT NULL,
    addressLine1 varchar(80) NOT NULL,
    addressLine2 varchar(80) DEFAULT NULL,
    city varchar(30) NOT NULL,
    postcode varchar(10) NOT NULL,
    countryID varchar(3) NOT NULL,
    currencyID varchar(3) NOT NULL,
    phoneNo varchar(80) NOT NULL,
    company varchar(80) DEFAULT NULL,
    email varchar(80) NOT NULL,
    password varchar(80) NOT NULL,
    signUpDate datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    accountPermission enum('B','S') NOT NULL DEFAULT 'B',
    emailVerifciation enum('0','1') NOT NULL DEFAULT '0'
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>