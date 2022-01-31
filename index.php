<?php
//prints hellp world
echo 'hello world';

//Variables
$variable = 'I am' . 'a variable';
$number = 23;
$number = $number*2;

$a = "number";
echo 'my age is ' . $$a;

//Arrays

$array = array('name', 'email', 'address');

print_r($array);
echo $array[2];


$array2[] = "salad";
$array2[] = "dressing";
print_r($array2);

$array3 = array(
    'name' => 'John',
    'age' => 35,
    'email' => 'email@domain.com',
);
print_r($array3);

echo $array3['name'];

//If, Else, Switch

//Cheching if 1 variable is equal to 4
$number = 3;
if ($number==4) {
    echo 'true';
}
else {
    echo 'false';
}

//Cheching if 1 variable is NOT equal to 2

$number = 2;
if ($number!=4) {
    echo 'true';
}
else {
    echo 'false';
}


//Cheching if 1 variable is equal to another
$number4 = 4;
$number5 = 5;
if ($number4==$number5) {
    echo 'true';
}
else {
    echo 'false';
}

//Cheching if 1 variable is equal to another with Operators
//Operators = && (AND) || (AND OR)
$number6 = 4;
$number7 = 4;
$number8 = 5;

if ($number6==$number7 || $number6==$number8) {
    echo 'true';
}
else {
    echo 'false';
}


//Cheching if 1 variable is equal to another with Operators
//use different data type from integer
// === will check and compare data type
$number9 = 4;
$number10 = '4';
$number11 = 5;

if ($number9===$number10) {
    echo 'true';
}
else {
    echo 'false';
}

//Cheching if 1 variable is equal to another with Operators
//use different data type from integer
// === will check and compare data typegiot
$number12 = 5;
$number13 = '4';
$number14 = 5;

if ($number12!==$number9) {
    echo 'true';
}
else {
    echo 'false';
}

switch("$number12 \n") {
    case 1:
        echo 'True';
        break;

    case 2:
        echo 'False';
        break;
    default:
        echo 'No idea';
//default can be useful to display statement if all previous queries did not match
}

//php loops

for($i=1;$i<=10;$i++) {
    echo "$i \n";

}

for($i=1;$i<=10;$i=$i+4) {
    echo "$i \n";

}

$array2 = array("name", "email", "address");
print_r($array2);
foreach($array2 as $key=>$value) {
    echo "Key $key: $value \n";

}

$y=0;

$array5 = array("name", "email", "address");
print_r($array5);

while ($array5[$y]) {
    echo "$array5[$y] <br>";

    $y++;
}


// $_GET variables

//print_r($_GET);

if ( isset($_GET['s'])){

    echo '<p>Your search term is: ' . $_GET['s'];

}
?>

<form method="get" action="">
    <label>Enter search term</label>
    <input type="search" name="s" value="<?php echo $_GET['s']; ?>">

</form>

<?php

echo "<br>";

//$_POST variables

//print_r($_GET);

if ( isset($_POST['s'] ) ) {

    echo '<p>Your search term is: ' . $_POST['s'];

}
?>

<form method="post" action="">
    <label>Enter search term</label>
    <input type="search" name="s" value="<?php echo $_POST['s']; ?>">

</form>
