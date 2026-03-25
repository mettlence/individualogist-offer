    <?php
    function getPkUrl() {
    $config = json_decode(file_get_contents(__DIR__."/config.json"), true);
    $defaultProduct = 'dys';
    
    if(preg_match('/offer\/([a-zA-Z0-9]*)?/', $_SERVER['REQUEST_URI'], $match)){
        $defaultProduct = $match[1];
    }
    var_dump($config['vendor'], $config['default'][defaultProduct]);
    parse_str($_SERVER['QUERY_STRING'], $p);
    if(!array_key_exists('checkout', $p)){
        $p['checkout'] = $defaultProduct;
    }
    $yes = $vendor.'/checkout/'.$p['checkout'];
    $no = $yes.'?nothanks=1';
    }
    ?>
    <div class="order-area">
        <img class="order-img" src="/offer/assets/img/tsol-cover.png">
        <div class="order-form">
            <h2 class="order-title">Receive Your Tarot Symbols Of Life For Just $37.00</h2>
            <!--Dynamic Order Link Specific To Archetype-->
            <a class="cta-button" href="<?php
            echo getPkUrl();
            ?>">Click Here To Order Now</a>
            <br>
            <a class="decline" href="<?php
            echo getPkUrl().'?nothanks=1';
            ?>
            ">No Thanks, I Don't Need This Right Now...</a>
            <div class="order-footer">
            After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
            </div>
        </div>
    </div>    