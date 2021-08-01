<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="">
  <title>Images</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="app sidebar-mini rtl">
<a href="employee/add">Add employee</a>

<?php
// $form = drupal_get_form('employee_search');
// print drupal_render($form);

if(!empty($data) > 0)
{

    echo "<table id='table_id' class='table table-bordered'>
    <thead>
    <tr><th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    </tr></thead>";
	$count = 1;
foreach($data as $v)
{
echo "<tbody><tr>";
echo "<td>" . $v->emp_id . "</td>";

echo "<td>" . $v->emp_name . "</td>";
echo "<td>" . $v->emp_email . "</td>";
echo "<td><a href=employee/edit?id=". $v->emp_id.">Edit</a> | <a href=employee/delete?id=". $v->emp_id.">Delete</a></td>";
echo "</tr></tbody>";
$count++;
}
echo "</table>";
}
else
{
    echo "No records found";
}
?>


<script type="text/javascript">
$(document).ready( function () {
    $("#table_id").DataTable();
} );
</script>
</body>

</html>
