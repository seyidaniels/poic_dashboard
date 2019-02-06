import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/js/components/Home'
import NotFound from '@/js/components/NotFound'
import CreateTeam from '@/js/components/CreateTeam'
import MyTeam from '@/js/components/MyTeam'
import Project from '@/js/components/Project'
//import store from '@/js/store' // your vuex store
import Notifications from '@/js/components/Notifications'
import Rules from '@/js/components/Rules'




Vue.use(Router)


const router = new Router({
        routes: [{
                path: '/',
                component: Home
            },
            {
                path: '/404',
                component: NotFound
            },
            {
                path: '*',
                redirect: '/404'
            },
            {
                path: '/create-team',
                component: CreateTeam
            },
            {
                path: '/my-team',
                component: MyTeam
            },
            {
                path: '/project',
                component: Project
            },
            {
                path: '/notifications',
                component: Notifications
            },
            {
                path: '/rules',
                component: Rules
            }
        ]
    }

)

router.beforeResolve((to, from, next) => {
    // If this isn't an initial page load.
    if (to.name) {
        // Start the route progress bar.
        NProgress.start()
        console.log("works");
    }
    next()
})

router.afterEach((to, from) => {
    // Complete the animation of the route progress bar.
    NProgress.done()
})



export default router
