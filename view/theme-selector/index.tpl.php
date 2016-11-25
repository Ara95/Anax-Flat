<?php
/**
 * Theme selector in the design course.
 */

?><article>
<h1>Tema väljare</h1>

<form method="post">
    <fieldset>
        <legend>Välj ett tema</legend>
        <select name="theme" onchange="form.submit();">
            <option value="-1">Inget specifikt tema valt.</option>
            <option value="-2">Deaktivera nuvarande tema och använd default.</option>
            <?php foreach ($themes as $key => $value) :
                $selected = $key == $currentTheme["key"]
                    ? "selected"
                    : null;
                $separate = $value === $separator
                    ? "disabled=\"disabled\""
                    : null;
                $value = $separate
                    ? $separator
                    : "$key - " . $value["title"];
            ?>
                <option value="<?= $key ?>" <?= $selected ?> <?= $separate ?>>
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select>

        <output>
            <?php if ($message) : ?>
                <p><?= $message ?></p>
            <?php endif; ?>
        </output>
    </fieldset>
</form>

<p>Här kan du välja ett tema. Inställningarna för det valda temat sparas i sessionen och appliceras i mallen när sidorna renderas.</p>

<p>Det tema som valts kommer göra följande:</p>

<ul>
    <li>Ta bort alla stylesheets som tidigare definerats i <code>config/theme.php</code>.</li>
    <li>Lägga till klasser till <code>&lt;html&gt;</code> element, om det är definerat.</li>
    <li>Lägga till stylesheets om det blivit definerat.</li>
</ul>


</article>
