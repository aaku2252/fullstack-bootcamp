import React, { useState } from "react";
import "./App.css";

import Card from "./components/Card";
import Movies from "./components/Movies";

function App() {
    const [first, setfirst] = useState(0);

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
            <Movies>
                <h1>This is a heading.</h1>
            </Movies>
        </div>
    );
}

export default App;
