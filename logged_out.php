<?php
 
require_once (dirname(__FILE__) . '/../simplesamlphp/lib/_autoload.php');
 
try {
	if ($_REQUEST['LogoutState']) {
		$state = SimpleSAML_Auth_State::loadState((string)$_REQUEST['LogoutState'], 'MyLogoutState');
	}
	else {
		echo "Were you logged in?";
		exit;
	}
}
catch (Exception $e) {
	echo 'Caught exception: ',  $e->getMessage(), "\n";
	exit;
}
$ls = $state['saml:sp:LogoutStatus']; // Only works for SAML SP
if ($ls['Code'] === 'urn:oasis:names:tc:SAML:2.0:status:Success' && !isset($ls['SubCode'])) {
    // Successful logout.
    echo("You have been logged out.");
} else {
    // Logout failed. Tell the user to close the browser.
    echo("We were unable to log you out of all your sessions. To be completely sure that you are logged out, you need to close your web browser.");
}
?>
