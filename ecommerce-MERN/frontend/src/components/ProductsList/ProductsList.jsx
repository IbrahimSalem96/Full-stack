import { Link } from "react-router-dom"
import "./productList.css"


const ProductsList = (props) => {
    const products = props.products;
    const name = props.name;
    return (
        <div>
            <h2>{name}</h2>
            <div className="product-list">
                {products.map((product) => {
                    return (
                        <div className="product-preview" key={product.id}>
                            <Link to={`/product/${product.id}`}>
                                <img src="https://housing.com/news/wp-content/uploads/2022/11/living-room-furniture-design-compressed-1.jpg" alt="" />
                                <h2>{product.name}</h2>
                                <p>{product.price}</p>
                            </Link>
                        </div>
                    )
                })
                }
            </div>
        </div>
    );
}

export default ProductsList;