<?php
    $js = <<<EOD
    <script type="text/javascript">
        function saveData() {
            var q = location.search.substr(1), product = '', param = null, config = null, m = null;
            m = location.pathname.match(/offer\/([a-zA-Z0-9]*)?/);
            if(m){
                product = m[1];
            }
            
            if(q){
                var list = q.split('&');
                param = list.reduce(function(obj, pair){
                    var p = pair.split('=');
                    obj[p[0]] = p[1];
                    return obj;
                }, {});
            }

            config = Object.assign({}, param, {product: product});

            localStorage.setItem('pk', JSON.stringify(config));

            console.log('>>>>>>>>>>', config);
        }
        
        if(document.readyState === 'complete'){
            saveData();
        } else {
            document.addEventListener('DOMContentLoaded', saveData);
        }
        
    </script>
EOD;

    echo $js;
?>