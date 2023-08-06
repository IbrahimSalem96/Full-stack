import { profileActions } from '../slices/profileSlice'
import { authActions } from '../slices/authSlice'
import request from '../utils/request'
import { toast } from 'react-toastify'

//Get User Profile  
export function getUserProfile(userId) {

    return async (dispatch) => {
        try {
            const { data } = await request.get(`/api/users/profile/${userId}`)
            dispatch(profileActions.setProfile(data))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


// Upload Profile Photo
export function uploadProfilePhoto(newPhoto) {

    return async (dispatch, getState) => {//getState => Those inside store redux answer all state
        try {
            const { data } = await request.post(`/api/users/Profile/profile-photo-upload`, newPhoto, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token, // Note that there is a very important space after the Bearer
                    "Content-Type": "multipart/ form-data"
                }
            })
            dispatch(profileActions.setProfilePhoto(data.profilePhoto))
            dispatch(authActions.setUserPhoto(data.profilePhoto))
            toast.success(data.message)

            const user = JSON.parse(localStorage.getItem('userInfo'))
            user.profilePhoto = data?.profilePhoto
            localStorage.setItem('userInfo', JSON.stringify(user))

        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


// Upload Profile 
export function uploadProfile(userId, profile) {

    return async (dispatch, getState) => {
        try {
            const { data } = await request.put(`/api/users/Profile/${userId}`, profile, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token, // Note that there is a very important space after the Bearer
                }
            })
            dispatch(profileActions.setProfilePhoto(data.profilePhoto))
            dispatch(authActions.setUsername(data.username))
            toast.success(data.message)

            const user = JSON.parse(localStorage.getItem('userInfo'))
            user.username = data?.username
            localStorage.setItem('userInfo', JSON.stringify(user))

        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


// Delete Profile 
export function deleteProfile(userId) {
    return async (dispatch, getState) => {
        try {
            dispatch(profileActions.setLoading())

            const { data } = await request.delete(`/api/users/Profile/${userId}`, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token, // Note that there is a very important space after the Bearer
                }
            })
            dispatch(profileActions.setIsProfileDelted())
            toast.success(data?.message)
            setTimeout(() => {
                dispatch(profileActions.clearIsProfileDelted())
            }, 2000);


        } catch (error) {
            toast.error(error.response.data.message)
            dispatch(profileActions.clearLoading())
        }
    }
}


// Get User Count 
export function getUserCount() {
    return async (dispatch, getState) => {
        try {
            const { data } = await request.get(`/api/users/count`, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token, // Note that there is a very important space after the Bearer
                }
            })
            dispatch(profileActions.setUsersCount(data))

        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


// Get All Users
export function getAllUsers() {
    return async (dispatch, getState) => {
        try {
            const { data } = await request.get(`/api/users/profile`, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token, // Note that there is a very important space after the Bearer
                }
            })
            dispatch(profileActions.setProfiles(data))

        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}
