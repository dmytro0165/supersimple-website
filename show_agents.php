<?php
  include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Agent Details </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <style>
    .button{
      height: 44px;
      width: 72px;
      border-radius: 5px;
      border: none;
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
      cursor: pointer;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
    .title{
      font-size: 25px;
      font-weight: 500;
      position: relative;
    }
    .title::before{
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 30px;
      border-radius: 5px;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }
  </style>
  <div class="container2">
    <div class="title">Agent Details</div>
    <div class="content">
      <table id="example" class="table table-bordered" > 
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Calls</th>
            <th scope="col">Contact</th>
            <th scope="col">Appointments</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $c=0;
          $sql = "SELECT *  from agent";
          $result=mysqli_query($conn, $sql);
          if(mysqli_num_rows($result))
          {
            while ($row = mysqli_fetch_assoc($result))
            { 
              $c=$c+1;
              ?>
              <tr>
                
                <td><?php echo htmlentities($c);?></td>
                <td><?php echo htmlentities($row['name']);?></td>
                <td><?php echo htmlentities($row['date']);?></td>
                <td><?php echo htmlentities($row['agentcall']);?></td>
                <td><?php echo htmlentities($row['Contact']);?></td>
                <td><?php echo htmlentities($row['appointment']);?></td>
              </tr>
              <?php 
            }
          } 
          ?>
        </tbody>
      </table>
    </div>
    <div id="test" class="button">
      
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
          'excel'
        ]
      });
      table.buttons().container().appendTo($('#test'));
    });
</script>

</body>
</html>
