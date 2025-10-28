     

<!-- A cookie is a small piece of data that the server sends to the user's browser.
The browser stores it and sends it back with every subsequent request to the same domain.

Cookies are commonly used for:
Remembering user login sessions
Storing user preferences
Tracking user behavior
Personalizing web pages -->

<!-- setcookie(
    string $name,
    string $value = "",
    int $expires = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
); -->


<?php
// Must be called before any HTML output
setcookie("username", "Raju", time() + 3600, "/");
echo "Cookie 'username' is set!";
?>

<?php
if(isset($_COOKIE["username"])) {
    echo "Welcome " . $_COOKIE["username"];
} else {
    echo "Cookie 'username' is not set!";
}

echo "<br><a href='delCookie.php'>Delete Cookie</a>";
?>
