import axios from 'axios';
import React, { useEffect, useState } from 'react';
import ReactDOM from 'react-dom/client';

function Example() {

    const [state, setState] = useState()

    useEffect(() => {
        axios.get('/api/posts').then((res) => {
            console.log(res)
        })
    }, [])
    return (
        <>
        <h1 className='text-9xl'>あぷりけーしょん！11111</h1>
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
