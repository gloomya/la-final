<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'header.php';
        ?>
        <title>Register Coffee Store - ADD SLEEVE</title>
    </head>
    <body>
        <header>
            <?php 
            $activePage = "business";
            include 'nav.php';
            ?>
        </header>
        <main>
         <section class="registration">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="tell center">Tell Us About Your Business</h3>
                        <form action="signup.php" class="register-form" method="POST">
                            <input type="text" name="company" placeholder="Company Name" required><br>
                            <input type="number"  min="0" name="numsleeves" placeholder="Number of ads" required><br>
                            <input type="text" name="person" placeholder="Contact Person" required><br>
                            <input type="tel" name="phone" placeholder="Phone number" required><br>
                            <div class="center"><button type="submit" class="button">SEND</button></div>
                        </form>
                    </div>
                    <div class="col-6">
                        <img src="img/business.jpg" alt="business" width="100%">
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