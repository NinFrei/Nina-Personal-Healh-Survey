<?php include 'includ/header.php'; ?>
<?php include 'includ/data-collector.php'; ?>

  <div class="row">
    <div class="col-sm-8">
      <!-- CONTENT -->
      <h7>Frage 8</h7>
      <h3>An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten
Gemüse?</h3>

      <form action="question-9.php" method="post" onsubmit="return validateQuestion('number-text');">

        <label for="inputPassword5" class="form-label">Anzahl Mahlzeiten pro Tag</label>

        <input type="number" name="number-text" id="number-text" class="form-control"  min="0" max="5" style="max-width: 80px";>

        <input type="hidden" name="lastPageID" value="question-8">
        <p id="validation-warning" class="warning"></p>

        <button type="submit" class="btn btn-primary">Next</button>
        <p class="spacer"></p>
      </form>
      
      <!-- END OF CONTENT -->
    </div>
  </div>

<?php include 'includ/footer.php'; ?>
