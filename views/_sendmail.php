<?php

if ( isset($_POST['send'])) {

    $rmail = 'alexismaubertop@gmail.com';
    $msg = 'Name: '.$name.'
    Lastname: '.$lastName.'
    Age: '.$age.'
    Country: '.$country.'
    Instagram: '.$instagram.'
    Mail: '.$email.'
    EFSET result: '.$url.'
    Is she/he available to commit to work 8hs from mon-fri between 9am and 10pm CST?: '.$week.'
    Is she/he available to commit to work 8hs of her/his choice during the weekend?: '.$weekend.'
    Is she/he currently working or attending to college?: '.$college.'
    the explanation as to why this wont affect her/his commitment to work: '.$explain.'
    Is she/he looking for a long-term commitment? : '.$longterm.'
    What is the income that she/he is looking for?: '.$income.'
    Is she/he posses al the technological requirements?: '.$tech;

    $header = "From: tvacrecruitmentteam@tvac.com" . "\r\n";
    $header.= "Reply-To: tvacrecruitmentteam@tvac.com"."\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $sendTo = @mail($rmail, $name.$lastName,$msg,$header);
}


