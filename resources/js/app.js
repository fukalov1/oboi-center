
require('./bootstrap');

import Vue from 'vue'
import 'jquery'

import App from "./App.vue";

const app = new Vue({
    el: '#app'
});


$(document).ready(function() {

    $("#modal_kup").on('click', function (e) {
        if (e.target == this) $("#modal_kup").fadeOut('fast');
    })

    function func() {
        document.getElementById("modal_kup").style.display = "block";
    }
    setTimeout(func, 5000);

});
