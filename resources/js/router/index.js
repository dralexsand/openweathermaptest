import {createRouter, createWebHistory} from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import(/* webpackChunkName: "about" */ '../views/pages/Home')
    },
    {
        path: '/about',
        name: 'about',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
    },
    {
        path: '/demo',
        name: 'demo',
        component: () => import('../views/pages/Demo')
    },
    {
        path: '/homeview',
        name: 'homeview',
        component: HomeView
    },
    {
        path: '/users',
        name: 'users',
        component: () => import('../views/pages/Users')
    },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})

export default router
