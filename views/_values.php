<?php
    $values = [['index'=> '1', 'h3'=>'<span class="fontcolors">Legendary</span> customer <span class="fontcolors">experience</span>', 'pos' =>''],
        ['index'=> '2', 'h3'=>'Self <span class="fontcolors">accountability</span>', 'pos' =>'_r'],
        ['index'=> '3', 'h3'=>'Results<span class="fontcolors"> driven</span>', 'pos' =>''],
        ['index'=> '4', 'h3'=>'High <span class="fontcolors">energy</span> teamwork', 'pos' =>'_r'],
        ['index'=> '5', 'h3'=>'Controlled <span class="fontcolors">urgency</span>', 'pos' =>''],
        'break'=>['index'=> '6', 'h3'=>'Fail <span class="fontcolors">forward</span>', 'pos' =>'_r']
        
    ];

    
    foreach ($values as $value) {
        echo '
        <div class="col-11 item col-sm-5 row mar-auto aligit-center">
            <div class="col-4">
                <div class="outside">
                    <div class="inside">
                        <p class="number">'.$value['index'].'</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <h3>'.$value['h3'].'</h3>
            </div>
        </div>'; 
    
        
        if ($value === $values['break']) {
            echo '
            <div class="col-11 col-sm-6 col-md-5 item row mar-auto aligit-center">
                <div class="col-4">
                    <div class="outside">
                        <div class="inside">
                            <p class="number">7</p>
                        </div>
                    </div>
                </div>
                <div class="col-8 ">
                    <h3>going <span class="fontcolors">the extra</span> mile</h3>
                </div>
            </div>';
        }
    }
