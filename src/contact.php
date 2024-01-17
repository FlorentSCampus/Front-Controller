<?php
$date = date("__Y_m_d__H_i_s");
$filename = "contact";
$filename = $filename . $date . ".txt";

$filters = array(
    "gender" => FILTER_DEFAULT,
    "first_name" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "last_name" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "email" => FILTER_VALIDATE_EMAIL,
    "radio" => FILTER_DEFAULT,
    "message" => FILTER_SANITIZE_FULL_SPECIAL_CHARS
);

$result = filter_var_array($_POST, $filters);
$length = count($result);

if ($is_post && empty($error)) {
    if ($file_exists) {
        //file_put_contents("./data/" . $filename, $data);
    }
}
?>

<form action="index.php?page=contact" method="post">
    <?= (empty(array_values($result)[0])) ? "Veuillez sélectionner un entrée dans la liste ci-dessous" : null; ?>
    <div class="select">
        <label for="gender">Civilité</label>
        <select id="gender" name="gender">
            <option value="">---Please choose a civility---</option>
            <option value="M">M.</option>
            <option value="Mme">Mme</option>
        </select>
    </div>
    <br>
    <div class="identity">
    <?= (empty(array_values($result)[1])) ? "Veuillez renseigner votre prénom" : null; ?>
        <div>
            <label for="first_name">Prénom</label>
            <input type="text" id="first_name" name="first_name" />
        </div>
        <br>
    <?= (empty(array_values($result)[2])) ? "Veuillez renseigner votre nom" : null; ?>
        <div>
            <label for="last_name">Nom</label>
            <input type="text" id="last_name" name="last_name" />
        </div>
    </div>
    <br>
    <?= (empty(array_values($result)[3])) ? "Veuillez renseigner votre email" : null; ?>
    <div class="email">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
    </div>
    <br>
    <?= (empty(array_values($result)[4])) ? "Veuillez sélectionner une option" : null; ?>
    <div class="object">
        <fieldset>
            <div>
                <input type="radio" id="first" name="radio" value="Proposition d’emploi" />
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
    <br>
    <?= (empty(array_values($result)[5])) ? "Veuillez renseigner votre message" : null; ?>
    <div class="message">
        <label for="message">Message</label>
        <textarea id="message" name="message" minlength="0" placeholder="Message here..."></textarea>
    </div>
    <br>
    <input type="submit" value="Send !" />
</form>

<br>
<br>
<br>

<?php
for ($i = 0; $i < count($result); $i++) {
    if (empty(array_values($result)[$i])) {
        echo "Field [" . array_keys($result)[$i] . "] is empty <br>";
    }
}
?>