<?php

function connect()
{
    $con = mysqli_connect("127.0.0.1", "root", "iPhone12", "vedran");
    return $con; 
}

function getData($sql)
{
    $con = connect(); // call the connect function and return $con;
    $result = mysqli_query($con, $sql);
    return $result;
}

function saveData($sql)
{
  $con = connect(); // call the connect function and return $con;
  mysqli_query($con, $sql);
}

function deleteData($table, $id)
{
  $con = connect(); // call the connect function and return $con;
  mysqli_query($con, "DELETE FROM $table WHERE id='".$id."'");
}

function showData($result, $arrFields)
{
   while($arrData = mysqli_fetch_assoc($result))
    {
    ?>
      <div class="trow row">
        <?php
        foreach($arrFields as $fieldName)
        {?>
            <div><?=$arrData[$fieldName]?></div>
        <?php 
        }?>
        <div><a href="delete.php?id=<?=$arrData["id"]?>">Delete</a></div>
      </div>
    <?php
    }
}

function showTableHeader($arrFields)
{
    ?>
    <div class="thead row">

    <?php
    foreach($arrFields as $fieldName)
    {?>
        <div class="chead"><?=$fieldName?></div>
    <?php 
    }?>
    
      
      <div class="chead">Delete</div>
    </div>
  <?php
}

?>