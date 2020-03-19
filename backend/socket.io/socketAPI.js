var socket_io = require('socket.io');
var io = socket_io();
const debug = require('debug')('covid19:socketAPI');

var socketApi = {};

socketApi.io = io;

// Element récurrent (SIDEBAR)
// require('./recurrent')(io);
// ConfVlan
// require('./confVlan')(io);
// ConfAuth
// require('./confAuth')(io);

module.exports = socketApi;