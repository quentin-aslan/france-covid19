const fs = require('fs');
const debug = require('debug')('covid:router');
// const webCtrl = require('../../controllers/index.js');

module.exports = function (routerArgs) {

    const express = routerArgs.express;
    const passport = routerArgs.passport;

    const router = express.Router();
    /**
     * PAGE PRINCIPAL ACCESIBLE VIA URL POUR L'UTILISATEUR
     * Pour les pages ou l'utilisateur doit être identifier alors il faut rajouter le parametre "IsLoggedIn"
     * Ensuite, les datas de l'utilisateurs doivent être envoyé au template alors il faut ajouter : { user: req.user, lang: req.user.langFile } en option (CONTROLLERS)
     */

    /**
     * @description Dashboard
     */

    router.get('/dashboard', (req, res, next) => {
        let template = {
            page: 'dashboard'
        };
        res.render('_template', {template});
    });

    /**
     * @description Chart.JS
     */

    router.get('/chart', (req, res, next) => {
        let template = {
            page: 'chart'
        };
        res.render('chart', {template});
    });

    // router.get('/', isLoggedIn, webCtrl.dashboard);
    // router.get('/configProject', isLoggedIn, webCtrl.confProject);
    // router.get('/configAuthent', isLoggedIn, webCtrl.confAuth);
    // router.get('/configSecurity', isLoggedIn, webCtrl.confSecurity);
    // router.get('/configVlan', isLoggedIn, webCtrl.confVlan);
    // router.get('/configPlateforms', isLoggedIn, webCtrl.confPlatforms);
    // router.get('/configSystem', isLoggedIn, webCtrl.confSystem);
    // router.get('/configServices', isLoggedIn, webCtrl.confServices);
    // router.get('/configAddress', isLoggedIn, webCtrl.confAddress);
    // router.get('/discover', isLoggedIn, webCtrl.discover);
    // router.get('/monitor', isLoggedIn, webCtrl.monitor);

/*******************************************************
 ************************* LOGIN ***********************
 *******************************************************/

    /**
     * @description Login page
     * @example '/login?error=true' OR '/login'
     */
    // router.get('/login', (req, res, next) => {
    //     let error = req.query.error;
    //     res.render('login', {error});
    // });

    /**
     * @description Logout user and redirect
     */
    // router.get('/logout', (req, res, next) => {
    //     req.logout();
    //     res.redirect('/login');
    // });

    // router.post('/login', passport.authenticate('local', { // Params : username, password
    //     failureRedirect: '/login?error=1', // Redirection HTTP
    //     successRedirect: '/' // Redirection HTTP
    // }));

    /**
     * @description Vérifie que l'utilisateur est connécté, sinon le renvoie vers la page de login.
     */
    // function isLoggedIn(req, res, next) {
    //     if (req.isAuthenticated())
    //         return next();

    //     res.redirect('/login');
    // }

    return router; // Retourne le router pour le middlewar

};


