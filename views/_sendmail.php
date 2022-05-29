<?php

$ambassadorsmail = [['name'=>'AllanAlvarado', 'email'=>''],
      ['name'=>'AndreaRocha', 'email'=>'alexis.maubert@davinci.edu.ar'],
      ['name'=>'DylanMorales', 'email'=>''],
      ['name'=>'JavierPalma', 'email'=>'alexismaubertop@gmail.com'],
      ['name'=>'GabrielaCastro', 'email'=>'gabyc_3000@hotmail.com'],
      ['name'=>'TvacInstagram', 'email'=>'']];

foreach ($ambassadorsmail as $aEmail) {
    if($aEmail['name'] == $ambassador){
      $rmail = $aEmail['email'];  
    } 
}

if ( isset($_POST['send']) ) {    
    
    $msgjson = "Name: $name \n Lastname: $lastName \n Age: $age \n Country: $country \n Instagram: $instagram \n E-mail: $email \n EFSET result: $url \n Is she/he available to commit to work 8hs from mon-fri between 9am and 10pm CST?: $week \n Is she/he available to commit to work 8hs of her/his choice during the weekend?: $weekend \n Is she/he currently working or attending to college?: $college \n the explanation as to why this wont affect her/his commitment to work: $explain \n Is she/he looking for a long-term commitment? : $longterm \n What is the income that she/he is looking for?: $income \n Is she/he posses al the technological requirements?: $tech"; 
    $msg = "
    <html>
        <head>
            <title>$lastName $name</title>
        </head>
        <body>
            <h1>$lastName $name</h1>
            <table>
                <tr>
                    <td>Age</td>
                    <td>$age</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>$country</td>
                </tr>
                <tr>
                    <td>Instagram account</td>
                    <td>$instagram</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>EFSET test result</td>
                    <td>$url</td>
                </tr>
                <tr>
                    <td>Is she/he available to commit to work 8hs from mon-fri between 9am and 10pm CST?</td>
                    <td>$week</td>
                </tr>
                <tr>
                    <td>Is she/he available to commit to work 8hs of her/his choice during the weekend?</td>
                    <td>$weekend</td>
                </tr>
                <tr>
                    <td>Is she/he currently working or attending to college?</td>
                    <td>$college</td>
                </tr>
                <tr>
                    <td>the explanation as to why this wont affect her/his commitment to work</td>
                    <td>$explanation</td>
                </tr>
                <tr>
                    <td>Is she/he looking for a long-term commitment?</td>
                    <td>$longterm</td>
                </tr>
                <tr>
                    <td>What is the income that she/he is looking for?</td>
                    <td>$income</td>
                </tr>
                <tr>
                    <td>Is she/he posses al the technological requirements?</td>
                    <td>$tech</td>
                </tr>
            </table>
        </body>
    </html>
    ";
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";        
    $header = "From: tvacrecruitmentteam@tvac.com" . "\r\n";
    $header.= "Reply-To: tvacrecruitmentteam@tvac.com"."\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $sendTo = mail($rmail, $name.$lastName,$msg,$header);

    

    $archive = file_get_contents("../data/data.json");
    $arraydata = json_decode($archive, true);
  
    $myarray = array('Name'=> $name.$lastName, 'Data'=>$msg);
    array_push($arraydata, $myarray);

    $outJson = json_encode($arraydata);
    file_put_contents("datos.json", $outJson);
}


?>  
    