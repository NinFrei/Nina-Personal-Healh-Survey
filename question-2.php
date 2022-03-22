<?php include 'includ/header.php'; ?>
<?php include 'includ/data-collector.php'; ?>

<div class="row">
<div class="col-sm-8">
    <!-- CONTENT -->
    <h7>Frage 2</h7>
      <h3>Nimmst du Nahrungsergänzungsmittel?</h3>

      <form action="question-3.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">
      <div class="form-check">
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
        </div>

        <!--<input type="range" value="" name="range-slider1" class="form-range" min="0" max="4" step="1" id="range-slider" onchange="sliderChanged();">

        <input type="hidden" name="lastPageID" value="question-2">
        <p id="validation-warning" class="warning"></p>

       <!-- <input type="hidden" id="range-slider-changed" name="range-slider-changed">-->

        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>

      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'includ/footer.php'; ?>
