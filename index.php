<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="iPhone 15 Pro 1TB Checkout.">
     <link rel="icon" type="image/x-icon" href="https://cdn.icon-icons.com/icons2/936/PNG/512/apple-logo_icon-icons.com_73680.png">
    <meta property="og:title" content="Checkout - iPhone 15 Pro 1TB>
    <meta property="og:description" content="Payment Gateway Testing - iPhone 15 Pro 1TB Checkout.">
    <meta property="og:image" content="https://icons.veryicon.com/png/o/internet--web/iview-3-x-icons/logo-apple.png" />
    <title>iPhone 15 Pro - Checkout</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
   
</head>
<body>
    <form action="payment.php" method="post">
    <div class="container">
        <div class="wrapper">
            <div class="checkout-image">
                <div class="info">
                    <h2>GoPhone</h2>
                    <h4>iPhone 15 Pro</h4>
                    <h1>RM2</h1>
                    <p>
                        <span>5 Years Warranty</span>
                        <img src="https://img.icons8.com/sf-regular/48/aaaaaa/forward.png" alt="Arrow" height="15px" width="15px" />
                    </p>
                    <img class="product-img" src="./assets/images/mazda-cx-9.png" height="400px" alt="Product-Image" />
                </div>
                <div class="footer">
                    <p>
                        <span>Powered by <b>Stripe</b></span>
                        <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-warning-ui-dreamstale-lineal-dreamstale.png" alt="Warning-icon" height="15px" width="15px" />
                    </p>
                    <select>
                        <option selected>English</option>
                        <option>French</option>
                        <option>Arabic</option>
                    </select>
                </div>
            </div>
            <div class="checkout-text">
    
                <div class="back-to-home">
                    <a href="#">Back to GoPhone</a>
                    <img src="https://img.icons8.com/sf-regular/48/aaaaaa/forward.png" alt="Arrow" height="15px" width="15px" />
                    <a href="#">Payment</a>
                </div>
                
                <div class="pay-button">
                    <button id="backToGoPhone">
                        <img src="https://img.icons8.com/ios-filled/50/FFFFFF/mac-os.png" alt="Apple-Pay" height="20px" width="20px" />
                        <span>Pay</span>
                    </button>
                </div>

                <div class="or-line">
                    <p>Or pay with Online Banking</p>
                </div>
                <script>
                        document.getElementById('backToGoPhone').addEventListener('click', function (e) {
                            e.preventDefault(); // Prevent the default behavior of the link
                            Swal.fire({
                                title: "Sorry Not Available...",
                                text: "Please Pay with Online Banking",
                                icon: "error"
                            });
                        });
                        </script>
    
                <div class="owner-name">
                    <label>Owner name</label>
                    <input type="text" placeholder="Megat Irfan"  name="name"required/>
                </div>
                
    
                <div class="country-region">
                    <label>Country or region</label>
                    <select>
                        <option>Malaysia</option>
                        
                    </select>
                    <input type="email" placeholder="Email"  name="email" required/>
                    <input type="number" placeholder="Phone Number"  name="phone" required/>
                </div>
    
                <button class="buy-button">Pay RM2.00</button>
    
            </div>
        </div>
    </form>
        <h5>&copy; <b>GoPhone </b> - 2023 - Developed by <a href="https://www.megatirfan.com" target="_blank">Megat Irfan</a></h5>
</body>
</html>