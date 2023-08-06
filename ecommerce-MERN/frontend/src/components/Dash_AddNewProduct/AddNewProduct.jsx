import React from "react";
import NavbarMinimal from "../NavbarMinimal/NavbarMinimal.jsx";
import { Collapse } from "@mantine/core";
// import Orders from "./orders/Orders.jsx";

const AddNewProduct = () => {
  return (
    <div
      style={{
        display: "flex",
        alignItems: "center",
        justifyContent: "flex-start",
        flexGrow: "1",
        borderCollapse: Collapse,
        borderSpacing: 0,
        width: "fitContent",
      }}
    >
      <div style={{ direction: "ltr" }}>
        <NavbarMinimal />
      </div>
      {/* <Orders /> */}
    </div>
  );
};

export default AddNewProduct;
