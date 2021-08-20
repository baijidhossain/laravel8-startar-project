const { includes } = require('lodash');

window._ = require('lodash');



try {

 
    window.$ = window.jQuery = require('jquery');

    window.Swal=require('sweetalert2');
    require('../../node_modules/nestable2/jquery.nestable.js');

   
} catch (e) {}



window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

