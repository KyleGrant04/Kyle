<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Profile</title>
    <link rel="stylesheet" href="Elviscss/elvis.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- nav bar -->
    <div class="nav">
        <ul>
            <li><a href="Elvisfeedback.php">Feedback</a></li>
            <li><a href="Elvisfacts.php">Fact</a></li>
            <li  id = "line1"><a href="Elvisprofile.php">About</a></li>
            <li><a href="main.php">Home</a></li>
        </ul>
    </div>


    <div class="ariel">
        <section class="profile">
            <div class="text">
            
                <div id="output"></div>
                <?php 
                    $name = "Elvis Galzote"; 
                    $age = "REDACTED"; 
                ?>
                <script>
                    const textname = `
                    <?php echo $name ?>  
                    
                     <?php echo $age ?>`;
                    let i = 0;

                    function TypeName() {
                        if (i < textname.length) {
                            document.getElementById("output").innerHTML += textname.charAt(i);
                            i++;
                            setTimeout(TypeName, 13);
                        }
                    }
                    document.addEventListener("DOMContentLoaded", function() {
                        TypeName();
                    });
                </script>
            </div>
            <div class="img">
                <img src="Elviscss/sir_elvis.png" alt="Sir Elvis">
            </div>
        </section>

        <section class="profile1">
            <div class = "pic1">
                <img src = "Elviscss/pic1.jpg">
                <h1>A Teacher at the University Of Makati, Who has been teaching for half a decade</h1>
                
            </div>
        </section>

        <section class="profile2">
            <div class = "preach">
                <h3>He is teaching: <br> - Oral Communication <br> - Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino <br> - Empowerment Technologies, Creative Writing and Creative Nonfiction<br> -21st Century Literature, Media and Information Literacy, Entrepreneurship </h3>
                <img src = "Elviscss/preach.jpg">
            </div>
        </section>
    </div>

</body>

</html>
