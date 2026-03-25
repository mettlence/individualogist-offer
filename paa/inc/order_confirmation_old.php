<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $archetype = $_GET['archetype'];
    $url = 'http://individualogist.com/clickbank/confirmation/';
    
    echo "
    <div id='sales-reading'>
        <a class='cta-button' href='$url?name=$name&email=$email&archetype=$archetype'>Click Here To Claim Your Personalized Archetypal Analysis For $37 Now!</a>
    </div>
    ";
?>
