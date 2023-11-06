<?php 
 // calculater

 $result = $_GET["number1"] + $_GET["number2"];

?>


<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
</head>


<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form"> 

    <div>
        <label>Enter Number1:</label>
        <input type="number" name="number1" class="form-control">
    </div>

    <div>
        <label>Enter Number2:</label>
        <input type="number" name="number2" class="form-control">
    </div>

    <div class="alert alert-success">
        <?php echo $result ?>
    </div>

      <br>

      <input type="submit" class="btn btn-brimary">

    </form>

 </div>
</body>