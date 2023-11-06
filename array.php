 <form action="array.php" method="GET">
    <input type="text" name="xname">
    <input type="submit">
 </form>
 
 
 <?php 
$xname = $_GET["xname"];


//$family = array("Father", "Mother", "Brother");

//Associative Array

/*$family = [
    "hacker" => "khalid", 
    "designer" => "majed",
     "gamer" =>"anas"
        ]; */

        $score = [
            "khalid" => ["96", "A+"], 
            "majed" => ["50", "F"],
             "anas" =>["75", "C+"]
                ];

echo "Score: " . $score[$xname][0];
echo "<br>";
echo "Grade: " . $score[$xname][1];

?>