<?php
$arabica=$_POST['arabica'];
$robusta=$_POST['robusta'];
$mix=$_POST['mix'];
$winien=$arabica*14.69+$robusta*11.70+$mix*13.20;

echo<<<END
<h2 class="title_2"> Złożono zamówienie </h2>
<table border="1" cellspacing="0" class="receive_frame">
    <tr>
        <td class="receive_frame_cell"> Arabica (14.69 PLN/100g)</td> <td> $arabica szt. </td>
    </tr>
    <tr>
        <td class="receive_frame_cell"> Robusta (11.70 PLN/100g)</td> <td> $robusta szt. </td>
    </tr>
    <tr>
        <td class="receive_frame_cell"> Mieszane 50/50 (13.20 PLN/100g)</td> <td> $mix szt. </td>
    </tr>
    <tr>
        <td class="receive_frame_cell"> Wartość Zamówienia </td> <td> $winien PLN </td>
    </tr>
</table>
<br/> <br/>
<a href="index.php?id=3" class="btn_form"> wróć do strony głównej </a>
END
?>