//Problem: we want to find the temperature and wind speed in Stockholm, Sweden

//Solution: use node.js to connect to SMHI's API to return the weather of the chosen location and to print it out
var weather = require('./weather');
var location = {
    name: 'Stockholm',
    lat: 59.3293,
    long: 18.0686
};

weather.get(location);