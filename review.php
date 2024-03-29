<?php
session_start();
if(!isset($_SESSION["customer"])){
    header("location: index.php");
}
?>
<head><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        my cart
    </title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <div class="banner-t">
        <div class="order" id="order">
        <header>
           <ul>
            <li><a href="home.html">Home</a></li>
           </ul>
            <h1>Review Your Order</h1>
        </header>

    <section class="cort">
        <section>
            <div class="listcart">
                <div class="item">
                    <div class="image">
                        <img src="Images/burg.jpg">
                     </div>
                    <div class="name">
                         Name
                    </div>
                    <div class="totalprice">
                        ksh 1800
                    </div>
                    <div class="quantity">
                        <span class="minus"><</span>
                       <span>1</span>
                      <span class="plus">></span>
                    </div>
                </div>
            </div>            
        </section>


        
            <div id="cartitem">Your Cart Is Empty</div>
    <div class="foot">
        <h3>Total</h3>
        <h2 id="total">Ksh 0.00</h2>
    </div>
        </section>
        </div>
        <div class="payment" id="payment">
            <div class="form transaction">
                <h2>Complete Order</h2>
                <form action="#">
                    <div class="first">
                        <div class="name">
                            <div class="inputbox">
                                <span class="icon"><ion-icon name="Phone"></ion-icon></span>
                                <input type="text"required>
                                <Label>First Name</Label>
                            </div>
                            <div class="inputbox">
                                <span class="icon"><ion-icon name="Phone"></ion-icon></span>
                                <input type="text"required>
                                <Label>Last Name</Label>
                            </div>
                        </div>
                        <div class="name">
                            <div class="inputbox">
                                <span class="icon"><ion-icon name="Phone"></ion-icon></span>
                                <input type="email"required>
                                <Label>Email</Label>
                            </div>
                            <div class="inputbox">
                                <span class="icon"><ion-icon name="Phone"></ion-icon></span>
                                <input type="text"required>
                                <Label>Phone</Label>
                            </div>
                        </div>
                        
                        <div class="checkbox">
                            <input type="radio"required>
                            <Label>Pay Via Bank</Label><input type="radio"required>
                            <Label>Pay via M-pesa</Label>
                        </div>
                        <div class="inputbox">
                            <span class="icon"><ion-icon name="lock"></ion-icon></span>
                            <input type="">
                        </div>
                        <div class="bark">
                            <p>
                                <a href="#" class="move-back" onclick="back()">back</a>
                            </p>
                        </div>
                    </div>
                    <div class="sing">
                        <div class="inputbox pass">
                            <span class="icon"><ion-icon name="lock"></ion-icon></span>
                            <input type=""required>
                            <Label>Account Password</Label>
                        </div>
                        <button type="submit" class="complete" id="complete">Complete Order</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
</body>
</html>                                                                         