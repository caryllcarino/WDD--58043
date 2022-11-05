<<html>
    <head>
        <title>Midterm Long Quiz</title>
        <style>
            body {
                background: #FFC0CB;
            }
            #main {
                background: #FFFFFF;
                border-radius: 40px;
                margin: 10px auto 10px auto;
                padding: 40px;
                max-width: 50%;
                float: center;
                text-align: center;
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <?php
                // Problem 1

                $salary_rate_per_day = 600;
                $salary = $salary_rate_per_day * 15;
                $tax = $salary * 0.30;
                $net_pay = $salary - $tax;

                echo "<h3>Problem 1</h3>";
                echo "<Salary rate: $salary_rate_per_day<br/>";
                echo "Salary: $salary<br/>";
                echo "Taxable amount: $tax<br/>";
                echo "Net Pay: $net_pay<br/>";

                echo "<br/ >";
                echo "<hr/>";
				
				// Problem 2

                $max = 50;
                $total = 0;
                for($i= 0; $i <= $max; $i++) {
                    $total += $i;
                }

                echo "<h3>Problem 2</h3>";
                echo "The sum of all positive integers from 1-$max is <b>$total</b>";


                echo "<br/ >";
                echo "<br/ >";
				echo "<br/ >";
                echo "<hr/>";
				echo "<b>Submitted by: Caryll Franz M. Carino</b>";
				echo "<br/ >";
				echo "<br/ >";
				echo "<b>CPE 301</b>";
            ?>
                 
        </div>
    </body>
</html>