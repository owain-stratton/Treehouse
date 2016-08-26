'use strict';
var express = require('express');
var router = express.Router();

// GET url/questions
router.get('/', function(req, res) {
  res.json({
    response: 'You sent me a GET request'
  });
});

// POST url/questions
router.post('/', function(req, res) {
  res.json({
    response: 'You sent me a POST request',
    body: req.body
  });
});

// GET url/questions/:id
router.get('/:qID', function(req, res) {
  res.json({
    response: 'You sent me a GET request for ID' + req.params.qID
  });
});

// POST url/questions/:id/answers
router.post('/:qID/answers', function(req, res) {
  res.json({
    response: 'You sent me a POST request to /answers',
    questionID: req.params.qID,
    body: req.body
  });
});

// PUT url/questions/:qID/answers/:aID
router.put('/:qID/answers/:aID', function(req, res) {
  res.json({
    response: 'You sent me a PUT request to /answers',
    questionID: req.params.qID,
    answerID: req.params.aID,
    body: req.body
  });
});

// DELETE url/questions/:qID/answers/:aID
router.delete('/:qID/answers/:aID', function(req, res) {
  res.json({
    response: 'You sent me a DEL request to /answers',
    questionID: req.params.qID,
    answerID: req.params.aID
  });
});

// POST url/questions/:qID/answers/:aID/vote-up
// POST url/questions/:qID/answers/:aID/vote-down
router.post('/:qID/answers/:aID/vote-:dir', function(req, res, next) {
  if(req.params.dir.search(/^(up|down)$/) === -1) {
    var err = new Error('Not Found');
    err.status = 404;
    next(err);
  } else {
    next();
  }
}, function(req, res) {
  res.json({
    response: 'You sent me a POST request to /vote-' + req.params.dir,
    questionID: req.params.qID,
    answerID: req.params.aID,
    vote: req.params.dir
  });
});


module.exports = router;
