
<?php include 'layout/header.php'; ?>
<?php include 'function/question.php'; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<style>
    body * {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <form id="regForm">
                    <h1 id="register">Survey Form</h1>
                    <div class="all-steps" id="all-steps"> 
                        <?php for($p = 0; $p <= 3; $p++){ ?>
                        <?php
                            if($p == 0){
                                $part_icon = 'user';
                            }elseif($p == 1){
                                $part_icon = 'map-marker';
                            }elseif($p == 2){
                                $part_icon = 'shopping-bag';
                            }elseif($p == 3){
                                $part_icon = 'car';
                            }
                        ?>
                            <span class="step"><i class="fa fa-<?=$part_icon;?>"></i></span> 
                        <?php } ?>
                      
                      <!-- <span class="step"><i class="fa fa-map-marker"></i></span>
                      <span class="step"><i class="fa fa-shopping-bag"></i></span>
                      <span class="step"><i class="fa fa-car"></i></span>
                      <span class="step"><i class="fa fa-spotify"></i></span>
                      <span class="step"><i class="fa fa-mobile-phone"></i></span> -->
                    </div>
                    <?php for($p = 0; $p <= 3; $p++){ ?>

                        <div class="tab">
                            <?php foreach($result_data as $r){ ?>
                                <?php if($r['part'] == 1){ ?>
                                    <h6 class="mt-5"><?=$r['id'].'. '.$r['question']?></h6>
                                    <?php if($r['answer'] != ""){ ?>
                                        <label for="">Answer: </label>
                                        <textarea style="width: 95%;" oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                    <?php } ?>
                                    <div class="col-md-12" style="display: flex; margin-left: -5%;">
                                        <?php if($r['name_instructor'] != ""){ ?>
                                            <div class="col-md-6 mt-2">
                                                <label for="">Name of Instructor(s): </label>
                                                <input placeholder="" oninput="this.className = ''" name="fname">
                                            </div>
                                        <?php } ?>
                                        <?php if($r['subject_handle'] != ""){ ?>
                                            <div class="col-md-6 mt-2">
                                                <label for="">Subject Handled: </label>
                                                <input placeholder="" oninput="this.className = ''" name="fname">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <?php if($r['why'] != ""){ ?>
                                        <p><input style="mb-1" placeholder="Name..." oninput="this.className = ''" name="fname"></p>
                                    <?php } ?>
                                    <?php if($r['recommendation'] != ""){ ?>
                                        <label class="mt-2" for="">Recommendation: </label>
                                        <textarea style="width: 95%;" oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                    <?php } ?>
                                <?php } ?>
                             <?php } ?>
                           
                            
                        </div>
                    <?php } ?>
                    <!-- <div class="tab">
                      <h6>What's your city?</h6>
                        <p><input placeholder="City" oninput="this.className = ''" name="dd"></p>
                        
                    </div>
                    <div class="tab">
                        <h6>What's your Favourite Shopping site?</h6>
                        <p><input placeholder="Favourite Shopping site" oninput="this.className = ''" name="email"></p>
                     
                    </div>
                    <div class="tab">
                        <h6>What's your Favourite car?</h6>
                        <p><input placeholder="Favourite car" oninput="this.className = ''" name="uname"></p>
                    </div>
    
                    <div class="tab">
                        <h6>What's your Favourite Song?</h6>
                        <p><input placeholder="Favourite Song" oninput="this.className = ''" name="uname"></p>
                    </div>
    
    
                    <div class="tab">
                        <h6>What's your Favourite Mobile brand?</h6>
                        <p><input placeholder="Favourite Mobile Brand" oninput="this.className = ''" name="uname"></p>
                    </div> -->
                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
                    </div>
                    <div style="overflow:auto;" id="nextprevious">
                        <div style="float:right;">
                          <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> 
                          <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              } else {
              document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }
</script>
<?php include 'layout/footer.php'; ?>