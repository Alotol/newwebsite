<?php

// include 'config.php';

$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length'];
$columnIndex = $_POST['order'][0]['column'];
$columnName = $_POST['columns'][$columnIndex]['data'];
$columnSortOrder = $_POST['order'][0]['dir'];
$searchValue = mysqli_real_escape_string($con,$_POST['search']['value']);


$searchQuery = " ";
if($searchValue != ''){
   $searchQuery = " and (emp_name like '%".$searchValue."%' or
        email like '%".$searchValue."%' or
        city like'%".$searchValue."%' ) ";
}


$sel = mysqli_query($con,"select count(*) as allcount from employee");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];


$sel = mysqli_query($con,"select count(*) as allcount from employee WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];


$empQuery = "select * from employee WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
   $data[] = array(
      "emp_name"=>$row['emp_name'],
      "email"=>$row['email'],
      "gender"=>$row['gender'],
      "salary"=>$row['salary'],
      "city"=>$row['city']
   );
}


$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);

echo json_encode($response);
