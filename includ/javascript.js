var slideValue = 0;

function storeValue(rangeValue) {
    slideValue = rangeValue;
    document.getElementById("sliderValue").value = slideValue;
    document.getElementById("validation-warning").innerHTML = "";
}
/* Debug Funktion*/
/*
function showValue() {
    document.getElementById("Value").value = slideValue;
}
*/

/*function validateQuestion() {
    let sliderValue = document.getElementById("range-slider").value;

    if (parseInt(sliderValue) < 1) {
        document.getElementById("fehlermeldung").innerHTML = "Bitte geben sie eine Antwort ein!";
        return false;
    }
}

function validateCheckboxes() {
    // Sammeln alle werte der ausgewählten (checked) Checkboxen.
    // (Bento-Box) CSS Selector
    let array = [];
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked'); // Bento-Box Selector

    for (let i = 0; i < checkboxes.length; i++) {//Value ist jeweils ein String.
        array.push(checkboxes[i].value);
    }
    //Falls keine Checkbox gewählt wurde ist array === [].
    if (checkboxes.length === 0) {
        setWarning("Bitte wähle zumindestens eine Checkbox aus.");
        return false; //Bei false wird weiter Submit gestopt.
    }
    //Checkboxe(n) wurde(e) gewählt: Setze Liste in ein 'hidden' Inputfeld.
    // value muss ein String, also muss array in einen String konvertiert werden
    document.firstElementById("checkboxValue").value = array.toString();
}*/
function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Bitte wähle aus");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
        if (!value) {
            // Früher mit alert("Bla bla ...");
            setWarning("Bitte geben sie eine Antwort ein!");
            return false;
        }
    }
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

// Validierung Checkboxen

function validateCheckboxes() {
    // sammeln alle werte der ausgewählten (checked) Checkboxen.
    // (Bento-Box) CSS Selector !!!
    let array = [];
    let checkboxes = document.querySelectorAll('input[type=checkbox]:checked');

    for (let i = 0; i < checkboxes.length; i++) {
        array.push(checkboxes[i].value);   // value ist jewels ein String.
    }

    // Falls keine Checkbox gewält wurde sit array === [].
    if (array.length === 0) {
        setWarning("Bitte wähle zumindest eine Checkbox aus.");
        return false; // Bei false wird der weitere Submit gestoppt.

    }

    // Checkbox wurde(n) gewählt: Setzte Liste in ein 'hidden' Inputfeld
    // value muss ein String sein, also muss array in einen String konveriert werden.
    document.getElementById("checkboxValues").value = array.toString();
}

