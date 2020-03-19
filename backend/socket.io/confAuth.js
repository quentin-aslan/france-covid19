const debug = require('debug')('OxStart:socketAPI:confAuth');
module.exports = (io, controllers) => {

    const OxSystemDb = controllers.OxSystemDb;

    const confAuth = io.of('/confAuth');
    confAuth.on('connection', (socket) => {

        socket.on('addUser', (user) => {
            debug('addUser', user.username);
            OxSystemDb.userAdd(user, (err) => {
                if (err) return socket.emit('err', err);
                // Récupération des Users et renvoie 
                OxSystemDb.usersGetAll((err, users) => {
                    if (err) return socket.emit('err', err);
                    socket.emit('refreshUsers', users);
                });

            });
        });

        socket.on('editUser', (user) => {
            debug('EditUser', user.username);
            OxSystemDb.userEdit(user, (err) => {
                if (err) return socket.emit('err', err);
                // Récupération des Users et renvoie 
                OxSystemDb.usersGetAll((err, users) => {
                    if (err) return socket.emit('err', err);
                    socket.emit('refreshUsers', users);
                });
            });
        });

        socket.on('deleteUser', (_id) => {
            debug('deleteUser', _id);
            OxSystemDb.userDelete(_id, (err) => {
                if (err) return socket.emit('err', err);
                // Récupération des Users et renvoie 
                OxSystemDb.usersGetAll((err, users) => {
                    if (err) return socket.emit('err', err);
                    socket.emit('refreshUsers', users);
                });
            });
        });

        socket.on('disconnect', () => {

        });
    });

    return confAuth;

};