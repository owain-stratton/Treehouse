(function() {
  function foo() {
    console.log('foo');
  }
  foo();
}());

// OR //
!function() {
  function foo() {
    console.log('fooey');
  }
  foo();
}();

// IMPORTING EXTERNAL LIBS //
// !function(_) {
//   _.someAwesomeMethod = 'yay!!!';
//   console.log(_.someAwesomeMethod);
// }(_);


// MODULE EXPORT PATTERN //
var awesomeNewModule = (function() {
  var exports = {
    foo: 5,
    bar: 10
  };
  exports.helloMars = function(exports) {
    console.log('Hello Mars!');
  };
  exports.goodbye = function() {
    console.log('Goodbye you filthy animal!');
  };
  return exports;
}(awesomeNewModule || {}));

awesomeNewModule;
awesomeNewModule.helloMars();
awesomeNewModule.goodbye();

// SUBMODULE PATTERN //
var awesomeNewModule.sub = (function() {
  var exports = {
    foo: 5,
    bar: 10
  };
  exports.helloMars = function(exports) {
    console.log('Hello Mars!');
  };
  exports.goodbye = function() {
    console.log('Goodbye you filthy animal!');
  };
  return exports;
}(awesomeNewModule.sub || {}));
