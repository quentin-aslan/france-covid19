const express = require('express');
const app = express();
const path = require('path');
const debug = require('debug')('covid19:App');


// view engine setup
app.set('views', path.join(__dirname, '../frontend/views'));
app.use(express.static(path.join(__dirname, '../frontend/public')));

app.set('view engine', 'ejs');

app.get('/', function (req, res, next) {
    let template = {
        page: 'dashboard'
    };
    res.render('_template', {template});
});

app.get('/confinement', function (req, res, next) {
    let template = {
        page: 'confinement'
    };
    res.render('_template', {template});
});

app.get('/chart', (req, res, next) => {
    res.render('charts');
})

app.get('/color', (req, res, next) => {
    let template = {
        page: 'color'
    };
    res.render('_template', {template});
});

debug('CONNEXION AU SITE')

app.listen(2000, function () {
    console.log('Example app listening on port 2000!')
});