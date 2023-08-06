import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import "./components/Order/Order.css"
import App from "./App";
import { MantineProvider } from "@mantine/core";
import { BrowserRouter } from "react-router-dom";
import { UserInfoProvider } from './context/UserInfoProvider';
import '../node_modules/react-toastify/dist/ReactToastify.css';

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(
  <BrowserRouter>
    <React.StrictMode>
      <UserInfoProvider>
        <MantineProvider withGlobalStyles withNormalizeCSS>
          <App />
        </MantineProvider >
      </UserInfoProvider>
    </React.StrictMode >
  </BrowserRouter>
);
