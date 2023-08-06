import { useParams, useNavigate } from "react-router-dom";
import useFetch from "../useFetch/useFetch";
import "./productDetails.css"
const ProductDetails = (props) => {
    const { id } = useParams()
    const { data: product, isPending, error } = useFetch(`http://localhost:8000/products/${id}`)
    const navigate = useNavigate()
    const handleDelete = () => {
        fetch('http://localhost:8000/products/' + product.id, {
            method: 'DELETE'
        }).then(() => {
            navigate("/")
        })
    }

    return (
        <div className="product-details">
            {isPending && <div>Loading...</div>}
            {error && <div>{error}</div>}
            {product && (
                <article>
                    <img src="https://housing.com/news/wp-content/uploads/2022/11/living-room-furniture-design-compressed-1.jpg" alt="" />
                    <div>
                        <h2>{product.name}</h2>
                        <p>{product.price}</p>
                        <div className="product-desc">{product.body}</div>
                        <button onClick={handleDelete}>Delete</button>
                    </div>
                </article>
            )}
        </div>
    )
};

export default ProductDetails;
