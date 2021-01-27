<!DOCTYPE html>
<html>
<head>
  <title>Client Inquiries</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
    *{
      font-family: 'Montserrat', sans-serif; 
      font-size: 12px;
      line-height: 22px;
    }
    h1{
      font-size: 30px;
    }
    #cooltable .row {
      overflow: auto;
    }
    #cooltable .row div { 
      float: left; 
      width: 20%; 
      text-align: center;
    }
    #cooltable .thead {
      background: orangered;
    }
    #cooltable .thead .chead {
      font-weight: bold; 
      text-align: center; 
      color: #fff;
      line-height: 30px;
    }
    #cooltable .trow:nth-child(even){
      background: #ccc;
    }
    a.btn {
      color: #fff;
      font-weight: bold;
      display: inline-block; 
      background: #006699;; 
      padding: 10px; 
      text-decoration: none;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <!-- ... here will be a list of my users -->
  <h1>Client Listings</h1>

  

  <div id="cooltable">
    

    <?php

    include("includes/functions.php");

    $arrFields = array("strName", "strEmail", "strTel", "strPackages");
    showTableHeader($arrFields);

    $result = getData("SELECT * FROM clients ORDER BY strName");

    
    showData($result, $arrFields);

    ?>
  </div>


</body>
</html>