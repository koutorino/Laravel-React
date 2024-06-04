import React from "react";
import ReactDOM from "react-dom/client";
import Home from "./components/pages/Home";

if (document.getElementById("app")) {
  const Index = ReactDOM.createRoot(document.getElementById("app")!);

  Index.render(
    <React.StrictMode>
      <Home />
    </React.StrictMode>
  );
}
