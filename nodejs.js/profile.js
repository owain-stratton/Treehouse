var https = require('https');

//print out message
function printMessage(username, badgeCount, points) {
    var message = username + ' has ' + badgeCount + ' total badge(s) and ' + points + ' points in JavaScript';
    console.log(message);
}

//print out error messages
function printError(error) {
    console.error(error.message);
}

function getProfile(username) {
    //Connect to the API url (http://teamtreehouse.com/username.json)
    var request = https.get('https://teamtreehouse.com/' + username + '.json', function(response) {

        var body = '';

        //Read the data
        response.on('data', function(chunk) {
            body += chunk;

        });
        response.on('end', function() {
            if(response.statusCode === 200) {
                try {
                    //Parse the data
                    var profile = JSON.parse(body);
                    //Print data out
                    printMessage(username, profile.badges.length, profile.points.JavaScript);
                } catch(error) {
                    //parse error    
                    printError(error);    
                } 
            } else {
                printError({message: 'There was an error getting the profile for ' + username + '. (' + response.statusCode + ')'});
            }
        });
    });

    request.on('error', printError);
}
module.exports.get = getProfile;