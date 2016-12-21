// page for all javascript
// use page variable to determine correct page

var APP = APP || {};

$(document).ready(function() {
    // Call stuff here that needs to be done on every page


    // Call stuff here that only needs to be called for certain pages
    if(page === 'dashboard') {
        console.log("in dashboard");
        APP.dashboardJS();
    }

    if(page === 'page1') {
        console.log("in page1");
    }

    if(page === 'page2') {
        APP.doStuffForPage2();
    }

    if(page === 'page3') {
        APP.page3Stuff(page);
    }
});

APP.dashboardJS = function() {
    calculateMove();

};

calculateMove = function () {
    //set status to 'thinking'
    $("#comStatus").attr("src", baseUrl + "/assets/images/thinking.png");
    //TODO disable user buttons while thinking

    //calculate move
    //Just pick randomly for now
    var move = pickRandomMove();

    //set Move
    setComputerMove(move);
    console.log("new move: " + move);

    //set status to 'ready'
    $("#comStatus").attr("src", baseUrl + "/assets/images/ready.png");
    //TODO reactivate user buttons
};

setComputerMove = function (moveIndex) {
    //$("#comStatus").attr("data-move", moves[moveIndex]);
    comMove = moves[moveIndex];
};

pickRandomMove = function () {
    //random num from 0 - 2
    return Math.floor((Math.random() * 3));
};

// 1 = user win, 0 = tie, -1 = computer win
calculateWin = function (userMove) {
    if(userMove == comMove)
        return 0; //tie
    else if(userMove == "rock" && comMove == "scissors")
        return 1; //user win
    else if(userMove == "paper" && comMove == "rock")
        return 1; //user win
    else if(userMove == "scissors" && comMove == "paper")
        return 1; //user win
    else
        return -1; //com win
};

showResults = function (winner, userMove) {

    $("#movesText").text("User: " + userMove + "\nBot: " + comMove);

    if(winner == 1)
        userWinActions();
    else if (winner == 0)
        tieActions();
    else if (winner == -1)
        comWinActions();
    else
        alert("Something went wrong calculating winner: " + winner);
};

userWinActions = function () {
    $("#winLoseText").text("You Win!");
};

tieActions = function () {
    $("#winLoseText").text("Tie!");
};

comWinActions = function () {
    $("#winLoseText").text("Bot Wins!");
};


//JQuery ------------------------------------------------------------

//User makes a move
$(".actionBtn").click(function () {
    var userMove = $(this).data("move");
    //var comMove = $("#comStatus").data("move");
    //console.log("move1: " + comMove);
    //console.log("move2: " + $("#comStatus").data("move"));

    //pick new computer Move (start early so com has more time to 'think')
    calculateMove();

    // 1 = user win, 0 = tie, 1 = computer win
    var winner = calculateWin(userMove, comMove);

    showResults(winner, userMove, comMove);
});




// Base Template Stuff ----------------------------------------------
APP.doStuffForPage2 = function() {
    console.log("omg we made it to page 2!");
};

APP.page3Stuff = function(someVar) {
    console.log("Now we're on " + someVar + "!");
};

//example ajax call
APP.exampleAjax = function() {

    var ajaxData = { //input data
        'page': page
    };

    $.ajax({
        method: 'POST',
        url: baseUrl + '/ws/doSomething',
        data: ajaxData,
        dataType: 'json',
        success: function (data) {
            //do something with data
            console.log("Ajax Success!");
            console.log(data);
        },
        error: function (xhr, status, error) {
            //print some error message
            console.log('Error: ' + error);
        }
    });
};