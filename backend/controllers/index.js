const debug = require('debug')('covid19:controller');

/**
 * @description Controller pour toutes les pages affiché
 */

/**
 * @description Affichage du Dashboard
 */
exports.dashboard = (req, res) => {
    let template = {
        title: 'Dashboard',
        page: 'dashboard'
    };

    res.render('_template', { template, user: req.user, lang: req.user.langFile });
};

exports.chart = (req, res) => {
    
};