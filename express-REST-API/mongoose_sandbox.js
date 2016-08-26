'use strict';
var mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/sandbox');

var db = mongoose.connection;

db.on('error', function(err) {
  console.error('connection error', err);
});

db.once('open', function() {
  console.log('Database connection was successful!');

  var Schema = mongoose.Schema;
  var animalSchema = new Schema({
    type:   {type: String, default: 'goldfish'},
    size:   String,
    color:  {type: String, default: 'golden'},
    mass:   {type: Number, default: 10},
    name:   {type: String, default: 'gulp'}
  });

  animalSchema.pre('save', function(next) {
    if (this.mass >= 100) {
      this.size = 'big';
    } else if (this.mass >= 5 && this.mass < 100) {
      this.size = 'medium';
    } else {
      this.size = 'small';
    }
    next();
  });

  // Custom method
  animalSchema.statics.findSize = function(size, callback) {
    // this == Animal
    return this.find({size: size}, callback);
  };

  // Instance method
  animalSchema.methods.findSameColor = function(callback) {
    // this == document
    return this.model('Animal').find({color: this.color}, callback);
  }

  var Animal = mongoose.model('Animal', animalSchema);

  var Elephant = new Animal({
    type:   'elephant',
    color:  'grey',
    mass:   10000,
    name:   'Dumbo'
  });

  var animal = new Animal({});

  var Whale = new Animal({
    type:   'whale',
    mass:   190500,
    name:   'Moby'
  });

  var animalData = [
    {
      type: 'mouse',
      color: 'grey',
      mass: 0.0035,
      name: 'bob marley'
    },
    {
      type: 'nutria',
      color: 'brown',
      mass: 6.35,
      name: 'nutter'
    },
    {
      type: 'wolf',
      color: 'grey',
      mass: 85,
      name: 'Daman'
    },
    Elephant,
    Whale,
    animal
  ];

  Animal.remove({}, function(err) {
  if (err) console.error('Remove failed', err);

  Animal.create(animalData, function(err, animals) {
    if (err) console.error('Create failed', err);

    Animal.findOne({type: 'elephant'}, function(err, animals) {
      Elephant.findSameColor(function(err, animals) {
        if (err) console.error('findSameColor failed', err);

        animals.forEach(function(animal) {
          console.log(animal.name + ' the ' + animal.color + ' ' + animal.type + ' size is ' + animal.size);
        });

        db.close(function() {
          console.log('Database connection has closed!!');
        });
      });
    });
  });
});


  // PYRAMID OF DOOM (YUCKY!!!!!) //
  // Animal.remove({}, function(err) {
  //   if (err) console.error('Remove failed', err);
  //
  //   Elephant.save(function(err) {
  //     if (err) console.error('Save failed', err);
  //
  //     animal.save(function(err) {
  //       if (err) console.error('Save failed', err);
  //
  //       Whale.save(function(err) {
  //         if (err) console.error('Save failed', err);
  //
  //         Animal.find({
  //           size: 'massive'
  //         }, function(err, animals) {
  //           animals.forEach(function(animal) {
  //             console.log(animal.name + ' the ' + animal.color + ' ' + animal.type);
  //           });
  //
  //           db.close(function() {
  //             console.log('Database connection has closed!!');
  //           });
  //         });
  //       });
  //     });
  //   });
  // });



});
