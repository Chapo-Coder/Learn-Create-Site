<!--
    r	Ανοίξτε ένα αρχείο μόνο για ανάγνωση. Ο δείκτης αρχείου ξεκινά στην αρχή του αρχείου
    w	Ανοίξτε ένα αρχείο μόνο για εγγραφή. Διαγράφει τα περιεχόμενα του αρχείου ή δημιουργεί ένα νέο αρχείο εάν δεν υπάρχει. Ο δείκτης αρχείου ξεκινά στην αρχή του αρχείου
    a	Ανοίξτε ένα αρχείο μόνο για εγγραφή. Τα υπάρχοντα δεδομένα στο αρχείο διατηρούνται. Ο δείκτης αρχείου ξεκινά στο τέλος του αρχείου. Δημιουργεί ένα νέο αρχείο εάν το αρχείο δεν υπάρχει
    x	Δημιουργεί ένα νέο αρχείο μόνο για εγγραφή. Επιστρέφει FALSE και σφάλμα εάν υπάρχει ήδη αρχείο
    r+	Ανοίξτε ένα αρχείο για ανάγνωση / εγγραφή. Ο δείκτης αρχείου ξεκινά στην αρχή του αρχείου
    w+	Ανοίξτε ένα αρχείο για ανάγνωση / εγγραφή. Διαγράφει τα περιεχόμενα του αρχείου ή δημιουργεί ένα νέο αρχείο εάν δεν υπάρχει. Ο δείκτης αρχείου ξεκινά στην αρχή του αρχείου
    a+	Ανοίξτε ένα αρχείο για ανάγνωση / εγγραφή. Τα υπάρχοντα δεδομένα στο αρχείο διατηρούνται. Ο δείκτης αρχείου ξεκινά στο τέλος του αρχείου. Δημιουργεί ένα νέο αρχείο εάν το αρχείο δεν υπάρχει
    x+	Δημιουργεί ένα νέο αρχείο για ανάγνωση / εγγραφή. Επιστρέφει FALSE και σφάλμα εάν υπάρχει ήδη αρχείο
-->

<?php
$myfile = fopen("word.txt", "r") or die("Unable to open file!"); //άνοιγμα αρχείου
echo fread($myfile,filesize("word.txt")); //διαβάστε το αρχείο
fclose($myfile); //κλείσιμο αρχείου
?>

<?php
$myfile = fopen("word.txt", "r") or die("Unable to open file!"); //άνοιγμα αρχείου
echo fgets($myfile); //λήψη αρχείου
fclose($myfile);
?>

<?php
$myfile = fopen("word.txt", "r") or die("Unable to open file!");
//Έξοδος από μία γραμμή έως το τέλος του αρχείου
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<?php
$myfile = fopen("word.txt", "r") or die("Unable to open file!");
// Έξοδος ενός χαρακτήρα έως το τέλος του αρχείου
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>