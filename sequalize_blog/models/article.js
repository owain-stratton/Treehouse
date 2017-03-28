'use strict';
var dateFormat = require('dateformat');

module.exports = function(sequelize, DataTypes) {
  var Article = sequelize.define('Article', {
    title: {
      type: DataTypes.STRING,
      validate: {
         notEmpty: {
            msg: 'Title for an article must exist'
         }
      }
   },
    author: DataTypes.STRING,
    body: DataTypes.TEXT
  }, {
    classMethods: {
      associate: function(models) {
        // associations can be defined here
      }
   },
   instanceMethods: {
      publishedAt: function publishedAt() {
        return dateFormat(this.createdAt, "dddd, mmmm dS, yyyy, h:MM TT");
     },
      shortDescription: function shortDescription(){
        return this.body.length > 30 ? this.body.substr(0, 30) + "..." : this.body;
      }
   }
  });
  return Article;
};
