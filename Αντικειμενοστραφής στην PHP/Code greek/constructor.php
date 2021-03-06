<!--
Ένας κατασκευαστής σάς επιτρέπει να προετοιμάσετε τις ιδιότητες ενός αντικειμένου κατά τη 
δημιουργία του αντικειμένου.

Εάν δημιουργήσετε μια συνάρτηση __construct (), η PHP θα καλεί αυτόματα αυτήν τη συνάρτηση όταν εσείς
δημιουργήστε ένα αντικείμενο από μια τάξη.

Παρατηρήστε ότι η συνάρτηση κατασκευής ξεκινά με δύο κάτω παύλες (__)!

Βλέπουμε στο παρακάτω παράδειγμα, ότι η χρήση ενός κατασκευαστή μας σώζει από το να καλέσουμε το 
set_name () μέθοδος που μειώνει την ποσότητα του κωδικού:
-->
<!DOCTYPE html>
<html>
<body>

<?php
class Fruit2 {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name; 
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit2("Apple");
echo $apple->get_name();
?>
 
</body>
</html>
