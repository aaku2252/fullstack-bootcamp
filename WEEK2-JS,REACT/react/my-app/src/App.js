import React, { useState } from "react";
import "./App.css";

import Card from "./components/Card";

function App() {
    const [first, setfirst] = useState(56);

    return (
        <div>
            <button
                className="btn btn-info m-4"
                onClick={() => setfirst(first + 1)}>
                Increase
            </button>
            <button
                className="btn btn-info m-4"
                onClick={() => setfirst(first - 1)}>
                Decrease
            </button>
            <Card a={first} />
        </div>
    );
}

export default App;
