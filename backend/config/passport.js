const LocalStrategy = require('passport-local').Strategy;
const fs = require('fs');
const debug = require('debug')('OxStart:passport');

/**
 * @description Si le provider à crash ou n'est pas activé, alors on utilise la strategy local de passport.
 * Le programme va exactement comme le provider intérroger la base de données "répliqué".
 * La seul différence est que lorsque l'utilisateur passera d'un oxBras à l'autre il faudra qu'il se reconnecte car les tokens ne sont pas utilisé
 */
module.exports = (passport) => {

  passport.use(new LocalStrategy(
    (username, password, done) => {
      if (username === 'admin' && password === 'oxpass') { // A mettre dans mongoDB /!\
        debug(username,'are connected');

        let userDatas = {
          username, 
          email: 'contact@occitaline.com',
          lang:'EN',
          level : 'ADMIN',
        };
        // Récupération du fichier de langue.
        switch(userDatas.lang) {
          case 'FR':
            loadFile('FR_fr');
            break;
          case 'EN':
            loadFile('EN_en');
            break;

          default:
            loadFile('EN_en');
        }

        function loadFile(lang) {
          let langFile = fs.readFileSync(__dirname+'/lang/'+lang+'.json');
          userDatas.langFile = JSON.parse(langFile);
        }

        return done(null, userDatas);
      } else {
        return done(null, false);
      }
    }
  ));

  passport.serializeUser(function (user, done) {
    done(null, user);
    });

  passport.deserializeUser((user, done) => {
    done(null, user);
  });

}
