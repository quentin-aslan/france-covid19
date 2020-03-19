const debug = require('debug')('OxStart:socketAPI:confVlan');
module.exports = (io, controllers) => {

    const OxSystemDb = controllers.OxSystemDb;

    const configVlanIO = io.of('/configVlan');
    configVlanIO.on('connection', (socket) => {

        socket.on('addVlan', (vlan) => {
            debug('AddVLAN', vlan.name);
            OxSystemDb.vlanOnTrunkAdd(vlan, (err) => {
                if (err) return new Error(err);
                // Récupération des vlans et renvoie 
                OxSystemDb.getAllVlanOnTrunk((err, vlans) => {
                    if (err) return new Error("Error with getAllVlanOnTrunk SOCKET API", err);
                    socket.emit('refreshVlan', vlans);
                });
            });
        });

        socket.on('editVlan', (vlan) => {
            debug('EditVlan', vlan.name);
            // Edit VLAN
            OxSystemDb.vlanOnTrunkEdit(vlan, (err) => {
                if (err) return new Error("Error with vlanOnTrunkEDIT SOCKET API");
                // Récupération des vlans et renvoie 
                OxSystemDb.getAllVlanOnTrunk((err, vlans) => {
                    if (err) return new Error("Error with getAllVlanOnTrunk SOCKET API");
                    socket.emit('refreshVlan', vlans);
                });
            });
        });

        socket.on('deleteVlan', (_id) => {
            debug('deleteVlan', _id);
            // delete VLAN
            OxSystemDb.vlanOnTrunkDelete(_id, (err) => {
                if (err) return new Error("Error with vlanOnTrunkDelete SOCKET API");
                // Récupération des vlans et renvoie 
                OxSystemDb.getAllVlanOnTrunk((err, vlans) => {
                    if (err) return new Error("Error with getAllVlanOnTrunk SOCKET API");
                    socket.emit('refreshVlan', vlans);
                });
            });
        });

        socket.on('disconnect', () => {

        });
    });

    return configVlanIO;

};