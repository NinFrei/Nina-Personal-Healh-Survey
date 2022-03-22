<?php
session_start();
session_destroy();

include 'includ/header.php';
?>

<div class="row">

<!--<div class="col-sm-8">-->
   <div class="container pt-3 text-primary">
                <h1>Willkommen beim Gesundheitskompass</h1>

                <h2>Ihre Meinung zur personlichen Beratung für "fitandwell.ch"</h2>
                <p>Vielen Dank, dass Sie sich einem Moment Zeit nehmen. Ihre Angaben werden selbstverständlich vertraulich behalten.</p>
            

    
        <div class="container pt-3 text-black">
            
            <h7>Frage 1:</h7>
            <h3>Wie gesund sind Sie du körperlich?</h3>

            <form action="question-2.php" method="post" onsubmit="return validateQuestion('range-slider');"> 

                <p class="instruction">Schätze deine Gesundheit mit dem Slider ein.</p>


                <div class="row flex-nowrap">
                    <div class="col">
                        <p>Ungesund</p>
                    </div>
                    <div class="col" style="text-align: center;">
                        <p>Nicht ganz Gesund</p>
                    </div>
                    <div class="col" style="text-align: right;">
                        <p>Gesund</p>
                    </div>
                </div>

                    <input type="range" value="" name="range-slider1" class="form-range" min="0" max="4" step="1" id="range-slider" onchange="sliderChanged();">

                    <input type="hidden" name="lastPageID" value="index">
                    <p id="validation-warning" class="warning"></p>

                    <input type="hidden" id="range-slider-changed" name="range-slider-changed">
                   <!-- zum Debugen <input id="sliderValue" type="text" value=""> -->
                <button type="submit" class="bth btn-primary">
                    Next</button>
               
            
           </form> 
        </div>
    </div>
   
</div> 
<?php include 'includ/footer.php'; ?>


