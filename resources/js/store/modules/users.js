import axios from "axios";
import config from "../../env";

const actions = {
    async fetchUsers(ctx) {
        let url = config.baseApiUrl + 'users'
        await axios.get(url)
            .then(function (response) {
                // handle success
                //console.log(config.baseApiUrl)
                //console.log(response.data);
                ctx.commit('updateUsers', response.data)
            })
            .catch(function (error) {
                // handle error
                console.log(error);
            })
            .then(function () {
                // always executed
            });

    },
    async fetchUserData(ctx, user_id) {
        let url = config.baseApiUrl + 'users/' + user_id
        await axios.get(url)
            .then(function (response) {
                // handle success
                //console.log(config.baseApiUrl)
                console.log(response.data);
                ctx.commit('updateUserData', response.data)
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
    updateUsers(state, payload) {
        state.users = payload
    },
    updateUserData(state, payload) {
        state.userdata = payload
    }
}

const state = {
    users: [],
    userdata: '',
}

const getters = {
    getUsers(state) {
        return state.users
    },
    getUserData(state) {
        return state.userdata
    }
}

export default {
    namespaced: true,
    actions,
    mutations,
    state,
    getters
}
