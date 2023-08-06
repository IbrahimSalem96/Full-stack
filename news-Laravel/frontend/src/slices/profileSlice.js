import { createSlice } from '@reduxjs/toolkit'

const profileSlice = createSlice({
    name: 'profile',
    initialState: {
        profile: null,
        loading: false,
        isProfileDeleted: false,
        usersCount: null,
        profiles: [],
    },

    reducers: {
        setProfile(state, action) {
            state.profile = action.payload
        },

        setProfilePhoto(state, action) {
            state.profile.profilePhoto = action.payload
        },

        updataProfile(state, action) {
            state.profile = action.payload
        },

        setLoading(state) {
            state.loading = true
        },

        clearLoading(state) {
            state.loading = false
        },

        setIsProfileDelted(state) {
            state.isProfileDeleted = true
            state.loading = false
        },

        clearIsProfileDelted(state) {
            state.isProfileDeleted = false
        },

        setUsersCount(state, action) {
            state.usersCount = action.payload
        },

        setProfiles(state, action) {
            state.profiles = action.payload
        },

    }
})

const profileReducer = profileSlice.reducer
const profileActions = profileSlice.actions


export { profileReducer, profileActions }