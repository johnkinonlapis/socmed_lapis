<?php include 'views/header.php'; ?>
        <div class="input-form">
            <form action ="models/signup_account.php" method="POST">
                <label for="emial">Email</label>
                    <input type="email" id="email" name="email" placeholder="johnkinon07@gmail.com">
                <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" placeholder="johnkinon">
                <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="lapis"> 
                <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********">   
                <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" placeholder="********">     
                    <input type="submit" value="Signup">
            </form>
        </div>
 <?php include 'views/footer.php';