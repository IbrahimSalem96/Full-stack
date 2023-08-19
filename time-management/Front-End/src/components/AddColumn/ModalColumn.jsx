import React, { useState } from 'react';
import axios from 'axios';
import { toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css'; // Import the styles for react-toastify

export default function ModalColumn({ setModalColumn, fetchData }) {
    const [title, setTitle] = useState('');
    const [color, setColor] = useState('');

    const handleSubmit = (e) => {
        e.preventDefault();

        // Check if all fields are filled
        if (!title || !color) {
            toast.error('Please fill in all fields'); // Display an error toast
            return;
        }

        fetchCreateColumn();
        setModalColumn(false);
    };

    const handleModalClose = () => {
        setModalColumn(false);
    };

    // Create a Doc inside the data containing column information
    const fetchCreateColumn = async () => {
        try {
            const response = await axios.post(`http://localhost:8000/api/task`, { title, color });
            fetchData();

            toast.success('Task Completed');
        } catch (error) {
            toast.error('Something went wrong');
        }
    };

    return (
        <div className='form-addTask'>
            <div className='Modal'>
                <div className='titl-close'>
                    <p className='title'>Add column</p>
                    <i className="fa-solid fa-xmark" onClick={handleModalClose}></i>
                </div>

                <form onSubmit={handleSubmit}>
                    <div className='control-from'>
                        <label htmlFor="title">Title</label>
                        <input type='text' onChange={(e) => setTitle(e.target.value)} id="title" placeholder='e.g Task coffee break' />
                    </div>

                    <div className='control-from'>
                        <label htmlFor="color">Color</label>
                        <input type='color' onChange={(e) => setColor(e.target.value)} id="color" />
                    </div>

                    <div className='control-from'>
                        <button className='addTask'>Create Column</button>
                    </div>
                </form>
            </div>
        </div>
    );
}
