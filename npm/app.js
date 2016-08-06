var unsecurePlainPassword = 'password';

var bcrypt = require('bcrypt');
var colors = require('colors');

bcrypt.genSalt(10, function(error, salt) {
    bcrypt.hash(unsecurePlainPassword, salt, function(error, hash) {
        console.log(hash.green);
        //compare the password
        bcrypt.compare(unsecurePlainPassword, hash, function(error, res) {
            console.log(res);
        });
    })
});

