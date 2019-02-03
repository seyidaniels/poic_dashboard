import Vue from 'vue'
import Vuex from 'vuex'
import Axios from 'axios';

Vue.use(Vuex)

const state = {
  callingAPI: false,
  searching: '',
  serverURI: 'http://poic.local/api/',
  user: null,
  token: null,
    ignoreAuthToken: false,
    notifications: [],
  userInfo: {
    messages: [{1: 'test', 2: 'test'}],

    tasks: []
  }
}

const getters = {
  getToken (state) {
    return state.token
  },
  isAuthenticated: state => {
    return localStorage.getItem('token') !== null
  },
  getUser (state) {
 return JSON.parse(localStorage.getItem('user'))
    },
notifications: state => {
    // not 'this.state' because state is passed in as a parameter
    return state.notifications
}

//     notifications() {
//         let notifications = [];

//         console.log(notifications);
//         return notifications;
//   }
}

const mutations = {
  SET_USER (state, user) {
    state.user = user
  },
  SET_TOKEN (state, token) {
    state.isAuthenticated = true
    state.token = token
  },
SET_NOTIFICATIONS(state, notifications) {
    state.notifications = notifications
}
}

const actions = {
  SET_TOKEN (context, token) {
    context.commit('SET_TOKEN', token)
  },
  SET_USER (context, user) {
    context.commit('SET_USER', user)
    },
    SET_NOTIFICATIONS(context, notifications) {
        context.commit('SET_NOTIFICATIONS', notifications)
    }
}

export default new Vuex.Store({
  getters,
  state,
  mutations,
  actions
})
