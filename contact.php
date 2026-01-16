<?php include 'includes/header.php'; ?>
    <h1>Contact Us</h1>

    Name
    Email
    Message
    Submit
    <form method="get" action="contactAction.php">
        <!--<input type="text" name="name" id="name" placeholder="Enter your name"><br />
        <input type="email" name="email" id="email" placeholder="Enter your email"><br />
        <input type="text" name="message" id="message" placeholder="Enter your message"><br />-->

        <label>How Many Fruit Rollups?</label>
        <input type="text" name="fruitQuant" id="fruitQant" placeholder="Please enter the number.">
        <label>What Flavor?</label>
        <input type="text" name="fruitFlav" id="fruitFlav" placeholder="Please enter the flavor.">
        <input type="submit" name="submit">
    </form>


<?php include 'includes/footer.php'; ?>