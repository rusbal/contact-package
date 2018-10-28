<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post" action="">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your question"></textarea>
        </div>
        <button>Submit</button>
    </form>
</body>
</html>