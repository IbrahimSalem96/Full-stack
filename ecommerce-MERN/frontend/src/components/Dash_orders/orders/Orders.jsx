import React from "react";
import NavbarMinimal from "../../NavbarMinimal/NavbarMinimal.jsx";
import { Link } from "react-router-dom";

function Orders() {
  return (
    <div
      style={{
        margin: "auto",
        textAlign: "center",
      }}
    >
      <h5>
        {/* <Link to={"/addProduct"}>Add New Product</Link> */}
        {/* <button>Add New Product</button> */}
      </h5>
      <table border={"0"}>
        <tr>
          <th style={{ padding: "25px" }}>id</th>
          <th style={{ padding: "25px" }}>Img</th>
          <th style={{ padding: "25px" }}>Product Name</th>
          <th style={{ padding: "25px" }}>Price</th>
          <th style={{ padding: "25px" }}>Name Of Customer</th>
          <th style={{ padding: "25px" }}>Phone Number</th>
          <th style={{ padding: "25px" }}>Oberation</th>
        </tr>
        <tr>
          <td>1</td>
          <td>
            <img
              width="125px"
              src="https://in-media.apjonlinecdn.com/magefan_blog/Laptop.jpg"
            />
          </td>
          <td>Bag</td>
          <td>22,99$</td>
          <td>Ahmad</td>
          <td>0796618504</td>
          <td>
            <button style={{ background: "green" }}> Accept</button>
            <button style={{ background: "red" }}> Cancel</button>
          </td>
        </tr>

        {/* ############# */}

        <tr>
          <td>2</td>
          <td>
            <img
              width="125px"
              src="https://in-media.apjonlinecdn.com/magefan_blog/Laptop.jpg"
            />
          </td>
          <td>Bag</td>
          <td>22,99$</td>
          <td>Ahmad</td>
          <td>0796618504</td>
          <td>
            <button style={{ background: "green" }}> Accept</button>
            <button style={{ background: "red" }}> Cancel</button>
          </td>
        </tr>

        {/* ########## */}
        <tr>
          <td>3</td>
          <td>
            <img
              width="125px"
              src="https://in-media.apjonlinecdn.com/magefan_blog/Laptop.jpg"
            />
          </td>
          <td>Bag</td>
          <td>22,99$</td>
          <td>Ahmad</td>
          <td>0796618504</td>
          <td>
            <button style={{ background: "green" }}> Accept</button>
            <button style={{ background: "red" }}> Cancel</button>
          </td>
        </tr>

        {/* #############3 */}

        <tr>
          <td>4</td>
          <td>
            <img
              width="125px"
              src="https://in-media.apjonlinecdn.com/magefan_blog/Laptop.jpg"
            />
          </td>
          <td>Bag</td>
          <td>22,99$</td>
          <td>Ahmad</td>
          <td>0796618504</td>
          <td>
            <button style={{ background: "green" }}> Accept</button>
            <button style={{ background: "red" }}> Cancel</button>
          </td>
        </tr>
      </table>
    </div>
  );
}

export default Orders;
