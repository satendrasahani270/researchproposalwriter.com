<?php
if($_POST['apicall'] == 'apivalue'){
$email = $_POST['email'];
$phone = $_POST['Phone'];
}else{
     echo "<script>
         window.location.href = 'index.php';
        </script>";   
}
if($email == '' &&  $phone == ''){
    echo "<script>
         window.location.href = 'index.php';
        </script>";    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>Research Proposal Writer</title>
    <meta name="robots" content="nofollow,noindex">
    <?php
    include "includes/link.php"
    ?>
    <style>        
        @media only screen and (min-width: 430px) {
            .thankyou h1{
                font-family:cursive;
                font-size:40px;
            }    
            .thankyou img{
                width:40%;
            }    
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?php
    include "includes/header.php"
    ?>
    <!-- Header -->

    <section class="thankyou pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1  class="mb-0">Our Expert Team Will Contact You <br>Within An Hour!</h1>
                    <div class="home-page-btn mt-4">
                        <a href="/" class="btn hero-btn">Go To Home Page</a>
                    </div>
                    <img src="https://img.freepik.com/free-vector/thank-you-concept-illustration_114360-14867.jpg?t=st=1723274558~exp=1723278158~hmac=91a2a677b914e3ce1fde5da6dd1b4066734bbf2ebe88dc02ea35a2eb126ab020&w=740" alt="Thankyou" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
    include "includes/footer.php"
    ?>
    <!-- Footer -->
    
    <?php
$name =  trim(preg_replace("/\s*(?:[\d_]|[^\w\s])+/", "", $_POST['name']));
$message =  trim(preg_replace("/\s*(?:[\d_]|[^\w\s])+/", "", $_POST['msg']));
$date = date("Y-m-d h:i:s");
$websiteforcrm = "researchproposalwriter.com";
$country_code = $_POST['phone_full'];
$sendphonewithcode = $country_code."-".$phone;
$mailaccesstokken = "nahev^q7e51584Q##@&85g";
$mailurl = 'https://portal.be.clickinpedia.io/send-lead';
    $maildata = array('name' => $name, 'email' => $email,'phone' => $sendphonewithcode, 'msg' => $message,'website' => $websiteforcrm, 'mailaccesstokken' => $mailaccesstokken);
    $mailoptions = array(
            'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($maildata),
        )
    );
    $mailcontext  = stream_context_create($mailoptions);
    $mailresult = file_get_contents( $mailurl, false, $mailcontext );
    $mailresponse = json_decode($mailresult);

    if($mailresponse->status == 200){
      
    }else{
        echo "<script> 
        alert('Error While Submiting in Crm ".$mailresponse->status."');
        </script>";    
    }
    ?>
</body>

</html>