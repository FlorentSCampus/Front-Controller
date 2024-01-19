<form action='index.php?page=contact' method='post'>
    <?= (isset($result) && empty(array_values($result)[0])) ? $errors['gender'] : null; ?>
    <div class='select'>
        <label for='gender'>Civilité</label>
        <select id='gender' name='gender'>
            <option value=''>---Please choose a civility---</option>
            <option value='M'>M.</option>
            <option value='Mme'>Mme</option>
        </select>
    </div>
    <br>
    <div class='identity'>
        <?= (isset($result) && empty(array_values($result)[1])) ? $errors['firstName'] : null; ?>
        <div>
            <label for='firstName'>Prénom</label>
            <input type='text' id='firstName' name='firstName' />
        </div>
        <br>
        <?= (isset($result) && empty(array_values($result)[2])) ? $errors['lastName'] : null; ?>
        <div>
            <label for='lastName'>Nom</label>
            <input type='text' id='lastName' name='lastName' />
        </div>
    </div>
    <br>
    <?= (isset($result) && empty(array_values($result)[3])) ? $errors['email'] : null; ?>
    <div class='email'>
        <label for='email'>Email</label>
        <input type='email' id='email' name='email' />
    </div>
    <br>
    <?= (isset($result) && empty(array_values($result)[4])) ? $errors['radio'] : null; ?>
    <div class='object'>
        <fieldset>
            <div>
                <input type='radio' id='first' name='radio' value='Proposition d’emploi' />
                <label for='first'>Proposition d’emploi</label>
            </div>
            <div>
                <input type='radio' id='second' name='radio' value='Demande d’information' />
                <label for='second'>Demande d’information</label>
            </div>
            <div>
                <input type='radio' id='last' name='radio' value='Prestations' />
                <label for='last'>Prestations</label>
            </div>
        </fieldset>
    </div>
    <br>
    <?php
    if (isset($result) && empty(array_values($result)[5])) {
        echo $errors['message'];
    } else {
        if (strlen(array_values($result)[5]) < 5) {
            echo $errors['messageLetters'];
        }
    }
    ?>
    <div class='message'>
        <label for='message'>Message</label>
        <textarea id='message' name='message' minlength='0' placeholder='Message here...'></textarea>
    </div>
    <br>
    <input type='submit' value='Send !' />
</form>

<br>
<br>
<br>

<?php
for ($i = 0; $i < $length; $i++) {
    if (isset($result) && empty(array_values($result)[$i])) {
        echo 'Field [' . array_keys($result)[$i] . '] is empty <br>';
    }
}
?>