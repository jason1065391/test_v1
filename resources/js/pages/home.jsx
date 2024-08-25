import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

// 搜尋欄組件
function SearchBar() {
    return (
        <div className="search-bar-container">
            <input type="text" className="search-input" placeholder="搜索老師或學生案件..." />
            <div className="filter-options">
                <select className="filter-dropdown">
                    <option value="">地區</option>
                    <option value="台北">台北</option>
                    <option value="台中">台中</option>
                    {/* 其他地區選項 */}
                </select>
                <select className="filter-dropdown">
                    <option value="">科目</option>
                    <option value="數學">數學</option>
                    <option value="英語">英語</option>
                    {/* 其他科目選項 */}
                </select>
                <input type="text" className="price-range" placeholder="價格範圍" />
            </div>
            <button className="search-button">搜尋</button>
        </div>
    );
}

// 熱門老師和最新學生案件卡片組件
function Card({ image, title, text, onFavorite }) {
    return (
        <div className="card">
            <img src={image} alt={title} />
            <div className="card-body">
                <h3 className="card-title">{title}</h3>
                <p className="card-text">{text}</p>
                <button className="favorite-btn" onClick={onFavorite}>
                    收藏
                </button>
            </div>
        </div>
    );
}

// 主頁組件
function HomeContent() {
    const [teachers, setTeachers] = useState([]);
    const [studentCases, setStudentCases] = useState([]);
    const [slideIndex, setSlideIndex] = useState(1);

    useEffect(() => {
        axios.get('/api/hot-teachers').then(response => {
            setTeachers(response.data);
        });

        axios.get('/api/latest-student-cases').then(response => {
            setStudentCases(response.data);
        });

        const interval = setInterval(() => {
            plusSlides(1);
        }, 3000); // 每3秒切換一次幻燈片

        return () => clearInterval(interval); // 清除間隔定時器
    }, []);

    const plusSlides = (n) => {
        setSlideIndex(prevIndex => {
            let newIndex = prevIndex + n;
            if (newIndex > 3) newIndex = 1;
            if (newIndex < 1) newIndex = 3;
            return newIndex;
        });
    };

    const currentSlide = (n) => {
        setSlideIndex(n);
    };

    const handleFavorite = (id) => {
        console.log(`Toggle favorite for item with ID: ${id}`);
        // 在這裡實現添加或移除收藏的邏輯
    };

    useEffect(() => {
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("dot");

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (let i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }, [slideIndex]);

    return (
        <div className="main-content">
            <div className="slideshow-container">
                <div className="mySlides fade">
                    <img src="/test_v1/public/images/hiking_01.jpg" style={{ width: '100%' }} />   
                </div>
                <div className="mySlides fade">
                    <img src="/test_v1/public/images/hiking_02.jpg" style={{ width: '100%' }} />
                </div>
                <div className="mySlides fade">
                    <img src="/test_v1/public/images/hiking_03.jpg" style={{ width: '100%' }} />
                </div>
                <a className="prev" onClick={() => plusSlides(-1)}>&#10094;</a>
                <a className="next" onClick={() => plusSlides(1)}>&#10095;</a>
            </div>
            <div style={{ textAlign: 'center' }}>
                <span className="dot" onClick={() => currentSlide(1)}></span>
                <span className="dot" onClick={() => currentSlide(2)}></span>
                <span className="dot" onClick={() => currentSlide(3)}></span>
            </div>

            <SearchBar />

            <div className="hot-teachers">
                <h2>熱門老師</h2>
                <div className="card-container">
                    {teachers.map(teacher => (
                        <Card
                            key={teacher.id}
                            image={`/images/${teacher.image}`}
                            title={teacher.name}
                            text={`科目: ${teacher.subject}, 評價: ${teacher.rating}`}
                            onFavorite={() => handleFavorite(teacher.id)}
                        />
                    ))}
                </div>
            </div>

            <div className="latest-student-cases">
                <h2>最新學生案件</h2>
                <div className="card-container">
                    {studentCases.map(studentCase => (
                        <Card
                            key={studentCase.id}
                            image={`/images/${studentCase.image}`}
                            title={studentCase.name}
                            text={`科目: ${studentCase.subject}, 需求: ${studentCase.requirement}`}
                            onFavorite={() => handleFavorite(studentCase.id)}
                        />
                    ))}
                </div>
            </div>
        </div>
    );
}

// ReactDOM 渲染到頁面
ReactDOM.render(<HomeContent />, document.getElementById('home'));
