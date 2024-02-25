import { createStore } from 'vuex';
import createPersistedState from 'vuex-persistedstate';

const store = createStore({
    state() {
        return {
            token: null,
            email: null
        };
    },
    mutations: {
        setToken(state, token) {
            state.token = token;
        },
        setEmail(state, email) {
            state.email = email;
        }
    },
    actions: {
        login({ commit }, { token, email }) {
            commit('setToken', token);
            commit('setEmail', email);
        }
    },
    plugins: [createPersistedState({
        paths: ['token', 'email']
    })]
});

export default store;