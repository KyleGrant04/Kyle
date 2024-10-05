<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Profile</title>
    <link rel="stylesheet" href="Arielcss/ariel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- nav bar -->
    <div class="nav">
        <ul>
            <li><a href="Arielfeedback.php">Feedback</a></li>
            <li><a href="Arielfacts.php">Fact</a></li>
            <li id = "line1"><a href="Arielprofile.php">About</a></li>
            <li><a href="main.php">Home</a></li>
        </ul>
    </div>


    <div class="ariel">
        <section class="profile">
            <div class="text">
            
                <div id="output"></div>
                <?php 
                    $name = " Prof. Ariel Domingo, PhD "; 
                    $age = "36 Years Old"; 
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
                <img src="Arielcss/ariel2.png" alt="Sir Ariel">
            </div>
        </section>

        <section class="profile1">
            <div class = "umak">
                <img src = "Arielcss/umak.jpg">
                <h1>Teacher at University Of Makati, Teaching for a Decade</h1>
                
            </div>
        </section>

        <section class="profile2">
            <div class = "code">
                <h3>He is teaching: <br> - Computer Programming <br> - Computer Servicing System <br> - Management Information System <br> - Empowerment Technologies <br> - Practical Research <br> - Research Project</h3>
                <img src = "Arielcss/code.gif">
            </div>
        </section>
    </div>

</body>

</html>
