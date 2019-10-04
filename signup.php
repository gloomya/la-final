<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'header.php';
        ?>
        <title>Complete Sign Up - ADD SLEEVE</title>
    </head>
    <body>
        <header>
            <?php 
            $activePage = "register";
            include 'nav.php';
            ?>
        </header>
        <main>
         <section class="registration">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="tell">Thank you!</h3>
                        <h4>We have received your request. Please check the information you have provided:</h4>
                        <p><strong>Company name: </strong><?php print $_POST['company'];?></p>
                        <p><strong>Number of sleeves: </strong><?php print $_POST['numsleeves'];?></p>
                        <p><strong>Contact person: </strong><?php print $_POST['person'];?></p>
                        <p><strong>Phone number: </strong><?php print $_POST['phone'];?></p>
                        <p>We will get back to you during the next 24 hours on business days!</p>
                        <div class="center space"><a href="index.php" class="button">CONFIRM</a></div>
                    </div>
                </div>
                
            </div>
         </section>
        </main>
        <footer>
            <?php 
            include 'footer.php';
            ?>
        </footer>
    </body>
</html>