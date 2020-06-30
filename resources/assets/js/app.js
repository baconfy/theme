window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;

    require('bootstrap');

    $('[data-toggle="tooltip"]').tooltip()
} catch (e) {
}