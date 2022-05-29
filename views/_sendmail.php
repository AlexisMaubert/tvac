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
    $msg = "Name: $name \n Lastname: $lastName \n Age: $age \n Country: $country \n Instagram: $instagram \n E-mail: $email \n EFSET result: $url \n Is she/he available to commit to work 8hs from mon-fri between 9am and 10pm CST?: $week \n Is she/he available to commit to work 8hs of her/his choice during the weekend?: $weekend \n Is she/he currently working or attending to college?: $college \n the explanation as to why this wont affect her/his commitment to work: $explain \n Is she/he looking for a long-term commitment? : $longterm \n What is the income that she/he is looking for?: $income \n Is she/he posses al the technological requirements?: $tech"; 
        
    $header = "From: tvacrecruitmentteam@tvac.com" . "\r\n";
    $header.= "Reply-To: tvacrecruitmentteam@tvac.com"."\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $sendTo = mail($rmail, $name.$lastName,$msg,$header);

}


?>  
    