<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Master</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="theme-menu">
        <i class="theme fa fa-moon"></i>
    </div>
    <div class="box">
        <div class="logo">Wallet Master</div>

        <div class="actions">
            <div class="single-action">
                <h3 onClick="openMenu('my-balance')">My Balance <span><i class="fa fa-plus" id="my-balance-icon"></i></span></h3>
                <div id="my-balance-menu" class="single-action-menu collapsed">
                    <h4><i class="fa fa-wallet"></i> INR 24,336</h4>
                </div>
            </div>
            <div class="single-action">
                <h3 onClick="openMenu('add-balance')">Add Balance <span><i class="fa fa-plus" id="add-balance-icon"></i></span></h3>
                <div id="add-balance-menu" class="single-action-menu collapsed">
                    <p>Just add the reference no of the payment you made your amount will automatically credited to your account within 2 hours</p>
                    <input type="text" placeholder="Reference no">
                    <button>Add Balance</button>
                </div>
            </div>
            <div class="single-action">
                <h3 onClick="openMenu('withdraw-balance')">Withdraw Balance <span><i class="fa fa-plus" id="withdraw-balance-icon"></i></span></h3>
                <div id="withdraw-balance-menu" class="single-action-menu collapsed">
                    <p>Just add the amount you want to withdraw and this amount will be credited in your account withing 2 hours. The withdrawal amount must not be greater than 90% of total amount</p>
                    <input type="number" placeholder="Amount">
                    <button>Withdraw</button>
                </div>
            </div>
            <div class="single-action">
                <h3 onClick="openMenu('invest-wstocks')">Invest in wStocks<span><i class="fa fa-plus" id="invest-wstocks-icon"></i></span></h3>
                <div id="invest-wstocks-menu" class="single-action-menu collapsed">
                   <a target="_blank" href="#">Go to our wStocks page <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="single-action">
                <h3 onClick="openMenu('play-win')">Play and Win<span><i class="fa fa-plus" id="play-win-icon"></i></span></h3>
                <div id="play-win-menu" class="single-action-menu collapsed">
                   <a target="_blank" href="#">Go to our games page <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="assets/app.js"></script>
</body>

</html>