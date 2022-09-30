<html>
    <head>
        <style>
            body {
                background-color: white;
            }
            .main-div {
                margin: 30px auto;
                text-align: center;
                padding: 20px;
                width: 100&;
                min-height: 100px;
                border-radius: 100px;
                background-color: pink;
            }
        </style>
       
    </head>
    <body>
        <div class="main-div">
		
		
            <?php
                // to declare variables
				$title = "My first exercise in PHP";
                $fullname = "Caryll Franz M. Carino";
                $collegeprogram = "BS Computer Engineering";
                $year = 3;
                $suffix = "th";
                $section = 301;


                // to print the display
				
				echo $title;
				echo "<br/>";
				echo "<br/>";
				echo "<br/>";
                echo "Full name: $fullname";
                echo "<br/>";
                echo "College Program: $collegeprogram";
                echo "<br/>";
                echo "Year and Section: $year$suffix Year - Block $section";
                echo "<br/>";
                echo "Today, I will learn PHP programming"
            ?>
        </div>
    </body>
</html>