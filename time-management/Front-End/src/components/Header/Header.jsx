import { useState } from 'react'
import './header.css'

export default function Header({ setModal, setSortDirection }) {
    const [showSort, setShowSort] = useState(false)

    const handleModalOpen = () => {
        setModal(true)
    }

    const handleShowSort = () => {
        setShowSort(!showSort)
    }

    const handleSort = (sort) => {
        if (sort === 'asc') {
            setSortDirection(true)
        } else {
            setSortDirection(false)
        }
        setShowSort(!showSort)
    }




    return (
        <>
            <header>
                <section className='w-section-header'>
                    <div className="title">
                        <h1>Platform Launch</h1>
                    </div>

                    <div className="btn">
                        <button onClick={handleModalOpen}>+ Add New Task</button>
                        <div className='menu'>
                            <i className="fa-solid fa-ellipsis-vertical" onClick={handleShowSort}></i>
                            <ul className={`sort ${showSort ? 'show' : 'hidden'}`}>
                                <li onClick={() => handleSort('asc')} value='asc'>Sort By ASC</li>
                                <li onClick={() => handleSort('dsc')} value='dsc'>Sort By DSC</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </header >
        </>
    )
}
