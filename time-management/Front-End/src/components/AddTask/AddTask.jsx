import React, { useState } from 'react';
import './addTask.css'
import axios from 'axios';
import { toast } from 'react-toastify'
import { useTodoContext } from '../../context/Data';

export default function AddTask({ setModal }) {
    const [title, setTitle] = useState('');
    const [description, setDescription] = useState('');
    const [status, setStatus] = useState('');
    const [subtasks, setSubtasks] = useState([{ title: '' }]);
    const [formErrors, setFormErrors] = useState({ title: false, description: false, subtasks: false, status: false });
    const { data, fetchData } = useTodoContext();


    // Receive the whole number of the matrix and store its value
    const handleNewSubtask = () => {
        const newSubtask = { title: '' };
        setSubtasks([...subtasks, newSubtask]);
    };

    // Refresh the matrix according to the index, in addition to changing the address for each index
    const handleSubtaskTextChange = (index, newText) => {
        const updatedSubtasks = [...subtasks];
        updatedSubtasks[index].title = newText;
        setSubtasks(updatedSubtasks);
    };

    //To delete the inx created from the matrix within the matrix created in the subtask by pressing the x icon
    const handleRemoveSubtask = (index) => {
        const updatedSubtasks = subtasks.filter((_, i) => i !== index);
        setSubtasks(updatedSubtasks);
    };

    const handleModalClose = () => {
        setModal(false)
    }

    const handleSubmit = (e) => {
        e.preventDefault();

        const errors = {};

        if (!title.trim()) {
            errors.title = true;
        }
        if (!description.trim()) {
            errors.description = true;
        }
        if (subtasks.some(subtask => !subtask.title.trim())) {
            errors.subtasks = true;
        }
        if (!status) {
            errors.status = true;
        }

        if (Object.keys(errors).length > 0) {
            setFormErrors(errors);
            return;
        }
        newTask()
        setModal(false)
    }

    //Send data to the database
    const newTask = async () => {
        try {

            const respons = await axios.put('http://localhost:8000/api/task/', {
                title: title,
                column: status,
                task: subtasks,
            })


            toast.success('Added successfully ', {
                position: "top-right",
                autoClose: 5000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined,
                theme: "colored",
            });

            fetchData()


        } catch (error) {

            toast.error('Added successfully ', {
                position: "top-right",
                autoClose: 5000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined,
                theme: "colored",
            });
        }
    }




    return (
        <>
            <div className='form-addTask'>
                <div className='Modal'>
                    <div className='titl-close'>
                        <p className='title'>Task New Add</p>
                        <i className="fa-solid fa-xmark" onClick={() => handleModalClose()}></i>
                    </div>

                    <form onSubmit={handleSubmit}>
                        <div className='control-from'>
                            <label htmlFor="title">Title</label>
                            <input type='text' id="title" onChange={(e) => setTitle(e.target.value)} placeholder='e.g Task coffee break' />
                            {formErrors.title && <p className="error-message">Title is required</p>}
                        </div>

                        <div className='control-from'>
                            <label htmlFor="description">Description</label>
                            <textarea id="description" onChange={(e) => setDescription(e.target.value)} placeholder='e.g Description' />
                            {formErrors.description && <p className="error-message">Description is required</p>}
                        </div>

                        <div className='control-from'>
                            <label htmlFor="subtasks">Subtasks</label>
                            <div style={{ maxHeight: '120px', overflowY: 'scroll', padding: '0 1rem' }}>
                                {subtasks.map((subtask, index) => (
                                    <div key={subtask.id} style={{ display: 'flex', gap: '1rem', marginBottom: '1rem', alignItems: 'baseline' }}>
                                        <input
                                            type='text'
                                            placeholder='e.g Make coffee'
                                            value={subtask.text}
                                            onChange={(e) => handleSubtaskTextChange(index, e.target.value)}
                                        />
                                        <i className="fa-solid fa-xmark" style={{ cursor: 'pointer' }} onClick={() => handleRemoveSubtask(index)}></i>
                                    </div>
                                ))}
                            </div>
                            {formErrors.subtasks && <p className="error-message">All subtasks must be filled</p>}

                            <a className='addSubtask' onClick={() => handleNewSubtask()}>+ Add New Subtask</a>
                        </div>

                        <div className='control-from'>
                            <label htmlFor="status">Status</label>
                            <select id="status" value={status} onChange={(e) => setStatus(e.target.value)}>
                                <option value="">Please select a status</option>
                                {data.map((item, index) => (
                                    <option key={index} value={item.title}>{item.title}</option>
                                ))}

                            </select>
                            {formErrors.status && <p className="error-message">Status is required</p>}
                        </div>


                        <div className='control-from'>
                            <button className='addTask' >Create Task</button>
                        </div>

                    </form>
                </div>
            </div>
        </>
    )
}
