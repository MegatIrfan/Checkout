<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <title>Payment Status</title>
</head>
<body>
<?php
if (isset($_GET['status_id'])) {
    $status_id = $_GET['status_id'];

    if ($status_id == 1) {
        echo "<script>
            Swal.fire({
                title: 'Success',
                text: 'Payment Success !',
                icon: 'success',
                showConfirmButton: false,
                timer: 1500
            }).then(function() {
                window.location.href = '../index.php';
            });
        </script>";
    } else {
        echo "<script>
            Swal.fire({
                title: 'Failure',
                text: 'Payment Failed',
                icon: 'error'
            }).then(function() {
                window.location.href = '../index.php';
            });
        </script>";
    }
} else {
    echo "<script>
        Swal.fire({
            title: 'Error',
            text: 'Status ID parameter not found in the URL.',
            icon: 'error'
        }).then(function() {
            window.location.href = '../index.php';
        });
    </script>";
}
?>
</body>
</html>