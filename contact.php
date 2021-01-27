<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="css/skeleton.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slider2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include("includes/header.php");?>
    <?php include("includes/functions.php");?>

    <div class="container">
      <div class="row">
        <div class="contactHead  twelve columns">
          <h2>We would love to hear from you!</h2>
          <p>Fill out the form below and we would be happy to get back to you at the soonest.</p>
        </div>
      </div>
    </div>

    <div class="container formsheet">
      
      <div class="row">
          <div class="card six columns">
            <h3>Vedran Đulić Photography</h3>
            <h4>Vedran Đulić</h4>
            <p>Email: vdulic.foto@gmail.com</p>
            <p>Vankina 13, Zapruđe</p>
            <p>10000 Zagerb, Croatia</p>
          </div>    

        <div class="contForm six columns">
          <form name="myForm" method="post" action="save.php">

            <h4>How can we help?</h4>
            
            <input type="text" name="strName" placeholder="Name" value="" required/><br/><br/>

            <input type="text" name="strEmail" placeholder="Email" value="" required/><br/><br/>

            <input type="text" name="strTel" placeholder="Telephone" value="" required/><br/><br/>
           
            <select name="strPackages" required>
              <option value="Service Required">Service Required</option>
              <option value="Wedding Photography">Wedding Photography</option>
              <option value="Portrait Photography">Portrait Photography</option>
              <option value="Family Photography">Family Photography</option>
              
            </select>  
            <br/><br/>
            
            <input id="sav" type="submit" value="SEND">
          </form>
        </div>
      </div>
    </div>


    <?php include("includes/footer.php");?>

</body>
</html>