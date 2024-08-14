import React from 'react';
import ReactDOM from 'react-dom';
import ReactTest from './components/ReactTest';

function APP() {
    return (
        <div>
            <ReactTest />
        </div>
    );
}

// 渲染 App 組件到 #main-container
ReactDOM.render(<APP />, document.getElementById('main-container'));