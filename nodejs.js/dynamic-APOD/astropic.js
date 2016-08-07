//Problem: We want to return the APOD from NASA based on the user selected date

//Solution: Use APOD API to return the APOD image from the database 
var EventEmitter = require('events').EventEmitter;
var https = require('https');
var http = require('http');
var util = require('util');

/**
 * An EventEmitter to get a APOD from NASA API.
 * @param date
 * @constructor
 */

function getAstroPic(date) {
    
    EventEmitter.call(this);

    apodEmitter = this;
    
    //Connect to the API url
    var request = https.get('https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY&date=' + date, function(response) {
        
        var body = '';
        
        if (response.statusCode !== 200) {
            
            request.abort();
            //Status Code Error
            apodEmitter.emit('error', new Error('There was an error getting the picture for ' + date + '. (' + response.statusCode + ')'));
        }
        
        response.on('data', function(chunk) {
            body += chunk;
            apodEmitter.emit('data', chunk);
        });
        //Read the data
        response.on('end', function() {
            if(response.statusCode === 200) {
                try {
                    //Parse the data
                    //Print data out
                    var astroData = JSON.parse(body);
                    apodEmitter.emit('end', astroData);
                } catch(error) {
                    //parse error    
                    apodEmitter.emit('error', error); 
                } 
            }
        }).on('error', function(error) {
            apodEmitter.emit('error', error);
        });
    });
}

util.inherits(getAstroPic, EventEmitter);
module.exports = getAstroPic;