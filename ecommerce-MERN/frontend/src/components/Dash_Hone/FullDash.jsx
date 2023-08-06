import React from "react";
import Home from "./Home/Home.jsx";
import NavbarMinimal from "../NavbarMinimal/NavbarMinimal.jsx";
const FullDash = () => {
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
      <Home />
    </div>
  );
};

export default FullDash;
