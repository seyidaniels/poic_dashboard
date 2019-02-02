import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
  callingAPI: false,
  searching: '',
  serverURI: 'http://poic.local/api/',
  user: null,
  token: null,
  ignoreAuthToken: false,
  userInfo: {
    messages: [{1: 'test', 2: 'test'}],
    notifications: [],
    tasks: []
  }
}

const getters = {
  getToken (state) {
    return state.token
  },
  isAuthenticated (state) {
    return localStorage.getItem('token') !== null
  },
  getUser (state) {
    return state.user.firstname + ' ' + state.user.lastname
  }
}

const mutations = {
  SET_USER (state, user) {
    state.user = user
  },
  SET_TOKEN (state, token) {
    state.isAuthenticated = true
    state.token = token
  }
}

const actions = {
  SET_TOKEN (context, token) {
    context.commit('SET_TOKEN', token)
  },
  SET_USER (context, user) {
    context.commit('SET_USER', user)
  }
}

export default new Vuex.Store({
  getters,
  state,
  mutations,
  actions
})
