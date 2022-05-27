<form method="post" class="needs-validation col-xl-7 col-sm-11 col-11" novalidate>
  <input type="hidden" name="ambassador" value="<?php $ambassador ?>">
  <div>
    <div class="form-group tvac-form row jc-center">
      <label for="name" class="col-sm-3 col-10">First Name</label>
      <input type="text" name="name" id="name" class="col-xl-5 col-sm-8 col-10 form-control" minlegth="2" autocomplete="off" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please complete your name</div>
    </div>
    <div class="form-group tvac-form row jc-center">
      <label for="lastname" class="col-sm-3 col-10">Last name</label>
      <input type="text" name="lastname" id="lastname" class="col-xl-5 col-sm-8 col-10 form-control" minlegth="2" autocomplete="off" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please complete your last name</div>
    </div>
    <div class="form-group tvac-select row jc-center">
      <label for="age" class="col-sm-3 col-10">Age</label>
      <select class="form-select col-xl-5 col-sm-8 col-10" aria-label="Default select example" id="age" name="age" required>
        <option selected="">Select your age</option>
        <?php
          $age = 16;
          while($age<=90){
            echo '<option value="'.$age.'">'.$age.'</option>';
            $age++;
        } 
        ?>
      </select>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please select your age</div>
    </div>
    <div class="form-group tvac-form row jc-center">
      <label for="country" class="col-sm-3 col-10">Country of residence</label>
      <input type="text" name="country" id="country" class="col-xl-5 col-sm-8 col-10 form-control" minlegth="2" autocomplete="off" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please complete your country of residence</div>
    </div>
    <div class="form-group tvac-form row jc-center">
      <label for="instagram" class="col-sm-3 col-10">Instagram account</label>
      <input type="text" placeholder="@tvac_co" name="instagram" id="instagram" class="col-xl-5 col-sm-8 col-10 form-control" minlegth="2" autocomplete="off" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please complete your instagram account</div>
    </div>
    <div class="form-group tvac-form row jc-center">
      <label for="email" class="col-sm-3 col-10">E-mail</label>
      <input type="email" name="email" id="email" class="col-xl-5 col-sm-8 col-10 form-control" minlegth="2" autocomplete="off" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please complete your e-mail</div>
    </div>
    <div class="form-group tvac-form row jc-center">
      <label for="url" class="col-sm-3 col-10">Please click <a href="https://www.efset.org/ef-set-50/" target="_blank">here</a> and take this 50 minute English test and attach the link to your results! </label>
      <input type="url" placeholder="https://www.efset.org/cert/example" name="url" id="url" class="col-xl-5 col-sm-8 col-10 form-control" minlegth="2" autocomplete="off" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please enter the link from EFSET</div>
    </div>
    <div class="row tvac-check jc-center ">
      <legend class="col-sm-8 col-12">Are you looking to work full time?</legend>
    </div>
    <div class="row tvac-check jc-center">
      <div class="form-check col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="fulltime" id="fulltimeyes" required value="Yes">
        <label class="form-check-label" for="fulltimeyes"> Yes </label>
      </div>
      <div class="form-check margin_bottom col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="fulltime" id="fulltimeno" value="No">
        <label class="form-check-label" for="fulltimeno"> No </label>
      </div>
    </div>
    <div class="row tvac-check jc-center ">
      <legend class="col-sm-8 col-12">Are you available to commit to working 8hs from Mon-Fri between 9am and 10pm CST?</legend>
    </div>
    <div class="row tvac-check jc-center">
      <div class="form-check col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="week" id="weekyes" required value="Yes">
        <label class="form-check-label" for="weekyes"> Yes </label>
      </div>
      <div class="form-check margin_bottom col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="week" id="weekno" value="No">
        <label class="form-check-label" for="weekno"> No </label>
      </div>
    </div>
    <div class="row tvac-check jc-center ">
      <legend class="col-sm-8 col-12">Are you willing to work 3hs of your choice during the weekend?</legend>
    </div>
    <div class="row tvac-check jc-center">
      <div class="form-check col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="weekend" id="weekendyes" required value="Yes">
        <label class="form-check-label" for="weekendyes"> Yes </label>
      </div>
      <div class="form-check margin_bottom col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="weekend" id="weekendno" value="No">
        <label class="form-check-label" for="weekendno"> No </label>
      </div>
    </div>
    <div class="row tvac-check jc-center ">
      <legend class="col-sm-8 col-12">Are you currently working or attending college?</legend>
    </div>
    <div class="row tvac-check jc-center">
      <div class="form-check col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="college" id="collegeyes" required value="Yes">
        <label class="form-check-label" for="collegeyes"> Yes </label>
      </div>
      <div class="form-check margin_bottom col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="college" id="collegeno" value="No">
        <label class="form-check-label" for="collegeno"> No </label>
      </div>
    </div>
    <div class="form-group tvac-form row jc-center">
      <label for="explain" class="col-sm-3 col-10">Explain why this wont affect your commitment to the job.</label>
      <input type="text" name="explain" id="explain" minlegth="2" class="col-xl-5 col-sm-8 col-10" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Please complete this field</div>
    </div>
    <div class="row tvac-check jc-center ">
      <legend class="col-sm-8 col-12">Are you looking for a long-term commitment</legend>
    </div>
    <div class="row tvac-check jc-center">
      <div class="form-check col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="longterm" id="longtermyes" required value="Yes">
        <label class="form-check-label" for="longtermyes"> Yes </label>
      </div>
      <div class="form-check margin_bottom col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="longterm" id="longtermno" value="No">
        <label class="form-check-label" for="longtermno"> No </label>
      </div>
    </div>
    <div class="row tvac-check jc-center ">
      <legend class="col-sm-8 col-12">What income are you searching to achieve?</legend>
    </div>
    <div class="row tvac-check jc-center">
      <div class="form-check col-xl-1 col-5 col-sm-3">
        <input class="form-check-input" type="radio" name="income" id="income560" required value="560">
        <label class="form-check-label" for="income560"> U$D 560 </label>
      </div>
      <div class="form-check margin_bottom col-xl-1 col-5 col-sm-3">
        <input class="form-check-input" type="radio" name="income" id="income1500" value="1500">
        <label class="form-check-label" for="income1500"> U$D 1500+ </label>
      </div>
    </div>
    <div class="row tvac-check jc-center ">
      <legend class="col-sm-8 col-12">Do you posses all the technological requirements?</legend>
    </div>
    <div class="row tvac-check jc-center">
      <div class="form-check col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="tech" id="techyes" required value="Yes">
        <label class="form-check-label" for="techyes"> Yes </label>
      </div>
      <div class="form-check margin_bottom col-xl-1 col-2">
        <input class="form-check-input" type="radio" name="tech" id="techno" value="No">
        <label class="form-check-label" for="techno"> No </label>
      </div>
    </div>
  </div>
  <div class="button">
    <button type="submit" name="send">Submit</button>
  </div>
</form>