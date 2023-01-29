<?php
$arabica=$_POST['arabica'];
$robusta=$_POST['robusta'];
$mix=$_POST['mix'];
$winien=$arabica*5.50+$robusta*5.50+$mix*6.20;

echo<<<END
<h2> Złożono zamówienie </h2>
<table class="receive_frame">
    <tr>
        <td> Arabica (14.69 PLN/100g)</td> <td> $arabica szt. </td>
    </tr>
    <tr>
        <td> Robusta (11.70 PLN/100g)</td> <td> $robusta szt. </td>
    </tr>
    <tr>
        <td> Mieszane 50/50 (13.20 PLN/100g)</td> <td> $mix szt. </td>
    </tr>
    <tr>
        <td> wartość zamówienia </td> <td> $winien PLN </td>
    </tr>
</table>
<br/> <br/>
<a href="index.php?id=3" class="btn_form"> wróć do strony głównej </a>
END
?>