

<body>
<?php include 'includ/header.php'?>
<?php
include 'includ/data-collector.php';?>
<?php include 'includ/evaluate-user-data.php'?>

<!-- Content -->

        <div>
        <p>Feedback<p>
        <p>Danke für Deine Teilnahme!<p> 
        </div>
    
<?php
    echo "<p class='final-feedback'>" . "You are of excellent health!" . "<p>";
?>
<div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-3 col-12">


                </div>
                        <input type="hidden" name="lastPageID" value="result">
                        <p id="validation-warning" class="warning"></p>

                        <a class="btn btn-warning" href="question-10.php" role="button">❮ Zurück</a>

                        <p class="spacer"></p>

            </div>
<!-- Content -->

<?php include 'includes/footer.php'?>
</body>
</html>

