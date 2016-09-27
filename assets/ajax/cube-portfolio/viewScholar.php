<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= 'databaseConnection.php';
    include($path);

    // Create connection
    $conn = $conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM research_scholar WHERE card_no='".$_REQUEST["card_no"]."'";

    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $card_no=$row["card_no"];
        $name=$row["name"];
        $email=$row["email"];
        $advisor=$row["advisor"];
        $undergraduate=$row["undergraduate"];
        $postgraduate=$row["postgraduate"];
        $current_research=$row["current_research"];
        $publications=$row["publications"];
        $research_area=$row["research_area"];
    }
    mysqli_close($conn);
?>

<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <img src="assets/img/research_scholars/<?php echo $card_no; ?>.jpg" alt="Dashboard" class="cbp-l-project-img">
    </div>

    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title text-uppercase"><?php echo $name; ?></div>
        <div class="cbp-l-inline-subtitle"><?php echo $research_area; ?></div>

        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Advisor:</strong> <?php echo $advisor; ?></p><br>
        <h3>Educational Background</h3>
        <hr>

        <p><strong>Undergraduate:</strong> <?php echo $undergraduate; ?></p>
        <p><strong>Postgraduate:</strong> <?php echo $postgraduate; ?></p>
        <p><strong>Current Research:</strong> <?php echo $current_research; ?></p>
        <p><strong>Publications:</strong> <?php echo $publications; ?></p><br>

        <!--<ul class="list-inline team-social">
            <li><a class="fb" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="gp" href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>-->
    </div>
</div>
