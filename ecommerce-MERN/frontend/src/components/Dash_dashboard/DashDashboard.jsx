import React from "react";
import Dashboard from "./dashboard/Dashboard.jsx";
import NavbarMinimal from "../NavbarMinimal/NavbarMinimal.jsx";
import { Collapse } from "@mantine/core";
const DashDashboard = () => {
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
      <Dashboard />
    </div>
  );
};

export default DashDashboard;
