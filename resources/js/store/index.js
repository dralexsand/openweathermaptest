import {createStore} from 'vuex'

import projects from "./modules/projects";
import users from "./modules/users";
import stats from "./modules/stats";

const store = createStore({
    modules: {
        projects,
        users,
        stats
    }
})

export default store

/*export default createStore({
  state: {
  },
  getters: {
  },
  mutations: {
  },
  actions: {
  },
  modules: {
  }
})*/
