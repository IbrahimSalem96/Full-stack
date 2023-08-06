import ProductsList from "../ProductsList/ProductsList";
import useFetch from "../useFetch/useFetch";
import "./homeAdd.css"
const HomeProducts = () => {
    const { data: products, isPending, error } = useFetch('http://localhost:8000/products')

    return (
        <div className="home">
            {error && <div>{error}</div>}
            {isPending && <div>Loading...</div>}
            {products && <ProductsList products={products} name="All products!" />}
        </div>);
}

export default HomeProducts;