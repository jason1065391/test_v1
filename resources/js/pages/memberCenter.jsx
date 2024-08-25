// resources/js/pages/memberCenter.jsx

import React from 'react';
import ReactDOM from 'react-dom';
import '../../css/pages/memberCenter.css'; // 引入 CSS 文件以應用樣式

const MemberCenter = () => {
    // 設定 state 以管理當前顯示的內容區域
    const [activeSection, setActiveSection] = React.useState('basic-info');

    // 處理內容區域的切換
    const handleSectionChange = (section) => {
        setActiveSection(section);
    };

    return (
        <div className="content">
            {/* 基本資料區域 */}
            <div id="basic-info" className={`content-section ${activeSection === 'basic-info' ? 'active' : ''}`}>
                <h2>基本資料</h2>
                <form>
                    <div>
                        <label>姓名：</label>
                        <input type="text" name="name" />
                    </div>
                    <div>
                        <label>帳號：</label>
                        <input type="text" name="username" />
                    </div>
                    <div>
                        <label>密碼：</label>
                        <input type="password" name="password" />
                    </div>
                    <div>
                        <label>性別：</label>
                        <select name="gender">
                            <option value="">選擇性別</option>
                            <option value="male">男</option>
                            <option value="female">女</option>
                        </select>
                    </div>
                    <div>
                        <label>手機號碼：</label>
                        <input type="text" name="phone" />
                    </div>
                    <div>
                        <label>生日：</label>
                        <input type="date" name="birthday" />
                    </div>
                    <div>
                        <label>身分證號碼：</label>
                        <input type="text" name="idNumber" />
                    </div>
                    <button type="submit">提交</button>
                </form>
            </div>
            
            {/* 課表區域 */}
            <div id="schedule" className={`content-section ${activeSection === 'schedule' ? 'active' : ''}`}>
                課表內容
            </div>
            
            {/* 學生區域 */}
            <div id="students" className={`content-section ${activeSection === 'students' ? 'active' : ''}`}>
                學生內容
            </div>
            
            {/* 老師區域 */}
            <div id="teachers" className={`content-section ${activeSection === 'teachers' ? 'active' : ''}`}>
                老師內容
            </div>
            
            {/* 家長區域 */}
            <div id="parents" className={`content-section ${activeSection === 'parents' ? 'active' : ''}`}>
                家長內容
            </div>
        </div>
    );
};

// 確保 MemberCenter 元件在指定的 DOM 元素中渲染
ReactDOM.render(
    <MemberCenter />,
    document.getElementById('memberCenterContent') // 在這裡渲染 MemberCenter 元件
);
