<!DOCTYPE html>
<?php


use \Tastyrecipe\Integration\PersonDAO;

function createDb() {
    return new PersonDAO();
}

function listAllPersons(PersonDAO $personDAO) {
    echo '<p>All persons:</p>';
    echo '<table><tr><th>name</th><th>age</th><th>phone</th></tr>';
    $persons = $personDAO->getAllPersons();
    foreach ($persons as $person) {
        echo '<tr><td>' . $person->getName() . '</td><td>' . $person->getAge() . '</td><td>' .
            $person->getPhone() . '</td></tr>';
    }
    echo '</table>';
}
?>

<?php
$personDAO = createDb();
listAllPersons($personDAO);
?>

<h2>Inserting Persons</h2>
<?php
$personDAO->createPerson('stina', 45, '8742398');
$personDAO->createPerson('nisse', 28, '5672532');
listAllPersons($personDAO);
?>

<h2>Updating a Person</h2>
<?php
$personDAO->updatePerson('stina', 46, '8742398');
listAllPersons($personDAO);
?>

<h2>Deleting a Person</h2>
<?php
$personDAO->deletePersonByName('stina');
listAllPersons($personDAO);
?>
</body>
</html>
