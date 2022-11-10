<?php if(!$_GET['p']){
    Header('Location: survey.php?p=1');
} ?>
<?php include 'function/question.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body * {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* The container */
        .c-input {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        /* Hide the browser's default checkbox */
        .c-input input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .c-input:hover input ~ .checkmark {
        background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .c-input input:checked ~ .checkmark {
        background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }

        /* Show the checkmark when checked */
        .c-input input:checked ~ .checkmark:after {
        display: block;
        }

        /* Style the checkmark/indicator */
        .c-input .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        }
    </style>
    <title>Exit Interview</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <form id="regForm">
                    <h1 id="register">Exit Interview Form</h1>
                        <div class="tab">
                            <?php foreach($result_data as $r){ ?>
                                <?php if($r['part'] == 1 && $_GET['p'] == 1){ ?>
                                    <h6 class="mt-5"><?=$r['id'].'. '.$r['question']?></h6>
                                    <?php if($r['options'] != ""){ ?>
                                        <div class="row">
                                            <?php
                                                $option = explode(' ,', $r['options']);
                                                for($o = 0; $o < 8; $o++){ ?>
                                                    <section class="col-md-4">
                                                        <label class="c-input"><?=$option[$o];?>
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </section>
                                            <?php } ?>
                                            <section class="col-md-12">
                                                <label class="c-input"><?=$option[8];?> <input placeholder="Please Specify" style="height: 30px !important;width: 400px !important;opacity: 1;border-radius: 0px;margin-left: 10px;" oninput="this.className = ''" name="fname">
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                            </section>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['answer'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label for="">Answer: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <div class="col-md-12" style="display: flex; margin-left: -3%;">
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
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Why: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['recommendation'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Recommendation: </label>
                                            <textarea oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                <?php } ?>

                                <?php if($r['part'] == 2 && $_GET['p'] == 2){ ?>
                                    <h6 class="mt-5"><?=$r['id'].'. '.$r['question']?></h6>
                                    <?php if($r['subject'] != ""){ ?>
                                        <div class="col-md-6 mt-2" style="margin-left: -15px;">
                                            <label for="">Subject(s): </label>
                                            <input placeholder="" oninput="this.className = ''" name="fname">
                                        </div>  
                                    <?php } ?>
                                    <?php if($r['options'] != ""){ ?>
                                        <div class="row">
                                            <?php
                                                $option = explode(' ,', $r['options']);
                                                for($o = 0; $o < 8; $o++){ ?>
                                                    <section class="col-md-4">
                                                        <label class="c-input"><?=$option[$o];?>
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </section>
                                            <?php } ?>
                                            <section class="col-md-12">
                                                <label class="c-input"><?=$option[8];?> <input placeholder="Please Specify" style="height: 30px !important;width: 400px !important;opacity: 1;border-radius: 0px;margin-left: 10px;" oninput="this.className = ''" name="fname">
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                            </section>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['answer'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label for="">Answer: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <div class="col-md-12" style="display: flex; margin-left: -3%;">
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
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Why: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['recommendation'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Recommendation: </label>
                                            <textarea oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                <?php } ?>

                                <?php if($r['part'] == 3 && $_GET['p'] == 3){ ?>
                                    <h6 class="mt-5"><?=$r['id'].'. '.$r['question']?></h6>
                                    <?php if($r['subject'] != ""){ ?>
                                        <div class="col-md-6 mt-2" style="margin-left: -15px;">
                                            <label for="">Subject(s): </label>
                                            <input placeholder="" oninput="this.className = ''" name="fname">
                                        </div>  
                                    <?php } ?>
                                    <?php if($r['options'] != ""){ ?>
                                        <div class="row">
                                            <?php
                                                $option = explode(' ,', $r['options']);
                                                for($o = 0; $o < 8; $o++){ ?>
                                                    <section class="col-md-4">
                                                        <label class="c-input"><?=$option[$o];?>
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </section>
                                            <?php } ?>
                                            <section class="col-md-12">
                                                <label class="c-input"><?=$option[8];?> <input placeholder="Please Specify" style="height: 30px !important;width: 400px !important;opacity: 1;border-radius: 0px;margin-left: 10px;" oninput="this.className = ''" name="fname">
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                            </section>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['answer'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label for="">Answer: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <div class="col-md-12" style="display: flex; margin-left: -3%;">
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
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Why: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['recommendation'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Recommendation: </label>
                                            <textarea oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                <?php } ?>

                                <?php if($r['part'] == 4 && $_GET['p'] == 4){ ?>
                                    <h6 class="mt-5"><?=$r['id'].'. '.$r['question']?></h6>
                                    <?php if($r['subject'] != ""){ ?>
                                        <div class="col-md-6 mt-2" style="margin-left: -15px;">
                                            <label for="">Subject(s): </label>
                                            <input placeholder="" oninput="this.className = ''" name="fname">
                                        </div>  
                                    <?php } ?>
                                    <?php if($r['options'] != ""){ ?>
                                        <div class="row">
                                            <?php
                                                $option = explode(' ,', $r['options']);
                                                for($o = 0; $o < 8; $o++){ ?>
                                                    <section class="col-md-4">
                                                        <label class="c-input"><?=$option[$o];?>
                                                            <input type="checkbox" >
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </section>
                                            <?php } ?>
                                            <section class="col-md-12">
                                                <label class="c-input"><?=$option[8];?> <input placeholder="Please Specify" style="height: 30px !important;width: 400px !important;opacity: 1;border-radius: 0px;margin-left: 10px;" oninput="this.className = ''" name="fname">
                                                    <input type="checkbox" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                            </section>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['answer'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label for="">Answer: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <div class="col-md-12" style="display: flex; margin-left: -3%;">
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
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Why: </label>
                                            <textarea  oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                    <?php if($r['recommendation'] != ""){ ?>
                                        <div style="display: grid;">
                                            <label class="mt-2" for="">Recommendation: </label>
                                            <textarea oninput="this.className = ''" name="answer-<?=$r['id']?>" id="" cols="78" rows="3"></textarea>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                                
                                <?php if($_GET['p'] >= 5 ){
                                    Header('Location: survey.php?p=1');
                                } ?>
                                
                             <?php } ?>
                        </div>
                    <div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thankyou for your feedback!</h3> <span>Thanks for your valuable information. It helps us to improve our services!</span>
                    </div>
                    <div style="overflow:auto; margin-top: 20px;" id="nextprevious" >
                        
                            <div style="float:right;">
                                <a href="survey.php?p=<?=$_GET['p']-1?>" style=" <?php if($_GET['p'] == 1){ echo 'display:none'; } ?> "><button type="button" class="fa fa-angle-double-left"></button> </a>
                                <a href="survey.php?p=<?=$_GET['p']+1?>" style=" <?php if($_GET['p'] == 4){ echo 'display:none'; } ?> "><button type="button" class="fa fa-angle-double-right"></button> </a>
                            </div>
                    </div>
                        
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

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

</html>


