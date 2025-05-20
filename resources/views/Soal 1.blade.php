<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Alat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
        }

        .back-btn {
            border: 2px solid;
            border-radius: 8px;
            background: none;
            font-size: 24px;
            padding: 2px 8px;
        }

        .booking-card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            margin: 20px auto;
            max-width: 500px;
            width: 90%;
        }

        .camera-box {
            background-color: #e0e0e0;
            border-radius: 12px;
            padding: 10px;
        }

        .quantity-control {
            border-radius: 14px;
            border: 1px solid #ccc;
            padding: 5px;
        }

        .quantity-btn {
            border: none;
            background: none;
            font-size: 18px;
            color: #333;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            padding: 10px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <div class="header">
        <button type="button" class="back-btn"> <i class="fas fa-arrow-left" style="color: blue;"></i> </button>
        <h5 class="ml-3">CekDong! <strong>Booking Alat</strong></h5>
    </div>

    <!-- Kartu Booking Alat -->
    <div class="booking-card">
        <div class="row justify-content-between align-items-center">
            <!-- Gambar Kamera -->
            <div class="col-4 text-center">
                <div class="camera-box">
                    <img src={{ asset('camera.png') }} alt="Camera" style="width: 60%">
                </div>

                <!-- Kontrol jumlah peminjaman -->
                <div class="mt-4 d-flex justify-content-between align-items-center bg-white quantity-control">
                    <button class="quantity-btn"><i class="fas fa-plus"></i></button>
                    <span class="mx-2">1</span>
                    <button class="quantity-btn"><i class="fas fa-minus"></i></button>
                </div>
            </div>

            <!-- Detail-->
            <div class="col-8">
                <h6 class="font-weight-bold">CAMERA CANON EOS 4000D</h6>
                <p class="text-muted mb-1">Disewakan pada tanggal <strong>20/11/24 </strong><i
                        class="far fa-calendar-alt"></i></p>
                <p class="text-muted mb-1">E17_YANUAR - CREW ITS TV</p>
                <p class="text-muted">07.00 - 19.00</p>
                <p> Liputan: <strong>Pengukuhan Profesor</strong></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer d-flex justify-content-between align-items-center px-3">
        <div class="d-flex flex-column">
            <span class="text-muted">Teknisi hari ini</span>
            <strong>E17_AJI - TEKNISI ITS TV</strong>
        </div>
        <button class="btn btn-primary" style="border-radius: 8px;">KONFIRMASI TEKNISI</button>
    </div>

</body>

</html>
