<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status</title>
</head>
<body>
<?php
if (isset($_GET['status_id'])) {
    $status_id = $_GET['status_id'];

    if ($status_id == 1) {
        echo "<script>
            alert('Payment Success!');
            window.location.href = '../index.php';
        </script>";
    } else {
        echo "<script>
            alert('Payment Failed');
            window.location.href = '../index.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Status ID parameter not found in the URL.');
        window.location.href = '../index.php';
    </script>";
}
?>
</body>
</html>
