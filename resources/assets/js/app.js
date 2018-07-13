
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    created(){
        Echo.channel('channelName')
            .listen('Message', (e) => {
                jQuery('.article-body').empty();
                e.articles.forEach(function(element) {
                        jQuery('.article-body').append("<p>" + element.name +"</p>" + "</br>");
                        jQuery('.article-body').append("<p>" + element.author +"</p>" + "</br>");
                        jQuery('.article-body').append("<p>" + element.title +"</p>" + "</br>");
                        jQuery('.article-body').append("<img src='upload/" + element.img + "'>");
                });
            });
    }
});
