<?php
//include_once "../database_connectivity/constants.php";
$connection = mysqli_connect('localhost','root','','sps' ) or die("Cannot connect to database " . mysqli_connect_error());
$sql_query = "SELECT * FROM payments";
$result = mysqli_query($connection, $sql_query)  or trigger_error(mysqli_error($connection));
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Payment</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>Payment ID</th>
        <th>Amount</th>
        <th>Paid Date</th>
        <th>Student ID</th>
    </tr>
    </thead>
    <tbody>
  <?php
    if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)) {
            ?>
          <tr>
                    <td><?php echo $row['payment_id'] ?></td>
                    <td><?php echo $row['amount'] ?></td>
                    <td><?php echo $row['paid_date'] ?></td>
                      <td><?php echo $row['student_id'] ?></td>
                  </tr>
      <?php }}
        ?>
  </tbody> 
</table>
<h1>Add Payment</h1>
<label for="">Choose Student ID:</label>
<select name="s_name" id="">
    <option value="0">--Choose One--</option>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row1 = mysqli_fetch_assoc($result)) {
            print_r($row1);
            ?>
            <option><?php echo $row1['student_id'] ?></option>
        <?php }
    } ?>
</select>
</body>
</html>