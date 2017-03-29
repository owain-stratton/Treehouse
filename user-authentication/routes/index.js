var express = require('express');
var router = express.Router();
const User = require('../models/user');

// GET /
router.get('/', function(req, res, next) {
  return res.render('index', { title: 'Home' });
});

// GET /about
router.get('/about', function(req, res, next) {
  return res.render('about', { title: 'About' });
});

// GET /contact
router.get('/contact', function(req, res, next) {
  return res.render('contact', { title: 'Contact' });
});

// GET /register
router.get('/register', (req, res, next) => {
   return res.render('register', { title: 'Sign Up' });
});

// POST /register
router.post('/register', (req, res, next) => {
   const { body } = req;
   if (
      body.email &&
      body.name &&
      body.favoriteBook &&
      body.password &&
      body.confirmPassword
   ) {

      // confirm that the user typed the password correct
      if (body.password !== body.confirmPassword) {
         const err = new Error('Passwords do not match.');
         err.status = 400;
         return next(err);
      }

      // creat object with user data
      const userData = {
         email: body.email,
         name: body.name,
         favoriteBook: body.favoriteBook,
         password: body.password
      };

      // user schemas create method to insert document into Mongo
      User.create(userData, (error, user) => {
         if (error) {
            return next(error);
         } else {
            req.session.userId = user._id;
            return res.redirect('/profile');
         }
      })
   } else {
      const err = new Error('All fields are required.');
      err.status = 400;
      return next(err);
   }
});

// GET /login
router.get('/login', (req, res, next) => {
   return res.render('login', { title: 'Log In' });
});

// POST /login
router.post('/login', (req, res, next) => {
   const { body } = req;

   if (body.email && body.password) {
      User.authenticate(body.email, body.password, (error, user) => {
         if (error || !user) {
            const err = new Error('Wrong email or password.');
            err.status = 401;
            return next(err);
         } else {
            req.session.userId = user._id;
            return res.redirect('/profile');
         }
      });
   } else {
      const err = new Error('Email and password are required.');
      err.status = 401;
      return next(err);
   }
});

// GET /profile
router.get('/profile', (req, res, next) => {
   if (!req.session.userId) {
      const err = new Error('You are not authorized to view this page.');
      err.status = 403;
      return next(err);
   }
   User.findById(req.session.userId)
      .exec((error, user) => {
         if (error) {
            return next(error);
         } else {
            return res.render('profile', { title: 'Profile', name: user.name, favorite: user.favoriteBook });
         }
      });
});

// GET /logout
router.get('/logout', (req, res, next) => {
   if (req.session) {
      req.session.destroy((err) => {
         if (err) {
            return next(err);
         } else {
            res.redirect('/');
         }
      });
   }
});

module.exports = router;
