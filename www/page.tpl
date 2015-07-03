<!DOCTYPE html>
<html>
<head>
    <title>{$title}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="Thao Framework">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/thao.css">
</head>
    
<body>
    <style>
        body
        {
            background-image: url(scr.jpg);
            background-size: cover;
        }
        .nav 
        {
            background-image: url(menu.jpg);
            height: 500px;
            float: left;
            width: 20%;
        }
        .content
        {
            height: 500px;
            width: 80%;
            padding-left: 20px;
        }
    </style>
    <div class="header">
        <h1 class="title" style="text-align: center;">{$title}</h1>
    </div>
    <div class="content" style="text-align: center;">
        <div class="nav">
          {$buttons}
        </div>
       {$text}
    </div>
    <div class="footer" style="text-align: center;">
        <div class="blockquote">
            <p>{$footer}</p>
        </div>
    </div>
</body>
</html>