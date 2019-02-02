import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/js/components/Home'
import NotFound from '@/js/components/NotFound'
import CreateTeam from '@/js/components/CreateTeam'
import Project from '@/js/components/Project'
//import store from '@/js/store' // your vuex store



Vue.use(Router)


const router = new Router({
  routes: [
    {path: '/', component: Home},
    {path: '/404', component: NotFound },
    {path: '*', redirect: '/404' },
    {path: '/create-team', component: CreateTeam },
    {path: '/project', component: Project}

  ]
}

)


export default router
