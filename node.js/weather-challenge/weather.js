var http = require('http');

//print out message
function printMessage(location, temp, windSpeed) {
    var message = location + ' has a temperature of ' + temp + ' degrees C and the wind speed of ' + windSpeed + ' m/s';
    console.log(message);
}

//print out error messages
function printError(error) {
    console.error(error.message);
}

function getForecast(location) {
    
    var longitude = location.long,
        latitude = location.lat;
    
    //Connect to the API url (http://teamtreehouse.com/username.json)
    var request = http.get('http://opendata-download-metfcst.smhi.se/api/category/pmp2g/version/2/geotype/point/lon/' + longitude + '/lat/' + latitude + '/data.json', function(response) {
        
        var weatherRes = '';
        
        response.on('data', function(chunk) {
            weatherRes += chunk;
        });
        //Read the data
        response.on('end', function() {
            if(response.statusCode === 200) {
                try {
                    //Parse the data
                    //Print data out
                    var forecast = JSON.parse(weatherRes);
                    var temp = forecast.timeSeries[0].parameters[1].values[0];
                    
                    var windSpeed = forecast.timeSeries[0].parameters[4].values[0]
                    printMessage(location.name, temp, windSpeed);
                } catch(error) {
                    //parse error    
                    printError(error);    
                } 
            } else {
                printError({message: 'There was an error getting the forecast for ' + location.name + '. (' + response.statusCode + ')'});
            }
        });
    });

    request.on('error', printError);
}
module.exports.get = getForecast;