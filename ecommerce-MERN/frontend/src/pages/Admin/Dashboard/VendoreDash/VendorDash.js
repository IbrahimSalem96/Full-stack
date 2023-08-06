import { BrowserRouter as Router, Route, Routes } from "react-router-dom";

import FullDash from "../../../../components/Dash_Hone/FullDash.jsx";
import DashDashboard from "../../../../components/Dash_dashboard/DashDashboard.jsx";

import DashOrderes from "../../../../components/Dash_orders/DashOrders.jsx";
export default function VendorDash() {
  return (
    <>

      <FullDash />


      {/*  
        <Route path="/home_dashbord" element={<FullDash />} />
        <Route path="/Products_dashbord" element={<DashDashboard />} />
        <Route path="/orders_dashbord" element={<DashOrderes />} />
  */}

    </>
  );
}

