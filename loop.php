
<!-- forloop -->

<?php
for($x=0;$x<10;$x++){
    echo "$x <br>";
}
?>

<!-- foreach -->
<?php
$kelas[]=['nama'=>'Siti','umur'=>11];
$kelas[]=['nama'=>'Umar','umur'=>12];

foreach($kelas as $murid){
    echo $murid['nama']."<br>";
    echo $murid['umur']."<br>";
    echo "-----<br>";
}
?>

<!-- while -->
<?php
$a=0;
while($a<10){
    echo $a.'<br>';
    $a++;
}
?>

<!-- dowhile -->
<?php
$a=0;
while($a<10){
    echo $a.'<br>';
    $a++;
}
?>