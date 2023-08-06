import { Link } from "react-router-dom";
import "./leftBar.css"
const LeftBar = () => {
    return (
        <nav className="leftbar">
            <h1>Product Management</h1>
            <div className="links">
                <Link to="/setting">Products View</Link>
                <Link to="/create">Add product</Link>
            </div>
        </nav>
    );
}

export default LeftBar;