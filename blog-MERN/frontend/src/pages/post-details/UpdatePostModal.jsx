import "./update-post-modal.css";
import { toast } from "react-toastify";
import { useEffect, useState } from "react";
import { useDispatch, useSelector } from 'react-redux'
import { updatePost } from "../../apiCalls/postApiCall";
import { fetchCategories } from '../../apiCalls/categoryApiCalls'


const UpdatePostModal = ({ setUpdatePost, post }) => {
  const [title, setTitle] = useState(post.title);
  const [description, setDescription] = useState(post.description);
  const [category, setCategory] = useState(post.category);

  const { categories } = useSelector(state => state.category)
  useEffect(() => {
    dispatch(fetchCategories())
  }, [])


  const dispatch = useDispatch()

  // From Submit Handler
  const formSubmitHandler = (e) => {
    e.preventDefault();
    if (title === '') return toast.error('Post title is required')
    if (description === '') return toast.error('Post Description is required')
    if (category === '') return toast.error('Post category is required')

    dispatch(updatePost(post?._id, { title, description, category }))
    toast.success('Modified successfully')
    setUpdatePost(false)
  };

  return (
    <div className="update-post">
      <form onSubmit={formSubmitHandler} className="update-post-form">
        <abbr title="close">
          <i
            onClick={() => setUpdatePost(false)}
            className="bi bi-x-circle-fill update-post-form-close"
          ></i>
        </abbr>
        <h1 className="update-post-title">Update Post</h1>
        <input
          onChange={(e) => setTitle(e.target.value)}
          value={title}
          type="text"
          className="update-post-input"
        />
        <select
          className="update-post-input"
          value={category}
          onChange={(e) => setCategory(e.target.value)}
        >
          <option disabled value="">
            Select A Category
          </option>
          {
            categories.map(category => (
              <option key={category._id} value={category.title}>
                {category.title}
              </option>
            ))
          }
        </select>
        <textarea
          className="update-post-textarea"
          value={description}
          onChange={(e) => setDescription(e.target.value)}
          rows="5"
        ></textarea>
        <button type="submit" className="update-post-btn">
          Update Post
        </button>
      </form>
    </div>
  );
};

export default UpdatePostModal;
