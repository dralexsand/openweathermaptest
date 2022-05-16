import axios from "axios";
import config from "../../env";

const actions = {
    async fetchProjects(ctx, user_id) {
        let url = config.baseApiUrl + 'projects/' + user_id
        await axios.get(url)
            .then(function (response) {
                // handle success
                console.log(config.baseApiUrl)
                console.log(response.data);
                ctx.commit('updateProjects', response.data)
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

    }
}

const mutations = {
    updateProjects(state, payload) {
        state.projects = payload
    }
}

const state = {
    projects: []
}

const getters = {
    getProjects(state) {
        return state.projects
    }
}

export default {
    namespaced: true,
    actions,
    mutations,
    state,
    getters
}
