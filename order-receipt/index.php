<?php
$PageTitle = "Individualogist.com | Order Receipt";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>

<style>
    p,h1,h2,h4,h5,h6 {font-family:'Raleway',sans-serif;}
    h4{font-weight:700;}
    .navbar {border-bottom:1px solid #ccc;}
    .thankyou-area, .service-area {padding:1em;}
    .thankyou-note p, .service-area p {font-size:1em;}
    .logo {    max-width: 200px;
    filter: drop-shadow(1px 1px 1px #00000080);
    padding: 1em;}
    .rcpt-menu {float: right;}
    .mt-20{margin-top:20px}
    .rcpt-subheader-bg {margin-bottom: 10px;}
    .thankyou-note {padding:1em;font-family:'Raleway',sans-serif;}
    .rcpt-header {text-align: center;font-weight:700;border-bottom:2px}
    .transaction-wrapper {max-width: 800px;padding: 1em;background: #f9f9f9;box-shadow: 0 0 20px rgba(0, 0, 0, .1);border-radius: 1em;margin: 0 auto; margin-bottom:2em;}
    .rcpt-label{font-weight:700;color:#444;}
    .rcpt-data{color:#444;}
    .sep{margin-left:1em;margin-right:1em;}
    .line-wrap {border-bottom:1px solid #ccc; padding-bottom:10px;}
    .item-wrap {padding:1em;border: 1px solid #e8e8e8;margin: 1em auto;}
    .item-img img {max-height:120px; display: block;margin:0 auto;}
    .item-title {clear:both;font-weight:700;font-size:1.2em;}
    .item-access, .support-btn {background:#37e0b2;border-radius:3em;text-transform:uppercase;color:#fff;margin:1em auto;letter-spacing: 2px;width: 100%;font-weight:700;}
    .item-access:hover, .support-btn:hover {transition:.4s;box-shadow: 0 0 5px #00000010;background:#18bd90;color:#fff;}
    .item-totals {padding: 1em;border-top: 1px solid #ccc;}
</style>
<!-- get order details -->
<?php
    $servername = "individualogist.com";
    $username = "indivi13";
    $password = "Mettlence1!!";
    $dbname = "indivi13_dev_tol";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM payment_logs ORDER BY id DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $json = json_decode($row['pay_history_json_log']);
    $productTitle = $json->lineItems[0]->productTitle;
    $productPrice = $json->totalOrderAmount;
    $productId = $json->receipt;
    $productVendor = $json->vendor;
    $productShipping = $json->totalShippingAmount;
    $productTax = $json->totalTaxAmount;
    $productCategory = $json->lineItems[0]->itemNo;

    // transaction informations
    $customerName = $json->customer->billing->firstName . ' ' . $json->customer->billing->lastName;
    $customerEmail = $json->customer->billing->email;
    $transactionNumber = $json->receipt;
    $transactionDate = $json->transactionTime;
    $totalAmount = $json->totalAccountAmount;
    $paymentMethod = $json->paymentMethod;

    // item count
    $itemCount = $json->lineItems;
    $itemJson = json_encode($itemCount);
    $conn->close();
?>
<!-- end -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar navbar-light justify-content-between">
                <a class="navbar-brand">
                    <img class="logo" src="/offer/assets/img/individualogist-logo2.png">
                </a>
                <div class="rcpt-menu">
                    <a class="btn support-btn" href="/support">Customer Support</a>
                </div>
            </nav>
        </div>
    </div>
</div>


<section class="thankyou-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="thankyou-note">
                    <h2 class="rcpt-header">Thank you for your purchase! Your payment has been approved.</h2>
                    <p><strong>Note:</strong> This transaction will appear on your statement as "CLKBANK*COM" OR "CLICKBANK".</p>
                    <p>A copy of this receipt has been emailed to <span class="rcpt-data"><?php echo $customerEmail ;?></span>. If this email address is incorrect, please update your contact information at <a href="https://www.clkbank.com/" target="_blank">Clickbank's Support Website</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="transaction-area">
    <div class="container transaction-wrapper">
        <div class="container rcpt-subheader-bg">
            <div class="row">
                <div class="col-sm-7 mx-auto text-left">
                    <h4 class="rcpt-subheader mt-20">Order Confirmation & Receipt</h4>
                </div>
                <div class="col-sm-5 mx-auto text-left">
                    <span class="rcpt-label">Order Number:</span> <span class="rcpt-data"><?php echo $transactionNumber ;?></span>
                    <br>
                    <span class="rcpt-label">Order Date:</span> <span class="rcpt-data"><?php echo substr($transactionDate, 0, 10) ;?></span>
                    <br>
                    <span class="rcpt-label">Order Email:</span> <span class="rcpt-data"><?php echo $customerEmail ;?></span>
                </div>
            </div>
        </div>
        <div class="container line-wrap">
            <div class="row">
                <div class="col-sm-6 mx-auto text-left">
                </div>
                <div class="col-sm-6 mx-auto text-left">
                </div>
            </div>
        </div>
        <!-- start product count -->
        <?php foreach ($itemCount as $item) { ?>
        <div class="container item-wrap">
            <div class="row">
                <div class="col-sm-4 mx-auto">
                <?php $itemNo = strtolower($item->itemNo);
                if(substr($itemNo, 0, 3) == 'paa') { ?>
                    <!-- PRODUCT IMG PAA -->
                    <div class="item-img">
                        <img src="/offer/assets/img/paa-cover.png">
                    </div>
                <?php } elseif(substr($itemNo, 0, 3) == 'sac') { ?>
                    <!-- PRODUCT IMG SAC -->
                    <div class="item-img">
                        <img src="/offer/assets/img/sac-cover.png">
                    </div>
                <?php } elseif(substr($itemNo, 0, 3) == 'dys') { ?>
                    <!-- PRODUCT IMG DYS -->
                    <div class="item-img">
                        <img src="/offer/assets/img/dys-cover.png">
                    </div>
                <?php } elseif($itemNo == 'eote') { ?>
                    <!-- PRODUCT IMG EOTE -->
                    <div class="item-img">
                        <img src="/offer/assets/img/eote-cover.png">
                    </div>
                <?php } elseif($itemNo == 'tsol') { ?>
                    <!-- PRODUCT IMG SAC -->
                    <div class="item-img">
                        <img src="/offer/assets/img/tsol-cover.png">
                    </div>
                <?php } ?>
                </div>
                <div class="col-sm-5 mx-auto">
                    <!-- PRODUCT INFO -->
                    <div class="item-info">
                        <span class="item-title"><?php echo $item->productTitle ;?></span>
                        <br>
                        <span class="rcpt-label">Digital Product: eBook</span>
                    </div>
                </div>
                <div class="col-sm-3 mx-auto">
                    <!-- PRODUCT INFO -->
                    <div class="item-price">
                        <span class="rcpt-label">Price:</span> <span class="rcpt-data"><?php echo $item->accountAmount;?> USD</span>
                    </div>
                    <a href="<?php echo $item->downloadUrl;?>" class="btn item-access" target="_blank">Access Now</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- end of product count -->

        <div class="container item-totals">
            <div class="row">
                <div class="col-sm-12 mx-auto text-left">
                    <h4 class="rcpt-subheader">Billing Information</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <span class="rcpt-label">Name:</span> <span class="rcpt-data"><?php echo $customerName ;?></span>
                    <br>
                    <span class="rcpt-label">Email:</span> <span class="rcpt-data"><?php echo $customerEmail ;?></span>
                </div>
                <div class="col-sm-4 mx-auto">
                    <span class="rcpt-label">Order Total:</span> <span class="rcpt-data"><?php echo $totalAmount ;?> USD</span>
                    <br>
                    <span class="rcpt-label">Payment:</span> <span class="rcpt-data"><?php echo $paymentMethod ;?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="cs-note">
                    <h4 class="rcpt-subheader">Customer Service Information</h4>
                    <p>Should you have questions about your order or require any additional support, please visit <a href="http://clkbank.com" target="_blank">Clickbank's Support Website</a>. There, you will be able to access your product, request a refund, or open a customer support ticket by looking up your order via your email address and order numbed listed below:</p>
                    <span class="rcpt-label">Order Email:</span> <span class="rcpt-data"><?php echo $customerEmail ;?></span>
                    <br>
                    <span class="rcpt-label">Order Number:</span> <span class="rcpt-data"><?php echo $transactionNumber;?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <script>
    // initiate items json
    var items = <?php echo $itemJson ;?>;

    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-98732447-1', 'auto'); // Replace with your property ID.
    ga('require', 'ecommerce');
    ga('ecommerce:addTransaction', {
        'id': '<?php echo $productId;?>',
        'affiliation': '<?php echo $productVendor;?>',
        'revenue': '<?php echo $productPrice;?>',
        'shipping': '<?php echo $productShipping;?>',
        'tax': '<?php echo $productTax;?>'
    });

    items.forEach(function(item) {
        //get product title to general product
        var itemLower = item.itemNo.toLowerCase();
        var productTitle = '';
        if(itemLower.substring(0, 3) == 'paa') {
            productTitle = 'Premium Archetypal Analysis';
        } else if(itemLower.substring(0, 3) == 'sac') {
            productTitle = 'Sacred Archetypal Collection';
        } else if(itemLower.substring(0, 3) == 'dys') {
            productTitle = 'Diminishing Your Shadow';
        } else {
            productTitle = item.productTitle;
        }

        ga('ecommerce:addItem', {
            'id': '<?php echo $productId;?>',
            'name': productTitle,
            'sku': item.itemNo,
            'category': item.lineItemType,
            'price': item.accountAmount,
            'quantity': item.quantity
        });
    });

    ga('ecommerce:send');

    ga('send', 'pageview');
</script> -->

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer.php');
include_once($path);
?>