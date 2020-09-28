import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

import newOrder from './components/orders/MyNewOrder'
const routes =[
    {
        path:'mynew',
        component: newOrder
    }
]
export default new Router({
    mode:'history',
    routes
})
