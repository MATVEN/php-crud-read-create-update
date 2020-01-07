<?php

  header('Content-Type: application/json');

  $server = "localhost";
  $username = "root";
  $password = "bool";
  $dbname = "HotelDB";

  $conn = new mysqli($server, $username, $password, $dbname);
  if ($conn -> connect_errno) {

    echo json_encode(-1);
    return;
  }

  $sql = "

  SELECT * FROM confiurazioni

  ";
  
  $res = $conn -> query($sql);
  if ($res -> num_rows < 1) {

    echo json_encode(-2);
    return;
  }

  $conf = [];
  while($conf = $res -> fetch_assoc()) {

    $confs[] = $conf;
  }

  echo json_encode($confs);