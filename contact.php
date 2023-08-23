<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dlight Sair - Contact Us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/favicon.ico">
    <link rel="stylesheet" href="./CSS/Default_CSS.css">
    <script>
        function validateForm() {
            let x = document.forms["contactform"]["name"].value;
            if (x == "") {
            alert("Name must be filled out");
            return false;
            }

            let y = document.forms["contactform"]["email"].value;
            if (y == "") {
            alert("Email must be filled out");
            return false;
            }
            if (y.includes("@") == false){
                alert("Test");
            }

            let z = document.forms["contactform"]["comment"].value;
            if (z == "") {
            alert("No comments entered");
            return false;
            }
        }
    </script>
    <style>
        .form-container {
            border-radius: 6px;
            background-color: #fafafa;
            padding: 20px;
            margin: 10px 10px;
        }

        input[type = text], textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #000000;
            box-sizing: border-box;
            margin-top: 5px;
            margin-bottom: 15px;
            resize: vertical;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        
        input[type = submit] {
            display: inline-block;
            border-radius: 4px;
            background-color: #291c63;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            margin-left: auto;
            margin-right: auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input[type = submit]:hover{
            background-color: #47378f
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="index.html" class="logo"> <img src="./images/logo.svg" alt="Logo" width="25" length="auto"> DLight
            Sair</a>
        <div class="header-right">
            <a href="index.html">Home</a>
            <a href="legends.html">Legends</a>
            <a href="weapons.html">Weapons</a>
            <a href="other.html">Other</a>
            <a href="about.html">About</a>
            <a class="active" href="contact.php">Contact</a>
        </div>
    </div>

    <h2 id="title">Contact Us</h2>

    <div class="form-container">
        <form name="contactform" action="contactactionpage.php" onsubmit="return validateForm()" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name...">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email...">

            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <footer>
        <div class="flex-container">
            <div style="display:table">
                <div style="display:table-row">
                    <a href="http://steamcommunity.com/id/Zythrim/" target="_blank">
                        <img style="margin: 30px;" src="./images/steam-logo-transparent.png" height="50px" width="auto"
                            alt="Steam">
                    </a>

                    <a href="https://www.youtube.com/channel/UCXoon2DOzAfQ82yPjc-ZTYQ" target="_blank">
                        <img style="margin:30px;" src="./images/youtube-logo-transparent.svg" height="50px" width="auto"
                            alt="YouTube">
                    </a>
                </div>

                <div style="display:table-row">
                    <img src="./images/logo.svg" height="25px" width="auto" alt="Logo">
                    &copy; Copyright 2022. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
</body>

</html>