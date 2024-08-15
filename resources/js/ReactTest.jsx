// resources\js\ReactTest.jsx
// resources/js/components/ReactTest.jsx 的入口文件
import React from 'react';
import ReactDOM from 'react-dom';
import ReactTest from './components/ReactTest'; // 確保引用的組件路徑正確

function APP() {
    return (
        <div>
            <ReactTest />
        </div>
    );
}

// 渲染 APP 組件到 #main-container
ReactDOM.render(<APP />, document.getElementById('main-container'));