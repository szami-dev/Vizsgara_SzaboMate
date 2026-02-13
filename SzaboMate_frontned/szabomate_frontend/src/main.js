import './assets/openpage.css'

import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap'
import router from './router' //importáljuk a routert
import axios from 'axios'



createApp(App)
    .use(router)
    .use(axios)
    .mount('#app')
