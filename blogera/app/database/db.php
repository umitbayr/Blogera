<?php

session_start();
require('connect.php');


function dd($value)
{
  echo "<pre>", print_r($value, true), "</pre>";
  die();
}


function executeQuery($sql, $data)
{
  global $conn;
  $stmt = $conn->prepare($sql); // verilen SQL sorgusunu ($sql) hazırlar
  $values = array_values($data);  // $data dizisinin sadece değerlerinden oluşan yeni bir dizi ($values) oluşturur.
  $types = str_repeat('s', count($values));
  $stmt->bind_param($types, ...$values);
  $stmt->execute();
  return $stmt;

}
/*executeQuery fonksiyonu, güvenli ve esnek bir şekilde SQL sorguları çalıştırmak için kullanılır. Sorgu içerisindeki soru işaretleri,
 $data parametresindeki değerlerle doldurularak SQL enjeksiyonu gibi güvenlik açığı risklerini azaltır.*/ 


function selectAll($table, $conditions = [])
{
  global $conn;  // conn değişkenini global yaptı.
  $sql = "SELECT * FROM $table";  //Bu sorgu, $table tablosundan tüm sütunları (*) seçmeyi amaçlar.
  if (empty($conditions)) // conditions boş mu ona bakar
  { 
    $stmt = $conn->prepare($sql);
    $stmt->execute();   // Bu satır, hazırlanan ifadeyi yürütür.
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); // sorgu sonuçlarını alır ve her birini birbiriyle alakalı diziye çevirir.
    return $records; //elde edilen kayıtları fonksiyonun dışına döndürür.
  } else 
  {
    $i = 0; // sayac değişkeni
    foreach ($conditions as $key => $value) {
      if ($i == 0) {
        $sql = $sql . " WHERE $key = ?";  //döngü ilk koşuldaysa, WHERE cümlesi eklenir ve ilk koşulun kolon adı ve değeri sorguya eklenir.
      } else {
        $sql = $sql . " AND $key = ?";  //sonraki bir koşuldaysa, sorguya bir AND operatörü ve sonraki koşulun kolon adı ve değeri eklenir.
      }
      $i++;
    }
    
    $stmt = executeQuery($sql, $conditions); // executeQuery fonksiyonuna paramaetreler yollandı
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //fonksiyonunun döndürdüğü ifadeyi kullanır. recordsa kaydeder.
    return $records;

  }
}


function selectOne($table, $conditions )
{
  global $conn;
  $sql = "SELECT * FROM $table";
  
  $i = 0;
  foreach ($conditions as $key => $value) {
    if ($i == 0) {
      $sql = $sql . " WHERE $key = ?";
    } else {
      $sql = $sql . " AND $key = ?";
     }
    $i++;
  }
    

  $stmt = executeQuery($sql, $conditions);
  $records = $stmt->get_result()->fetch_assoc();
  return $records;

}


function create($table, $data)
{
  global $conn;
  $sql = "INSERT INTO $table SET ";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i == 0) {
      $sql = $sql . " $key=?";
    } else {
      $sql = $sql . ", $key=?";
    }
    $i++;
  }

  $stmt = executeQuery($sql, $data);
  $id = $stmt->insert_id;
  return $id;
}


function update($table, $id, $data)
{
  global $conn;
  $sql = "UPDATE $table SET ";

  $i = 0;
  foreach ($data as $key => $value) {
    if ($i == 0) {
      $sql = $sql . " $key=?";
    } else {
      $sql = $sql . ", $key=?";
    }
    $i++;
  }

  $sql = $sql . " WHERE id=?";
  $data['id'] = $id;
  $stmt = executeQuery($sql, $data);
  return $stmt->affected_rows;
}

function del($table, $id)
{
  global $conn;
  $sql = "DELETE FROM $table WHERE id=?";


  $stmt = executeQuery($sql, ['id' =>$id]);
  return $stmt->affected_rows;
}

