import React, { useState, useEffect } from 'react';
import $ from 'jquery';
import '../../css/pages/memberCenter.css'; // 根據實際文件結構調整路徑

const MemberCenter = () => {
    const [activeSection, setActiveSection] = useState('basic-info');

    useEffect(() => {
        // 確保在 DOM 更新後才進行操作
        $('html, body').animate({
            scrollTop: $(`#${activeSection}`).offset().top
        }, 500);
    }, [activeSection]);

    const handleSectionChange = (section) => {
        setActiveSection(section);
    };

    return (
        <div className="member_center">
            <div className="sidebar">
                <ul>
                    <li><a href="#" onClick={(e) => { e.preventDefault(); handleSectionChange('basic-info'); }}>基本資料</a></li>
                    <li><a href="#" onClick={(e) => { e.preventDefault(); handleSectionChange('schedule'); }}>課表</a></li>
                    <li><a href="#" onClick={(e) => { e.preventDefault(); handleSectionChange('students'); }}>學生</a></li>
                    <li><a href="#" onClick={(e) => { e.preventDefault(); handleSectionChange('teachers'); }}>老師</a></li>
                    <li><a href="#" onClick={(e) => { e.preventDefault(); handleSectionChange('parents'); }}>家長</a></li>
                </ul>
            </div>
            <div className="content">
                <div id="basic-info" className={`content-section ${activeSection === 'basic-info' ? 'active' : ''}`}>
                    <h2>基本資料</h2>
                    <form>
                        <div>
                            <label>姓名</label>
                            <input type="text" name="name" />
                        </div>
                        <div>
                            <label>帳號</label>
                            <input type="text" name="username" />
                        </div>
                        <div>
                            <label>密碼</label>
                            <input type="password" name="password" />
                        </div>
                        <div>
                            <label>性別</label>
                            <select name="gender">
                                <option value="">選擇性別</option>
                                <option value="male">男</option>
                                <option value="female">女</option>
                            </select>
                        </div>
                        <div>
                            <label>手機號碼</label>
                            <input type="text" name="phone" />
                        </div>
                        <div>
                            <label>生日</label>
                            <input type="date" name="birthday" />
                        </div>
                        <div>
                            <label>身分證號碼</label>
                            <input type="text" name="idNumber" />
                        </div>
                        <button type="submit">提交</button>
                    </form>
                </div>
                <div id="schedule" className={`content-section ${activeSection === 'schedule' ? 'active' : ''}`}>課表內容</div>
                <div id="students" className={`content-section ${activeSection === 'students' ? 'active' : ''}`}>學生內容</div>
                <div id="teachers" className={`content-section ${activeSection === 'teachers' ? 'active' : ''}`}>老師內容</div>
                <div id="parents" className={`content-section ${activeSection === 'parents' ? 'active' : ''}`}>家長內容</div>
            </div>
        </div>
    );
};

export default MemberCenter;
