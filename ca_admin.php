<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Campus Ambassadors</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
      .table{
        color: white;
      }
  </style>
</head>

<body>

<table class="table">
    <thead>
        <tr style="background-color: #00acc1;">
            <th><a class="blue-text"><i class="fa fa-arrows"></i></a></th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Contact</th>
            <th>Institute</th>
            <th>FB Link</th>
        </tr>
    </thead>

    <tbody style="background-color: #26c6da;">
    <?php
        $conn=new mysqli("localhost","root","","nitrutsav");
        $sql="SELECT sno,name,email,contact,college,link FROM ca";

        $result=$conn->query($sql);

        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row["sno"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["college"]."</td><td>".$row["link"]."</td></tr>";
            }
        }
    ?>
    </tbody>
</table>

<h3><strong>Total Count: <?php echo $result->num_rows; ?></strong></h3>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

</body>

</html>







