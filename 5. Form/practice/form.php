<html>
<head>
    <title>Form Practice</title>
</head>
<body>
<form method="post" action="./handle.php">
    <input type="text" name="name" placeholder="Input your name"/>
    <input type="email" name="email" placeholder="Input your email"/>
    <textarea name="message" placeholder="please write your message here"></textarea>
    <button type="submit">Submit</button>
</form>
<?php
if (!empty($_GET['submitted'])) {
    if ($_GET['submitted'] == 'false') {
        echo "all field must be fill";
    } else {
        echo "your form has been submitted succesfully";
    }
}
?>
</body>
</html>