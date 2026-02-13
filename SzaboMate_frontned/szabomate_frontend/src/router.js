import {createRouter, createWebHistory} from 'vue-router'
import Home from './pages/Home.vue'
import Offers from './pages/Offers.vue'
import NewAd from './pages/NewAd.vue'

const routes = [
    { path: '/', component: Home, name: 'Home' }, //itt lehet hozzáadni új oldalakat, pl: { path: '/about', component: About, name: 'About' }
    { path: '/offers', component: Offers, name: 'Offers' },
    { path: '/newad', component: NewAd, name: 'NewAd' },

]


const router = createRouter({
    history: createWebHistory(), //ehhez nem nyúlunk, ez a router működéséhez szükséges
    routes
})



export default router