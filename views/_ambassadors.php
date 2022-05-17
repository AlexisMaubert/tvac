<?php

    $ambassadors = [['name'=>'Gabriela', 'lastname'=>'Castro'],
    ['name'=>'Allan', 'lastname'=>'Alvarado'],
    ['name'=>'Andrea', 'lastname'=>'Rocha'],
    ['name'=>'Dylan', 'lastname'=>'Morales'],
    ['name'=>'Javier', 'lastname'=>'Palma'],
    ['name'=>'Tvac', 'lastname'=>'Instagram']
    ];  
    asort($ambassadors);
    echo 
    '<section class="container">
        <div class="row jc-center">
            <h1>Who is your Recruitment Ambassador?</h1>
        </div>
        <div class="row jc-center">';
            
        
    foreach ($ambassadors as $ambassador) {
        echo 
            '<div class="ambassador_box col-6 col-sm-4 col-xl-2">
                <a href="tvacform.php?ambassador='.$ambassador['name'].$ambassador['lastname'].'"><img src="../resources/'.$ambassador['name'].$ambassador['lastname'].'.png" alt="" class="img-fluid"></a>
                <h2>'.$ambassador['name'].' '.$ambassador['lastname'].'</h2>
            </div>';
    }    
    echo              
        '</div>
    </section>';

?>