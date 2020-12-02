
<?php
    require 'vendor/autoload.php';

    $fb = new Facebook\Facebook([
        'app_id' => '2845414085689395',
        'app_secret' => '4bf2c79bcee711a900a6cb4343237bef',
        'default_graph_version' => 'v3.1'
    ]);

    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email'];
    
?>