
<?php
$this->load->view('Admin/Layout/admin_header');
?>
<br><br><br>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>



<div class="row">
  <?php
foreach ($department as $dprtmnt) {

?>
  <div class="column" style="padding: 45px">
    <div class="card">
      <a href="<?php echo base_url('index.php/Admincontroller/semester_timetable/'.$dprtmnt->department_id)?>"><img src="<?php echo base_url('Asset/Admin/department/'.$dprtmnt->dep_image)?>" style="height: 200px;width: 200px">
     </a>
    </div>
  </div>

 
  <?php
}
?>

</div>


</body>
</html>

<br><br><br><br><br><br><br><br><br>
   
<?php
$this->load->view('Admin/Layout/admin_footer');
?>
