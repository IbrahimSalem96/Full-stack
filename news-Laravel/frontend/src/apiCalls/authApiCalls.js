import { authActions } from '../slices/authSlice'
import request from '../utils/request'
import { toast } from 'react-toastify'


//Login User 
export function LoginUser(user) {
    return async (dispatch) => {
        try {
            const { data } = await request.post('/api/auth/login', user)
            dispatch(authActions.login(data))
            localStorage.setItem("userInfo", JSON.stringify(data))

        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//logout User 
export function logout() {
    return async (dispatch) => {
        dispatch(authActions.logout())
        localStorage.removeItem("userInfo")
    }
}


//Register User 
export function registerUser(user) {
    return async (dispatch) => {
        try {
            const { data } = await request.post('/api/auth/register', user)
            dispatch(authActions.register(data.message))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}