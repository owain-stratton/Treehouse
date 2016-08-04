//Problem: we need a simple way to look at a user's badge count and JS points
//Solution: use node.js to connect to Treehouse's API to get profile information to print it out
var profile = require('./profile');
var users = process.argv.slice(2);

users.forEach(profile.get);