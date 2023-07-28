<?php

require_once (dirname(__FILE__) . '/../simplesamlphp/lib/_autoload.php');

$as = new SimpleSAML_Auth_Simple('4native-sp');

$as->logout(array(
    'ReturnTo' => 'https://sp.4native.cloud/sampleapps/logged_out.php',
    'ReturnStateParam' => 'LogoutState',
    'ReturnStateStage' => 'MyLogoutState',
));
?>
