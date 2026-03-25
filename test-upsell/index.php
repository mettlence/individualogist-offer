<a href="http://test-upsell.individua1.pay.clickbank.net/?cbur=a">Accept</a>
<a href="http://test-upsell.individua1.pay.clickbank.net/?cbur=d">Decline</a>

<?php
    if(!empty($_GET['iv']) && !empty($_GET['params'])) {
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
        $grandTotal = $json->totalAccountAmount;
        $productTitle = $json->lineItems[0]->productTitle;
        $productVendor = $json->vendor;
        $productShipping = $json->totalShippingAmount;
        $productTax = $json->totalTaxAmount;
        $productCategory = $json->lineItems[0]->itemNo;
        if(!empty($json->upsell->upsellOriginalReceipt)) {
            $productId = $json->upsell->upsellOriginalReceipt;
        } else {
            $productId = $json->receipt;
        }

        // transaction informations
        $customerName = $json->customer->billing->firstName . ' ' . $json->customer->billing->lastName;
        $customerEmail = $json->customer->billing->email;
        $transactionNumber = $json->receipt;
        $transactionDate = $json->transactionTime;
        $totalAmount = $json->totalAccountAmount;
        $paymentMethod = $json->paymentMethod;
        $currency = $json->currency;

        // item count
        $itemCount = $json->lineItems;
        $itemJson = json_encode($itemCount);
        $conn->close();
    } else {

    }
?>
<script>
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
        'revenue': '<?php echo $grandTotal;?>',
        'shipping': '<?php echo $productShipping;?>',
        'tax': '<?php echo $productTax;?>',
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
            'quantity': item.quantity,
        });
    });

    ga('ecommerce:send');

    ga('send', 'pageview');
</script>