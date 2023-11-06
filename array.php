 <form action="array.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">
 </form>
 
 
 <?php 
$xname = $_GET["xname"];


//$family = array("Father", "Mother", "Brother");

//Associative Array

$family = [
    "hacker" => "khalid", 
    "designer" => "majed",
     "gamer" =>"anas"
        ];
        
echo $family[$xname]

?>