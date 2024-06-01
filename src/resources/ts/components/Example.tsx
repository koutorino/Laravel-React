import React from 'react';
import ReactDOM from 'react-dom/client';

function Example() {
    return (
        <>
        <h1>あぷりけーしょん！</h1>
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
