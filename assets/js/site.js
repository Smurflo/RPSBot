// page for all javascript
// use page variable to determine correct page

var APP = APP || {};

$(document).ready(function() {
    // Call stuff here that needs to be done on every page


    // Call stuff here that only needs to be called for certain pages
    if(page === 'dashboard') {
        console.log("in dashboard");
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