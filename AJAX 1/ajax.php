<html>
<head>
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
    <style>
        body {
            background-image: url("https://source.unsplash.com/user/erondu/1600x900");
            color: red;
            font-size: 20px;
        }

    </style>
</head>
<body>

<p><b>Auto Merk Namen</b></p>
<form>
    Dit zijn echte automerken | NO scam : <input type="text" onkeyup="showHint(this.value)">
</form>
<p>100% Legit <br><span id="txtHint"></span></p>
</body>
</html>