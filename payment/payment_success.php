<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }
</style>
<body>
    <?php

            echo '<script>
            setTimeout(function() {
                Swal.fire({
                    title: "Thank you !",
                    text: "Payment has successfull. Redirecting in 2 seconds.",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                }).then(function() {
                    window.location.href = "../index.php"; // Redirect to the homepage
                });
            }, 0);
            </script>';
            exit; // Exit to prevent further processing

            ?>
</body>

</html>