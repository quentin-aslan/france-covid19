const debug = require('debug')('OxStart:socketAPI:recurrent')
module.exports = (io) => {
    let sidebar = true;
    const recurrent = io.of('/recurrent');
    recurrent.on('connection', (socket) => {
    
        socket.emit('sidebar', sidebar);
    
        socket.on('sidebar', (msg) => {
            debug('Sidebar:',msg);
            sidebar = msg;
        });
    });
    
    return recurrent;
};