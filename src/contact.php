<?php
$date = date('__Y_m_d__H_i_s');
$filename = 'contact';
$filename = $filename . $date . '.txt';

$filter = filter_input_array(INPUT_POST, $_POST);
$data = json_encode($filter);

echo $data; // cherche un moyen de retourner le tableau de façon lisible

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!file_exists("./data/" . $filename)) {
        //file_put_contents("./data/" . $filename, $data);
    }
}
?>


<form action="index.php?page=contact" method="post">
    <div class="select">
        <label for="gender">Civilité</label>
        <select id="gender" name="gender">
            <option value="">---Please choose a civility---</option>
            <option value="M">M.</option>
            <option value="Mme">Mme</option>
        </select>
    </div>
    <div class="identity">
        <div>
            <label for="first_name">First name</label>
            <input type="text" id="first_name" name="first_name" />
        </div>
        <div>
            <label for="last_name">Last name</label>
            <input type="text" id="last_name" name="last_name" />
        </div>
    </div>
    <div class="email">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
    </div>
    <div class="object">
        <fieldset>
            <div>
                <input type="radio" id="first" name="radio" value="Proposition d’emploi" checked />
                <label for="first">Proposition d’emploi</label>
            </div>
            <div>
                <input type="radio" id="second" name="radio" value="Demande d’information" />
                <label for="second">Demande d’information</label>
            </div>
            <div>
                <input type="radio" id="last" name="radio" value="Prestations" />
                <label for="last">Prestations</label>
            </div>
        </fieldset>
    </div>
    <div class="message">
        <label for="message">Message</label>
        <textarea id="message" name="message" minlength="0" placeholder="Message here..."></textarea>
    </div>
    <input type="submit" value="Send !" />
</form>