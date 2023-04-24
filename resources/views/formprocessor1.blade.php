<!DOCTYPE html>
<html>
<head>
    <title>Form data</title>
    <meta charset="utf-8">
</head>
<body>
    <pre><?php
        print_r(request()->all());
        print_r(request("email").'<br/>');
        print_r(request()->input());
        print_r(request()->input("email").'<br/>');
        print_r(request()->fullUrl().'<br/>');
        print_r(request()->path().'<br/>');
        print_r(request()->method().'<br/>');
        print_r(request()->isMethod('post').'<br/>');
        print_r(request()->ip().'<br/>');
        print_r(request()->header());

        print_r($_GET); // Prints the content of the $_GET global array
        print_r($_POST); // Prints the content of the $_POST global array
    ?>
    </pre>
</body>
</html>