
<?php

session_start();
?>


<h1>Welcome to .....</h1>

<ul>
    <li>Home</li>
    <li>About us</li>
    <li>Contact</li>
</ul>

<?php
if(isset($_SESSION)['roli']) && +$_SESSION['roli']==1)

?>