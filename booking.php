<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css">
    <style>
        .bg-custom1 {
            background-color: #FFC1CF;
        }
        .btn-container{
            padding-bottom: 15px;
        }
        /* Contoh warna 1 */

        .bg-custom2 {
            background-color: #73BEB7;
        }
        .bg-background {
            background-image: url('Home/Background.png');
            /* Ganti 'path/to/your/image.jpg' dengan path gambar Anda */
            background-size: cover;
            /* Sesuaikan dengan kebutuhan Anda */
            background-repeat: no-repeat;
            /* Sesuaikan dengan kebutuhan Anda */
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius:20px;
        }
        .card-bodyinf {
            border: 1px solid #ccc; /* Add border to create a rectangle */
            border-radius: 10px; /* Optional: Add border-radius for rounded corners */
            /* margin: 10px; Optional: Add margin for spacing */
        }
        .form-check {
            margin-right: 20px;
        }
      

    .input-label {
        margin-right: 10px;
    }




    </style>
</head>
<body class="bg-background">
    <form action="insert.php" method="post" enctype="multipart/form-data">
    <div class="container text-center">
        <h1>Booking</h1>
    </div>
    <div class="container px-4">
        <div class="row gx-5">
          <!-- Jasa -->
            <div class="col-6">
                <div class="p-3">
                  <div class="card mb-3 bg-custom1">
                    <div class="card-body container-fluid">
                        <div class="form-check d-flex justify-content-between align-items-center">
                        Gunting + Cuci<input class="form-check-input" type="checkbox" data-value="60000" name="jasa[]" value="Gunting + Cuci">
                        </div>
                    </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Blow Biasa / Variasi<input class="form-check-input" type="checkbox" name="jasa[]" value="Blow Biasa / Variasi" data-value="60000">
                      </div>
                  </div>
                </div>

                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Kriting<input class="form-check-input" type="checkbox" name="jasa[]" value="Kriting" data-value="170000">
                      </div>
                  </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Sanggul / Sisir<input class="form-check-input" type="checkbox" name="jasa[]" value="Sanggul / Sisir" data-value="80000">
                      </div>
                  </div>
                </div>
              
              
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Cat Hitam / Warna<input class="form-check-input" type="checkbox" name="jasa[]" value="Cat Hitam / Warna" data-value="150000">
                      </div>
                  </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Bleach + Highlight<input class="form-check-input" type="checkbox" name="jasa[]" value="Bleach + Highlight" data-value="150000">
                      </div>
                  </div>
                </div>
              
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Creambath<input class="form-check-input" type="checkbox" name="jasa[]" value="Creambath" data-value="100000">
                      </div>
                  </div>
                </div>
              
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Vit. Rambut<input class="form-check-input" type="checkbox" name="jasa[]" value="Vit. Rambut" data-value="5000">
                      </div>
                  </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Rebonding<input class="form-check-input" type="checkbox" name="jasa[]" value="Rebonding" data-value="400000">
                      </div>
                  </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Smoothing<input class="form-check-input" type="checkbox" name="jasa[]" value="Smoothing" data-value="400000">
                      </div>
                  </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Facial<input class="form-check-input" type="checkbox" name="jasa[]" value="Facial" data-value="100000">
                      </div>
                  </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Nail Polish<input class="form-check-input" type="checkbox" name="jasa[]" value="Nail Polish" data-value="20000">
                      </div>
                  </div>
                </div>
                
              
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      M.U Pengantin Wanita<input class="form-check-input" type="checkbox" name="jasa[]" value="M.U Pengantin W" data-value="500000">
                      </div>
                  </div>
                </div>
                
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      M.U Pengantin Pria<input class="form-check-input" type="checkbox" name="jasa[]" value="M.U Pengantin P" data-value="100000">
                      </div>
                  </div>
                </div>

                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Make Up / Sanggul<input class="form-check-input" type="checkbox" name="jasa[]" value="Make Up / Sanggul" data-value="200000">
                      </div>
                  </div>
                </div>
              
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Terapi Telinga<input class="form-check-input" type="checkbox" name="jasa[]" value="Terapi Telinga" data-value="40000">
                      </div>
                  </div>
                </div>
              
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Pedicure<input class="form-check-input" type="checkbox" name="jasa[]" value="Pedicure" data-value="20000">
                      </div>
                  </div>
                </div>
              
                <div class="card mb-3 bg-custom1">
                  <div class="card-body container-fluid">
                      <div class="form-check d-flex justify-content-between align-items-center">
                      Manicure<input class="form-check-input" type="checkbox" name="jasa[]" value="Manicure" data-value="20000">
                      </div>
                  </div>
                </div>
                    
                </div>
            </div>
            <!-- Informasi -->
            <div class="informasi col-6">
                <div class="p-3">
                    <div class="card mb-3">
                        <div class="card-bodyinf bg-custom1 container-fluid">
                            <!-- nama -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="name">
                              </div>
                              <!-- no telp -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                                <input type="telp" class="form-control" id="exampleFormControlInput1" placeholder="No. Telp" name="telp">
                            </div>
                            <!-- tanggal -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Waktu dan Tanggal</label>
                               <div class="= mb-3">
                                <input type="date" class="container-fluid" name="tgl" id="tanggal">
                               </div>
                                <div class="dropdown">
                                    Pilih Jam    <!-- menu jam -->
                                      <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="08:00">Jam 08:00
                                        </div>
                                      <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="09:00">Jam 09:00
                                        </div>
                                      <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="10:00">Jam 10:00
                                        </div>
                                      <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="11:00">Jam 11:00
                                        </div>
                                      <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="12:00">Jam 12:00
                                        </div>
                                      <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="13:00">Jam 13:00
                                        </div>
                                      <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="14:00">Jam 14:00
                                        </div>
                                        <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="15:00">Jam 15:00
                                        </div>
                                        <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="16:00">Jam 16:00
                                        </div>
                                        <div class="mb-3">
                                        <div class="form-check bg-custom1">
                                            <input type="radio" class="form-check-input" id="dropdownCheck2" name="jam" value="17:00">Jam 17:00
                                        </div>
                                          
                                      </div>
                                    
                                  </div>
                            </div>
                            <!-- total biaya -->

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    // Get all checkboxes with type 'checkbox'
                                    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

                                    // Get the textarea and set it to readonly
                                    const totalTextArea = document.getElementById('total');
                                    totalTextArea.setAttribute('readonly', 'readonly');

                                    // Add event listener to each checkbox
                                    checkboxes.forEach(function (checkbox) {
                                        checkbox.addEventListener('change', updateTotal);
                                    });

                                    // Function to calculate and update total
                                    function updateTotal() {
                                        let total = 0;

                                        checkboxes.forEach(function (checkbox) {
                                            if (checkbox.checked) {
                                                // Use custom attribute data-value to store the numeric value
                                                total += parseFloat(checkbox.getAttribute('data-value'));
                                            }
                                        });

                                        totalTextArea.value = `Rp${total.toLocaleString('id-ID')}`;
                                    }
                                    const totalInput = document.getElementById('totalInput');
                                    if (totalInput) {
                                        totalInput.value = total;
                                    }


                                });
                            </script>


                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Total Biaya</label>
                                <input type="text" class="form-control" id="total" placeholder="" name="total">
                                <!-- Add this input field for storing the total value -->
                                <input type="hidden" id="totalInput" name="totalInput">
                            </div>

                            <!-- btn pembayaran -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bayar" value="tunai" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Tunai                                
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bayar" value="non tunai" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Non - Tunai                                
                                </label>
                            </div>
                    <!-- Upload -->
                            <div class="file-upload">
                            <div class="file-select">
                                <div class="file-select-button" id="fileName">Upload Bukti Pembayaran</div>
                                <div class="file-select-name" id="noFile"></div>
                                <input type="file" name="chooseFile" id="chooseFile">
                            </div>
                            </div>
                            <!-- btn pesan -->
                                <div class="btn-container text-end">
                                    <button type="submit" value="submit" class="btn bg-custom2">Pesan</button>
                                </div>
                            
                            <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
