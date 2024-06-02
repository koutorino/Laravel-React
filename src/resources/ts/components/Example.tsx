import axios from 'axios';
import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';

function Example() {

    return (
        <>

        </>
    );
}

export default Example;

if (document.getElementById('app')) {
    const Index = ReactDOM.createRoot(document.getElementById("app")!);

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
}
