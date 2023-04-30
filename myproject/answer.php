<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $question = $_POST["question"];
  $answer = "Відповідь на ваше питання: " . $question; // Це демо-відповідь. Тут можна додати код для генерації відповіді
  echo '<script>document.getElementById("answer-container").innerHTML = "'. $answer .'";</script>'; // Виводимо відповідь
}
?>