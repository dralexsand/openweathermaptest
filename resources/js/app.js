window.Vue = require('vue').default;
require('./bootstrap');

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

import components from "./components";

const app = createApp(App);

components.forEach(component => {
    app.component(component.name, component)
});

app
    .use(router)
    .use(store)
    /*.use(BootstrapVue)
    .use(BootstrapVueIcons)
    .use(IconsPlugin)*/
    //.use(axios, VueAxios)
    .mount('#app');

//createApp(App).use(store).use(router).mount('#app')
