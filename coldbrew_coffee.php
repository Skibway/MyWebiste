<div class="text_style">
    <h1>Kawa Macerowana</h1>
    <h3>
        Macerowanie to nic innego jak parzenie na zimno, jest to bardzo dobry sposób 
        na upalne dni gdy mamy ochotę na zimny napój. W dodatku na przykład kawa macerowana
        posiada bogatsze nuty smakowe niż taka parzona na gorąco.
    </h3>
    <h3>jeżeli kiedykolwiek interesowało cię przygotowanie własnej kawy macerowanej, 
        to poniżej przedstawiam krótką instrukcję.
    </h3>
    <div>
        <p>
            Do kawy macerowanej używamy z reguły średnio lub słabo palone ziarna, 
            jednak wybór należy do nas, warto testować. Woda musi być filtrowana i przegotowana, 
            ze względu na występowanie bakterii, np. bakterie coli giną w temp 60º.
        </p>
        <p>
            Dobrze jest mieć jakiś pojemnik szklany, może być słoik lub butelka szczelnie zamykana (naczynia muszą być czyste). 
            Warto zaopatrzyć się także w filtr do kawy, gdy nie mamy spejclanych pojemników z filtrami.
        </p>
        <hr>
        <div>
            <h4>
                Kalkulator do macerowania
            </h4>
            <p>
                Przedstawiam kalkulator w którym policzycie 
                ile gramów kawy potrzebujecie na na konkretną ilość wody.
                Ziarna warto mielić między średnią grubością a bardzo grubo mielone.
            </p>
            <p>
                Grubość zmielenia sprawdzisz 
                <a href="index.php?id=2">Tutaj</a>
            </p>
            <form action="" method="post">
            <input type="text" name="macerowana" class="input_elem"/> wprowadź ilość wody którą 
            chcesz wykorzystać do macerowania w (ml)
            <br/><br/>
            <input type="submit" value="policz" class="btn_form"/>
            </form>
            <?php
                if(isset($_POST['macerowana'])){
                    $macerowana=$_POST["macerowana"];
                    $wynik=($macerowana*6)/100;
                    echo "<h4>Do $macerowana ml potrzeba $wynik g mielonej kawy</h4>";
                } else {
                    echo "";
                }
                ?>
                <p>
                    Pamiętajmy o tym aby dobierać ilość 
                    płynu w stosunku do pojemności naczynia + objętość kawy w naczyniu.
                </p>
        </div>
        <hr>
        <p>
            Zmieloną kawę przesypujemy do naczynia i zalewamy wodą. Nie trzeba mieszać. 
            Naszą przygotowaną kawę wkładamy do lodówki, optymalny czas macerowania to około 24h, 
            ale można zostawić na dłużej.
        </p>
        <p>
            Gdy kawa będzie gotowa, przelewamy do naczynia przez filtr do kawy.
        </p>
        <p>
            Szkoda wyrzucać fusy, można wykorzystać dla roślinek, albo nawet zrobić pilling kawowy (polecam) :). 
            Jeżeli jednak chcemy wyrzucić kawę zawsze wyrzucajmy do śmieci, wyrzucanie kawy do odpływu może skończyć się zapchaniem.
        </p>
        <p>
            Brawo!!! Mamy przygotowaną kawę. Dobry zastępca dla Caffe Frappe jeśli ktoś wolałby 
            kawę sypaną a nie rozpuszczalną.
        </p>
    </div>
</div>