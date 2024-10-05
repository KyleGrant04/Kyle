<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Profile</title>
    <link rel="stylesheet" href="Elviscss/Elvisfacts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- nav bar -->
    <div class="nav">
        <ul>
            <li>
                <a href="Elvisfeedback.php">Feedback</a>
            </li>
            <li id = "line2">
                <a href="Elvisfacts.php">Fact</a>
            </li>
            <li>
                <a href="Elvisprofile.php">About</a>
            </li>
            <li>
                <a href="main.php">Home</a>
            </li>
        </ul>
    </div>

    <!-- FACTSSS -->
    <div class="facts">
        <div id="output1"></div>
        <?php
        $quote = "\"Araso\"" . "\n " . "\t \t" . " " . " " . " ";
        $fact = "Taught us the UMaK greeting with the \"Mabuhay\"";

        ?>
        <script>
            const textname = `
                    Quotes:
                    <?php echo $quote ?>  
                    Interesting Fact:
                    <?php echo $fact ?>`;
            let i = 0;

            function TypeName() {
                if (i < textname.length) {
                    document.getElementById("output1").innerHTML += textname.charAt(i);
                    i++;
                    setTimeout(TypeName, 13);
                }
            }
            document.addEventListener("DOMContentLoaded", function() {
                TypeName();
            });
        </script>
    </div>


</body>

</html>