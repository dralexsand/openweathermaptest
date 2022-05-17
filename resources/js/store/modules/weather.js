import axios from "axios";
import config from "../../env";

const actions = {
    async fetchWeather(ctx, city) {
        let url = config.baseApiUrl + city
        await axios.get(url)
            .then(function (response) {
                // handle success
                console.log(config.baseApiUrl)
                console.log(response.data);
                ctx.commit('updateWeather', response.data)
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
    updateWeather(state, payload) {
        state.weather = payload
    }
}

const state = {
    weather: []
}

const getters = {
    getWeather(state) {
        return state.weather
    }
}

export default {
    namespaced: true,
    actions,
    mutations,
    state,
    getters
}
