<?php
    $js = <<<EOD
    <script type="text/javascript">
        // Settings for URl Generation
        var settings = {
            vendor: "https://app.paykickstart.com",
            dys: {
                archetype: {
                    caregiver: "8060",
                    creator: "8086",
                    explorer: "8093",
                    innocent: "8109",
                    hero: "8101",
                    jester: "8117",
                    lover: "8125",
                    magician: "8134",
                    member: "8142",
                    outlaw: "8150",
                    ruler: "8158",
                    sage: "8166",
                },
                name: 'Diminishing Your Shadow Report',
                price: '$47.00'
            },
            tsol: {
                id: 8065,
                name: 'Tarot Symbols Of Life',
                price: '$37.00'
            },
            recm: {
                id: 8186,
                name: 'Reiki Energy Channelling Mastery ',
                price: '$27.00'
            },
            dtol: {
                id: 8999,
                name: 'Divine Tree Of Life Membership',
                price: '$7.00'
            },
            eote: {
                id: 8061,
                name: 'Eclipse Of The Ego',
                price: '$67.00'
            },
            roap: {
                id: 8183,
                name: 'Revolution Of Astral Projection',
                price: '$17.00'
            },
            chc: {
                id: 8189,
                name: 'Crystal Healing Chronicles',
                price: '$17.00'
            }
        };


        function capitalize(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }

        function firstName(fullName) {
            if(fullName) {
                let a = fullName.split(' ');
                if(a.length === 1){
                    return a[0];
                } else {
                    return a.slice(0, -1).join(' ')
                }
            }
        }

        function processUrl() {
            var q = location.search.substr(1), product = 'dys', param = null, url = '', config = null, m = null;
            m = location.pathname.match(/offer\/([a-zA-Z0-9]*)?/);
            if(m){
                product = m[1];
            }
            config = localStorage.getItem('pk');
            config = config && JSON.parse(config);

            if(q){
                var list = q.split('&');
                param = list.reduce(function(obj, pair){
                    var p = pair.split('=');
                    obj[p[0]] = p[1];
                    return obj;
                }, {
                    name: 'friend',
                    // email: '', email id is mandatory, without this redirect to default page
                    archetype: 'caregiver',
                    checkout: 0
                });
            }

            config = Object.assign({}, config, param, {product: product});
            config.name = capitalize(firstName(config.name));

            if(config.checkout === 0){
                if(product === 'dys'){
                    config.checkout = settings[product].archetype[config.archetype];
                } else {
                    config.checkout = settings[product].id;
                }
            }
            
            url = settings.vendor + '/checkout/' + config.checkout;
            
            document.querySelector('.yes').href = url;
            document.querySelector('.no').href = url + '?nothanks=1';
            document.querySelector('.order-img').src = '/offer/assets/img/' + product + '-cover.png';
            document.querySelector('.order-title').innerHTML = 'Receive Your ' + settings[product].name + ' For Just ' + settings[product].price;

            console.log('>>>>>>>>>>', config);
        }
        
        if(document.readtState === 'complete'){
            processUrl();
        } else {
            document.addEventListener('DOMContentLoaded', processUrl);
        }
        
    </script>
EOD;

    //echo $js;
?>
    <div class="order-area">
        <img class="order-img" src="">
        <div class="order-form">
            <h2 class="order-title"></h2>
            <a class="yes cta-button" href="">Click Here To Order Now</a>
            <br>
            <a class="no decline" href="">No Thanks, I Don't Need This Right Now...</a>
            <div class="order-footer">
            After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
            </div>
        </div>
    </div>    