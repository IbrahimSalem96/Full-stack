import "./category.css";
import { useEffect } from "react";
import { useParams } from "react-router-dom";
import PostList from "../../components/posts/PostList";
import { useDispatch, useSelector } from 'react-redux'
import { fetchPostsBasedOnCategory } from "../../apiCalls/postApiCall";


const Category = () => {
  const dispatch = useDispatch()
  const { postsCate } = useSelector(state => state.post)
  const { category } = useParams();



  useEffect(() => {
    dispatch(fetchPostsBasedOnCategory(category))
    window.scrollTo(0, 0);
  }, [category]);



  return (
    <div className="category">
      <h1 className="category-title">Posts based on {category}</h1>
      <PostList posts={postsCate} />
    </div>);
}

export default Category; 