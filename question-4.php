<?php include 'includ/header.php'; ?>
<?php include 'includ/data-collector.php'; ?>

<div class="row">
<div class="col-sm-8">
    <!-- CONTENT -->
    <h7>Frage 4</h7>
      <h3>Welche zusätzliche körperliche Aktivität
betreibst du am meisten?</h3>

<form action="question-5.php" method="post" onsubmit="return validateQuestion('single-choice-0', 'single-choice');">

        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-0" value="0">
            <label class="form-check-label" for="single-choice-0">
            Keine zusätzliche körperliche Aktivität
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="1">
            <label class="form-check-label" for="single-choice-1">
            Gewichte heben 
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="2">
            <label class="form-check-label" for="single-choice-1">
            Gehen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="3">
            <label class="form-check-label" for="single-choice-1">
            Wandern
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="4">
            <label class="form-check-label" for="single-choice-1">
            Joggen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="5">
            <label class="form-check-label" for="single-choice-1">
            Rennen 
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="6">
            <label class="form-check-label" for="single-choice-1">
            Schwimmen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="7">
            <label class="form-check-label" for="single-choice-1">
            Tanzen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="8">
            <label class="form-check-label" for="single-choice-1">
            Aerobics
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="9">
            <label class="form-check-label" for="single-choice-1">
            Pilates
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="10">
            <label class="form-check-label" for="single-choice-1">
            Team Sport
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="single-choice" id="single-choice-1" value="11">
            <label class="form-check-label" for="single-choice-1">
            Andere
            </label>
        </div>

        <input type="hidden" name="lastPageID" value="index">
        <p id="validation-warning" class="warning"></p>

        <input type="hidden" name="lastPageID" value="question-3">



        <!--<input type="hidden" id="checkboxValue" name="checkboxValue">-->
        <p id="validation-warning" class="warning"></p>
        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>

      <!-- END OF CONTENT -->
    </div>
    </div>

<?php include 'includ/footer.php'; ?>
