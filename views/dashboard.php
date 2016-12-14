<?php
/**
 * Created by PhpStorm.
 */
?>

<!DOCTYPE html>
<html lang="en">

<?php include '/partials/header.php'  ?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<h1 class="dashboardTitle">Let's Play Some Rock-Paper-Scissors!</h1>


<div class="container game">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4 col-md-offset-1 userMove selection">
            <h2 class="text-center">You</h2>
            <div class="row actionDiv">
                <a class="btn actionBtn userRock"><img class="actionPic" src="<?php echo $baseUrl; ?>/assets/images/rock.png"></a>
                <a class="btn actionBtn userPaper"><img class="actionPic" src="<?php echo $baseUrl; ?>/assets/images/paper.png"></a>
                <a class="btn actionBtn userScissors"><img class="actionPic" src="<?php echo $baseUrl; ?>/assets/images/scissors.png"></a>
            </div>

        </div>
        <div class="col-md-4 col-md-offset-2 userMove selection">
            <h2>Computer</h2>
            <p><img class="computerStatus col-md-12" src="<?php echo $baseUrl; ?>/assets/images/ready.png"</p>
        </div>
    </div>
</div>

<?php include '/partials/footer.php' ?>

</html>
