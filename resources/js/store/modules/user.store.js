
const initialState = () => ({
    users: [],
});

const state = initialState();

const getters = {
    users(state) {
        return state.users;
    },
}

const mutations = {
    _reset(state) {
        const newState = initialState();
        Object.keys(newState).forEach(key => {
            state[key] = newState[key];
        });
    },
    _setUsers(state, data) {
        state.users = data;
    },
}

const actions = {
    resetUsers(context) {
        context.commit('_reset');
    },
}

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions,
}
