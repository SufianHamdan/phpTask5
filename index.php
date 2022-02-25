<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task5</title>

  <style>
.q1{
  text-align: center;
  margin: 50px 0px;
}

.q2{
  text-align: center;
  margin: 160px;
}
  </style>
</head>


<body>
  <div class="q1">
    <h4>Question number 1</h4>
  <?php
    //approach 1 
    echo "File name is: ".pathinfo(__FILE__, PATHINFO_FILENAME);
    //approach 2
    // echo basename(__FILE__, '.php'); 
  ?>
  </div>
 
 

<div class="q2">
<h4>Question number 2</h4>

<?php
  function calc(){
    $GLOBALS['first_num'] = '';
    $GLOBALS['second_num'] = '';
    $GLOBALS['result'] = '';

    if(isset($_POST['operator'])){
      $GLOBALS['first_num'] = $_POST['first_num'];
      $GLOBALS['second_num'] = $_POST['second_num'];
      $GLOBALS['operator'] = $_POST['operator'];

      
    if (is_numeric($GLOBALS['first_num']) && is_numeric( $GLOBALS['second_num'])) {
        switch ($GLOBALS['operator']) {
            case "Add":
              $GLOBALS['result'] = $GLOBALS['first_num'] +  $GLOBALS['second_num'];
                break;
            case "Subtract":
              $GLOBALS['result'] = $GLOBALS['first_num'] -  $GLOBALS['second_num'];
                break;
            case "Multiply":
                $GLOBALS['result'] = $GLOBALS['first_num'] *  $GLOBALS['second_num'];
                break;
            case "Divide":
                $GLOBALS['result'] = $GLOBALS['first_num'] /  $GLOBALS['second_num'];
        } // switch
      }// second if
    }// first if
  }
calc();
?>

<?php 
  function clear(){
    if(isset($_POST['clear'])){
      $GLOBALS['first_num'] = '';
      $GLOBALS['second_num'] = '';
      $GLOBALS['result'] = '';
    }
  }
  clear();
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?= $GLOBALS['first_num'] ?>"/> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required"  value="<?= $GLOBALS['second_num'] ?>"/> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?= $GLOBALS['result'] ?>" /> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
            <input type="submit" name="clear" value="Clear" />
	  </form>



</body>
</html>