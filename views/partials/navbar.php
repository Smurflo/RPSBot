<?php
/**
 * Created by PhpStorm.
 */
?>
<?php if(!isset($page)) $page = ''; ?>
<?php
    $homeUrl = $baseUrl . '/dashboard';
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $homeUrl; ?>">RPSBot</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="<?php echo $baseUrl; ?>/page1">Page1</a></li>
                <li><a href="<?php echo $baseUrl; ?>/page2">Page2</a></li>
                <li><a href="<?php echo $baseUrl; ?>/page3">Page3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo $baseUrl; ?>/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>