import { useState } from 'react';
import { Link } from "react-router-dom";
import './sidebar.css';

export default function Sidebar({ setHidden }) {
    const [activeIndex, setActiveIndex] = useState(1);
    const [mood, setMood] = useState(false);

    // Change the status to the day and evening mode
    const toggleMood = () => {
        setMood(!mood);
    };

    //Active class
    const handleItemClick = (index) => {
        setActiveIndex(index);
    };

    //hidden Sidebar
    const handleHiddenSidebar = () => {
        setHidden(true)
    }

    return (
        <>
            <section className="aside">
                <nav>
                    <ul>
                        <li className='title'>ALL BOARDS ( 8 )</li>

                        <Link to='/' className='link-active'>
                            <li className={activeIndex === 1 ? 'active_list' : ''} onClick={() => handleItemClick(1)}>
                                <i className="fa-solid fa-table" /> <a href="#">Platform Launch</a>
                            </li>
                        </Link>

                        <Link to='/Marketing-Plan' className='link-active'>
                            <li className={activeIndex === 2 ? 'active_list' : ''} onClick={() => handleItemClick(2)}>
                                <i className="fa-solid fa-table" /> <a href="#">Marketing Plan</a>
                            </li>
                        </Link>

                        <li className={activeIndex === 3 ? 'active_list' : ''} onClick={() => handleItemClick(3)}><i className="fa-solid fa-table" /> <a href="#">Roadmap</a></li>
                        <li className={activeIndex === 4 ? 'active_list' : ''} onClick={() => handleItemClick(4)}><i className="fa-solid fa-table last" /> <a href="#" className='last'>+ Create New Board</a> </li>
                    </ul>
                </nav>
                <div className='bottom'>
                    <div className='circle'>
                        <div className='flex_mood'>
                            <span><i className="fa-solid fa-sun"></i></span>
                            {mood ? (
                                <div className='mood-right' onClick={toggleMood}></div>
                            ) : (
                                <div className='mood' onClick={toggleMood}></div>
                            )}

                            <span><i className="fa-solid fa-moon"></i></span>
                        </div>
                        <div className='show' onClick={() => handleHiddenSidebar()}>
                            <i className="fa-solid fa-eye-slash"></i><span> Hide Sidebar</span>
                        </div>
                    </div>
                </div>
            </section>
        </>
    )
}

