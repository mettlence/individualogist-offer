<?php
$js = <<<EOD
    <script type="text/javascript">
        function processUrl() {
            var q = location.search.substr(1), product = '', param = null, url = '', config = null, m = null;
            m = location.pathname.match(/offer\/([a-zA-Z0-9]*)?/);
            if(m){
                product = m[1];
            } else {
                console.error('product is not defined...');
            }
            config = localStorage.getItem('pk');
            config = config && JSON.parse(config);

            if(q){
                var list = q.split('&');
                param = list.reduce(function(obj, pair){
                    var p = pair.split('=');
                    obj[p[0]] = p[1];
                    return obj;
                }, {});
            }

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }

            config = Object.assign({archetype: 'caregiver', name: 'friend', email:'', checkout: 0}, config, param, {product: product});

                if(product === 'dys' || product === 'dyssplit'){
                    settings[product].id = settings[product].archetype[config.archetype];
                } else {
                    config.checkout = settings[product].id;
                    var v = document.getElementById('arche-hide');
                    v.style.display = 'none';
                }
                if(config.archetype === 'default') {
                    document.getElementById('arche-hide').style.display = 'none';
                }

            url = 'http://' + settings[product].id + '.' + settings.vendor + '?cbskin=25048&identifier=' + getCookie('logic_id');

            //document.querySelector('yes').href = url + '&cbur=a';
            //document.querySelector('.no').href = url + '&cbur=d';
            document.querySelector('.order-img').src = '/offer/assets/img/' + product + '-cover.png';
            document.querySelector('.order-title').innerHTML = 'Receive Your ' + settings[product].name + ' For Just ' + settings[product].price + ' Today! ';
            //document.querySelector('.name').innerHTML = config.name;
            var f = document.getElementsByClassName('order-footer');
            var w = document.getElementsByClassName('order-price');
            var x = document.getElementsByClassName('name');
            var v = document.getElementsByClassName('email');
            var y = document.getElementsByClassName('yes');
            var z = document.getElementsByClassName('no');
            var i; for (i=0;i<w.length;i++) {
                    w[i].innerHTML = settings[product].price;
            }
            var i; for (i=0;i<y.length;i++) {
                y[i].href = url + '&cbur=a';
            }
            var i; for (i=0;i<x.length;i++) {
                var getName = getCookie('logic_first_name');
                if (getName == '' || getName == 'null') {
                    x[i].innerHTML = config.name;
                } else {
                    x[i].innerHTML = getCookie('logic_first_name');
                }
            }

            var i; for (i=0;i<v.length;i++) {
                var getEmail = getCookie('logic_email');
                if (getEmail == '' || getEmail == 'null') {
                    v[i].innerHTML = config.email;
                } else {
                    v[i].innerHTML = getCookie('logic_email');
                }
            }

            var i; for (i=0;i<z.length;i++) {
                z[i].href = url + '&cbur=d';
            }

            if(product==='eoterecur') {
                for (i=0;i<f.length;i++) {
                    f[i].innerHTML = 'Your initial charge will be $33. You will then be billed $33/month for 2 months after your initial charge has been made. You are free to cancel the subscription at any point in time.';
                }
            }

            document.querySelector('.archetype').innerHTML = config.archetype;

            //console.log('>>>>>>>>>>', config);
        }

        if(document.readyState === 'complete'){
            processUrl();
        } else {
            document.addEventListener('DOMContentLoaded', processUrl);
        }

    </script>
EOD;

echo $js;
?>

<div class="container order-area">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <img class="order-img" src="">
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="token-notify" style="display: none;">
                <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                <a class="token-purchase" href="">Buy Now With ONE Click</a>
                <a class="token-card normal-link" id="accept">Pay with a different credit card</a>
                <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
            </div>
            <div class="order-form">
                <h2 class="order-title"></h2>
                <table class="order-details" style="display:none">
                    <tbody>
                        <tr class="details">
                            <td class="right">Name:</td>
                            <td class="left"><span class="name capitalize"></span></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Email:</td>
                            <td class="email left"></td>
                        </tr>
                        <tr class="details" id="arche-hide">
                            <td class="right">Archetype:</td>
                            <td class="left"><span class="archetype capitalize"></span></td>
                        </tr>
                    </tbody>
                </table>
                <a id='accept' class="yes cta-button" href="">Click Here To Begin Your Journey Now</a>
                <img src="/offer/assets/img/credit-cards.png" class="cc-icons">
                <p class="small text-center">Your order will be processed on a secure server.</p>
                <a class="no decline" href="">No thanks, my personal growth is not important to me and I will never see this opportunity again</a>
                <div class="order-footer">
                    After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
                </div>
            </div>
        </div>
    </div>
</div>