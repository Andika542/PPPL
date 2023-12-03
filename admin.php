<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rinasalon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pesan";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="navbarAdmin">
      <ul class="nav nav-underline">
        <img src="logo/logo.png" alt="" width="60px" height="60px" />
        <h3
          style="
            font-family: 'playfair-display', serif;
            font-weight: 500;
            font-style: italic;
          "
        >
          RINA SALON
        </h3>
        <br />
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Pelanggan</button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Konfirmasi</button>

            </div>
        </nav>
      <h2 style="margin-left: 350px; margin-right: 150px; margin-top: 150px">List Pelanggan</h2>
      <table class="table table-borderless" style="margin-left: 150px; margin-right: 150px; margin-top: 50px">
            <tr>
                <th>Action</th>
                <th>ID</th>
                <th>Name</th>
                <th>Telp</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Total</th>
                <th>Bayar</th>
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

            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script>
            function accAction(id) {
                // Perform AJAX request to insert data into another table
                $.ajax({
                    type: 'POST',
                    url: 'insert_into_other_table.php', // Replace with the actual PHP script
                    data: {id: id},
                    success: function(response) {
                        // Handle the response if needed
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors if needed
                        console.error(xhr.responseText);
                    }
                });
            }
            </script>

            <script>
            function deleteAction(id) {
                // Perform AJAX request to delete data from the table
                $.ajax({
                    type: 'POST',
                    url: 'delete_from_table.php', // Replace with the actual PHP script
                    data: {id: id},
                    success: function(response) {
                        // Handle the response if needed
                        location.reload(true);
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors if needed
                        console.error(xhr.responseText);
                    }
                });
            }
            </script>
    </div>


   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>

  <?php
    // Close the database connection
    $conn->close();
    ?>
</html>
