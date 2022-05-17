<?php 
    $valid = '<div class="valid-feedback"></div>';

    $formtext =[['label'=>'First Name', 'id'=>'name', 'input'=>'text'],
    'lastname'=>['label'=>'Last name', 'id'=>'lastname', 'input'=>'text'],
    ['label'=>'Country of residence', 'id'=>'country', 'input'=>'text'],
    ['label'=>'Instagram account', 'id'=>'instagram', 'input'=>'text" placeholder="@tvac_co'],
    ['label'=>'E-mail', 'id'=>'email', 'input'=>'email'],
    ['label'=>'Please click <a href="https://www.efset.org/ef-set-50/" target="_blank">here</a> and take this 50 minute English test and attach the link to your results!
    ', 'id'=>'url', 'input'=>'url" placeholder="https://www.efset.org/cert/example']
    ];
    
    $formcheck = [['legend'=>'Are you looking to work full time?', 'id'=>'fulltime', 'op1'=> 'Yes', 'op2'=>'No'],
    ['legend'=>'Are you available to commit to working 8hs from Mon-Fri between
    9am and 10pm CST?', 'id'=>'week', 'op1'=> 'Yes', 'op2'=>'No'],
    ['legend'=>'Are you willing to work 3hs of your choice during the weekend?', 'id'=>'weekend', 'op1'=> 'Yes', 'op2'=>'No'],
    'college'=>['legend'=>'Are you currently working or attending college?', 'id'=>'college', 'op1'=> 'Yes', 'op2'=>'No'],
    ['legend'=>'Are you looking for a long-term commitment', 'id'=>'longterm', 'op1'=> 'Yes', 'op2'=>'No'],
    ['legend'=>'What income are you searching to achieve?', 'id'=>'income', 'op1'=> 'U$D 560', 'op2'=>'U$D 1500+'],
    ['legend'=>'Do you posses all the technological requirements?', 'id'=>'tech', 'op1'=> 'Yes', 'op2'=>'No']
    ];
    
    echo '<div class="container-fluid row">
    <form action="send.php" method="get" class="needs-validation col-xl-7 col-sm-11 col-11" novalidate>
      <div>';
    $age = 16;  
    foreach ($formtext as $item) {
        echo '<div class="form-group tvac-form row jc-center">
                <label for="'.$item['id'].'" class="col-sm-3 col-10">'.$item['label'].'</label>
                <input type="'.$item['input'].'" name="'.$item['id'].'" id="'.$item['id'].'" class="col-xl-5 col-sm-8 col-10 form-control" minlegth="2" autocomplete="off" required />
                ' .$valid.'
                <div class="invalid-feedback">Please complete this field</div>
              </div>';
      if ($item === $formtext['lastname']) {
        echo '<div class="form-group tvac-select row jc-center">
                <label for="age" class="col-sm-3 col-10">Age</label>        
                <select class="form-select col-xl-5 col-sm-8 col-10" aria-label="Default select example" id="age" name="age" required>
                <option selected>Select your age</option>';

        while($age<=90){
            echo '<option value="'.$age.'">'.$age.'</option>';
            $age++;
        } 
        echo '</select>
              '.$valid.'
              <div class="invalid-feedback">Please select your age</div>
            </div>';
      }
    }

    foreach ($formcheck as $item) {
        echo '<div class="row tvac-check jc-center ">
                <legend class="col-8">'.$item['legend'].'</legend>
              </div>
              <div class="row tvac-check jc-center">
                <div class="form-check col-xl-1 col-2">
                  <input class="form-check-input" type="radio" name="'.$item['id'].'" id="'.$item['id'].'yes" required/>
                 <label class="form-check-label" for="'.$item['id'].'yes"> '.$item['op1'].' </label>
                </div>
                <div class="form-check margin_bottom col-xl-1 col-2">
                  <input class="form-check-input" type="radio" name="'.$item['id'].'" id="'.$item['id'].'no"/>
                  <label class="form-check-label" for="'.$item['id'].'no"> '.$item['op2'].' </label>
                </div>
              </div>';
        if ($item === $formcheck['college']) {
            echo '<div class="form-group tvac-form row jc-center">
            <label for="explain" class="col-sm-3 col-10">Explain why this wont affect your commitment to the job.</label>
            <input type="explain" name="explain" id="explain" minlegth="2" class="col-xl-5 col-sm-8 col-10" required />
            ' .$valid.'
            <div class="invalid-feedback">Please complete this field</div>
          </div>';
        }
    }
    echo '</div>
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>';
?>