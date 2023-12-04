<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rinasalon";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pesan";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM konfirm";
$result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    <link href="admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>


  <body>
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../Logo/Logo.png" width="60" height="60" style="margin-left:20px;" class="d-inline-block align-text-top">
            RINA SALON
          </a>
        </div>
      </nav>

      
      <nav style="margin-top:50px;">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            
          </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class="table-container">
                  <div class="table-wrapper">
                    <div class="container-fluid">
                      <h2 style="margin-left: 650px; margin-right: 150px;">Booking Approval</h2>
                      
                          <table class="table table-borderless" style="margin-top: 100px">
                              <tr>
                                  <th style="width: 5%;">Action</th>
                                  <th style="width: 5%;">ID</th>
                                  <th style="width: 5%;">Name</th>
                                  <th style="width: 5%;">Telp</th>
                                  <th style="width: 5%;">Tanggal</th>
                                  <th style="width: 5%;">Jam</th>
                                  <th style="width: 5%;">Total</th>
                                  <th style="width: 5%;">Bayar</th>
                              </tr>

                              <?php
                              // Display data in the table
                              while($row = $result->fetch_assoc()) {
                                  echo "<tr>";
                                  echo "<td>";
                                  echo "<button class='btn btn-primary' onclick=\"accAction(" . $row["id"] . ")\"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-check' viewBox='0 0 16 16'><path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'/></svg></button>      ";
                                  echo "<button class='btn btn-danger' onclick=\"deleteAction(" . $row["id"] . ")\"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'><path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/></svg></button>";
                                  echo "</td>";
                                  echo "<td>" . $row["id"] . "</td>";
                                  echo "<td>" . $row["nama"] . "</td>";
                                  echo "<td>" . $row["telp"] . "</td>";
                                  echo "<td>" . $row["tgl"] . "</td>";
                                  echo "<td>" . $row["jam"] . "</td>";
                                  echo "<td>" . $row["total"] . "</td>";
                                  echo "<td>" . $row["bayar"] . "</td>";
                                  echo "</tr>";
                              }
                              ?>  
                          </table>
                    </div>         
                  </div>
                </div>
          </div>



          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
              <div class="table-container">
                <div class="table-wrapper">
                  <div class="container-fluid">
                    <h2 style="margin-left: 650px; margin-right: 150px;">Booking Accepted</h2>
                    
                      <table class="table table-borderless" style="margin-top: 100px">
                            <tr>
                                <th style="width: 5%;">ID</th>
                                <th style="width: 5%;">Name</th>
                                <th style="width: 5%;">Telp</th>
                                <th style="width: 5%;">Tanggal</th>
                                <th style="width: 5%;">Jam</th>
                                <th style="width: 5%;">Total</th>
                                <th style="width: 5%;">Bayar</th>
                            </tr>

                            <?php
                            // Display data in the table
                            while($row = $result2->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["nama"] . "</td>";
                                echo "<td>" . $row["telp"] . "</td>";
                                echo "<td>" . $row["tgl"] . "</td>";
                                echo "<td>" . $row["jam"] . "</td>";
                                echo "<td>" . $row["total"] . "</td>";
                                echo "<td>" . $row["bayar"] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                      </table>
                  </div>         
                </div>
              </div>               
          </div>

      </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>

  <?php
    $conn->close();
    ?>
</html>
