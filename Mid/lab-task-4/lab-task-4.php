<!DOCTYPE html>
<html>
<head>
   
    <title>DOM PRACTISE</title>
    <style>
        body {
            background-color: white;
            color: black;
           
        }
        center
        {
            margin-top: 200px;
        }
    </style>
</head>
<body>
    <center>
   <h1 id="mode">Light Mode</h1>
    <input type="submit" id="toggleButton" value="Click " onclick="toggleMode()">
    </center>
   
    <script>
        function toggleMode() {
            var body = document.body;
            var currentMode = body.style.backgroundColor;
            var heading = document.getElementById("mode");
            var button = document.getElementById("toggleButton");

            if (currentMode === 'black') {
                heading.innerHTML = "Light Mode";
                body.style.backgroundColor = 'white';
                body.style.color = 'black';
                button.value = "Switch to Dark Mode";
            } else {
                heading.innerHTML = "Dark Mode";
                body.style.backgroundColor = 'black';
                body.style.color = 'white';
                button.value = "Switch to Light Mode";
            }
        }

    </script>
</body>
</html>