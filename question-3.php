<?php include 'includ/header.php'; ?>
<?php include 'includ/data-collector.php'; ?>

<div class="row">
<div class="col-sm-8">
    <!-- CONTENT -->
    <h7>Frage 3</h7>
      <h3>Wie wichtig ist köperliche Aktivität für
dich?</h3>z

      <form action="question-4.php" method="post" onsubmit="return validateQuestion('range-slider');">
        <!--<div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
            <label class="form-check-label" for="single-choice-0">
                Ja
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
            <label class="form-check-label" for="single-choice-1">
                Nein
            </label>
        </div>-->

        <div class="row flex-nowrap">
                    <div class="col">
                        <p>Überhaupt nicht wichtig</p>
                    </div>
                    <div class="col" style="text-align: center;">
                        <p>Wichtig </p>
                    </div>
                    <div class="col" style="text-align: right;">
                        <p>Sehr wichtig</p>
                    </div>
                </div>
       <input type="range" value="" name="range-slider" class="form-range" min="0" max="4" step="1" id="range-slider" onchange="sliderChanged();">

        <input type="hidden" name="lastPageID" value="question-3">
        <p id="validation-warning" class="warning"></p>

        <input type="hidden" id="range-slider-changed" name="range-slider-changed">


        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>
      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'includ/footer.php'; ?>
