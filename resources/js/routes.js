import Vue from 'vue'
import Router from 'vue-router'
import Client from './components/Client'



Vue.use(Router)

export default new Router({

    routes: [
        // const routes = [
        {
            path:'/client',
            name: 'client',
            component: Client
        }
       
        
    ],

    mode: 'history'

});

// export default routes


