<?php
require_once (dirname(__FILE__) . '/../simplesamlphp/lib/_autoload.php');
$as = new SimpleSAML_Auth_Simple('4native-sp');
$as->requireAuth();

$attributes = $as->getAttributes();

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Index Page</title>
</head>
<body>
    <h2>Index Page</h2>
    <h3>Welcome <strong>Authenticated User</strong>!</h3>
    <h4>Claim list:</h4>
<?php
echo '<pre>';
print_r($attributes);
echo '</pre>';

echo '<a href="logout.php">Logout</a>';

?>
</body>
</html>
