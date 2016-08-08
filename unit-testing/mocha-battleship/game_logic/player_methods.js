var checkForShip = require('./ship_methods.js').checkForShip;

function validateLocation(player,coordinates) {
  var x = coordinates[0];
  var y = coordinates[1];
  
  var spaceAvailable = !checkForShip(player,coordinates);
  
  if((x <= 9 && x >= 0) && (y <= 9 && y >= 0)) {
    return spaceAvailable;
  } else {
    return false;
  }
} //end validateLocation 

function validateLocations(player, locations) {
  var validated = locations.map(function (location) {
    return validateLocation(player, location);
  });
  return validated.indexOf(false) === -1;
} //end validateLocations

function placeShip(player, ship, startingCoordinates, direction) {
  if(!direction) throw Error('You left out the direction! I need that for math');
  
  var proposedLocations = [];
  var previousLocation,
      rowNumber,
      colNumber;
  
  for(var i = 0; i < ship.size; i++) {
    previousLocation = proposedLocations[i - 1] || [];
    rowNumber = previousLocation[0];
    colNumber = previousLocation[1];
    
    proposedLocations[i] = (i === 0)
    ? startingCoordinates
    : (direction === 'horizontal')
      ? [rowNumber, ++colNumber]
      : [++rowNumber, colNumber];
  }
  
  if(validateLocations(player, proposedLocations)) {
    ship.locations = proposedLocations;
  } else {
    return false;
  }
} //end placeShip




//fireAtShip(player, randomCoordinates());
//placeShip(computerPlayer, computerPlayer.ship[0], randomCoordinates(), randomDirection());



function randomCoordinates() {
  var x = Math.floor(Math.random() * 9);
  var y = Math.floor(Math.random() * 9);
  return [x,y];
}

function randomDirection() {
  return Math.random() > 0.5 ? 'horizontal' : 'vertical';
}


module.exports = {
  placeShip: placeShip,
  validateLocations: validateLocations,
  validateLocation: validateLocation,
  randomCoordinates: randomCoordinates,
  randomDirection: randomDirection
}