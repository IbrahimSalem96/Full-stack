import { postActions } from '../slices/postSlice'
import request from '../utils/request'
import { toast } from 'react-toastify'

//Get All Posts   
export function fetchPosts(pageNumber) {

    return async (dispatch) => {
        try {
            const { data } = await request.get(`/api/posts?pageNumber=${pageNumber}`)
            dispatch(postActions.setPosts(data))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//Get Count Posts   
export function getPostsCount() {

    return async (dispatch) => {
        try {
            const { data } = await request.get(`/api/posts/count`)
            dispatch(postActions.setpostsCount(data))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//Fetch Posts Based On Category 
export function fetchPostsBasedOnCategory(category) {

    return async (dispatch) => {
        try {
            const { data } = await request.get(`/api/posts?category=${category}`)
            dispatch(postActions.setpostsCate(data))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//Create Post
export function createPost(newPost) {
    return async (dispatch, getState) => {
        try {
            dispatch(postActions.setLoading()) //Show Lodi when it's loading 
            await request.post(`api/posts/`, newPost, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token
                }
            })
            dispatch(postActions.setIsPostCreated())
            setTimeout(() => dispatch(postActions.clearIsPostCreated()), 2000) //  Hide the loader and restore things to the way they were

        } catch (error) {
            toast.error(error.response.data.message)
            dispatch(postActions.clearLoading())// In case of failure, hide the loader
        }
    }
}


//Get post by ID
export function fetchSinglePost(userId) {
    return async (dispatch) => {
        try {
            const { data } = await request.get(`/api/posts/${userId}`)
            dispatch(postActions.setPost(data))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//Toggle Like Post
export function toggleLikePost(postId) {
    return async (dispatch, getState) => {
        try {
            const { data } = await request.put(`/api/posts/like/${postId}`, {}, {
                headers: {
                    Authorization: 'Bearere ' + getState().auth.user.token
                }
            })
            dispatch(postActions.setLike(data))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//Update Post Image
export function updatePostImage(postId, newImage) {
    return async (dispatch, getState) => {
        try {
            await request.put(`/api/posts/upload-image/${postId}`, newImage, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token,
                    "Content-Type": "multipart/ form-data"
                }
            })
            toast.success("New post image uploaded successfully")
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//Update Post 
export function updatePost(postId, newPost) {
    return async (dispatch, getState) => {
        try {
            const { data } = await request.put(`/api/posts/${postId}`, newPost, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token,
                }
            })
            dispatch(postActions.setPost(data))
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}


//delete Post 
export function deletePost(postId) {
    return async (dispatch, getState) => {

        try {
            const { data } = await request.delete(`/api/posts/${postId}`, {
                headers: {
                    Authorization: 'Bearer ' + getState().auth.user.token,
                }
            })
            dispatch(postActions.deletePost(data.postId))
            toast.success(data.message)
        } catch (error) {
            toast.error(error.response.data.message)
        }
    }
}
