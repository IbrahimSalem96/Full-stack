import { createSlice } from '@reduxjs/toolkit'

const authSlice = createSlice({
    name: 'auth',
    initialState: {
        // user: null ///At first, there is no person logged in, so null  (initialState)
        user: localStorage.getItem("userInfo") ? JSON.parse(localStorage.getItem("userInfo")) : null,
        registerMessage: null
    },

    reducers: {
        login(state, action) {
            //state.user => Store a new value
            // action.payload => Inside the toolkit, the payload is the one that contains the data, because the action id ufhvm uk is missing.
            state.user = action.payload
            state.registerMessage = null
        },

        logout(state) {
            state.user = null
        },

        register(state, action) {
            state.registerMessage = action.payload
        },

        setUserPhoto(state, action) {
            state.user.profilePhoto = action.payload
        },

        setUsername(state, action) {
            state.user.username = action.payload
        },

    }
})


const authReducer = authSlice.reducer
const authActions = authSlice.actions


export { authReducer, authActions }