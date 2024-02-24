import { createStore } from 'vuex';
import createPersistedState from 'vuex-persistedstate';

const store = createStore({
    state() {
        return {
            token: null
        };
    },
    mutations: {
        setToken(state, token) {
            state.token = token;
        }
    },
    actions: {
        login({ commit }, token) {
            commit('setToken', token);
        }
    },
    plugins: [createPersistedState({
        paths: ["token"]
    })]
});


export default store;
