<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <link rel="stylesheet" href="/css/contact.css">
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
    
    <h1>Contact Page</h1>
    <h2>"Bersatu Kita Teguh, Bercerai Tak Kawin"</h2>
    <div class="contact_container">
        <div class="image_holder">
            <img src="img/WhatsApp Image 2025-02-18 at 16.18.18_d227a221.jpg" alt="My Foto">
        </div>
        <div class="mycontact">
            <h3>My Contact Details</h3>
            <p>My Name is <strong>{{ $fullname }}</strong> but you can call me "Lim"</p>
            <div class="mycontact_details">
                <p>Email : {{ $email }}</p>
                <p>Instagram : {{ $instagram }}</p>
                <p>Github : {{ $github }}</p>
                <p>Linkedin : {{ $linkedin }}</p>
                <p>mobile phone : {{ $mobile }}</p>
            </div>
        </div>

    </div>
    
</body>
</html>