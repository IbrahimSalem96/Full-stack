import { Routes, Route, useLocation } from "react-router-dom";
import LeftBar from "../../components/LeftBar/LeftBar";
import Home from "../../components/AddProductsHome/HomeAdd";
import Create from "../../components/Create/Create";
import ProductDetails from "../../components/ProductDetails/ProductDetails";
import NotFound from "../../components/NotFound/NotFound";
import NavbarMinimal from '../../components/NavbarMinimal/NavbarMinimal'

const AddProduct = () => {
	let loaction = useLocation()

	return (
		<div
			style={{
				display: "flex",
				alignItems: "center",
				justifyContent: "flex-start",
			}}
		>
			<div style={{ direction: "ltr" }}>
				<NavbarMinimal />
			</div>
			<div className="Add-product">
				<div>
					<LeftBar />
				</div>
				<div className="content">
					{/* {location.pathname === '/create' && <Create />} */}
					{/* 
					<Routes>
						<Route path='/' element={<Home />} />
						<Route path="/create" element={<Create />} />
						<Route path="/product/:id" element={<ProductDetails />} />
						<Route path="*" element={<NotFound />} />
					</Routes> */}
				</div>
			</div >
		</div>
	);
};

export default AddProduct;
