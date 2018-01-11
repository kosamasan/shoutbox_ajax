<?php
    include 'database.php';
?>
<?php
// get shouts from the database
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Simple Shoutbox</title>
        <link rel="stylesheet" href="css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="js/script.js"></script>
    </head>
    <body>
        <div id="container">
            <header>
                <h1>The Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                        <li><i><?php echo $row['name']; ?></i>: <strong><?php echo $row['shout']; ?></strong> [<?php echo $row['date']; ?>]</li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <footer>
                <form action="">
                    <label for="">Your Name</label>
                    <input type="text" id="name">
                    <label for="">Write Sth</label>
                    <input type="text" id="shout">
                    <input type="submit" value="PUBLISH!" id="submit">
                </form>
            </footer>
        </div>
    </body>
</html>