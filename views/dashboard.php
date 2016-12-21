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
                <a class="btn actionBtn userRock" data-move="rock"><img class="actionPic" src="<?php echo $baseUrl; ?>/assets/images/rock.png"></a>
                <a class="btn actionBtn userPaper" data-move="paper"><img class="actionPic" src="<?php echo $baseUrl; ?>/assets/images/paper.png"></a>
                <a class="btn actionBtn userScissors" data-move="scissors"><img class="actionPic" src="<?php echo $baseUrl; ?>/assets/images/scissors.png"></a>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-2 userMove selection">
            <h2>Computer</h2>
            <p><img id="comStatus" class="computerStatus col-md-12" data-move="" src="<?php echo $baseUrl; ?>/assets/images/thinking.png"</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-5 col-md-2" id="outcomeBox">
            <h1 id="winLoseText" class="text-center">Fight!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-5 col-md-2" id="outcomeBox">
            <h3 id="movesText" class="text-center"></h3>
        </div>
    </div>
</div>

<?php include '/partials/footer.php' ?>

</html>
