<?php include 'includ/header.php'; ?>
<?php include 'includ/data-collection.php'; ?>

<div class="row">
<div class="col-sm-8">
    <!-- CONTENT -->
    <h7>Frage 5</h7>
      <h3>Hast du das Gefühl, zu wenig, genügend
oder viel zu viel zusätzliche körperliche
Aktivitäten zu betreiben?</h3>
</div>


            
            
            <form action="question-6.php" method="post" onsubmit="return validateQuestion('range-slider');">

            <div class="row flex-nowrap">
                    <div class="col">
                        <p>Viel zu wenig</p>
                    </div>
                    <div class="col" style="text-align: center;">
                        <p>gerade richtig </p>
                    </div>
                    <div class="col" style="text-align: right;">
                        <p>Viel zu viel</p>
                    </div>
                </div>
       <input type="range" value="" name="range-slider" class="form-range" min="0" max="4" step="1" id="range-slider" onchange="sliderChanged();">

        <input type="hidden" name="lastPageID" value="question-5">
        <p id="validation-warning" class="warning"></p>

        <input type="hidden" id="range-slider-changed" name="range-slider-changed">


        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>



      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'includ/footer.php'; ?>

                
            
           