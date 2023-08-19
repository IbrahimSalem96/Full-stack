import { useEffect, useState } from 'react';
import './subtask.css'
import { useTodoContext } from '../../context/Data';
import axios from 'axios';
import { toast } from 'react-toastify'

export default function Subtask({ setSubtask, subtaskIndex }) {
    const { data, fetchData } = useTodoContext();
    const [changeColumn, setChangeColumn] = useState('')

    // You fetch the matrix according to its index and create a matrix with a false state,
    // and any free task inside it is selected and its status is added as completed
    const [checkedStates, setCheckedStates] = useState(
        Array(data[subtaskIndex.index].list[subtaskIndex.subtaskIndex].task.length).fill(false)

    );

    //Close Modal Subtask
    const handleModalClose = () => {
        setSubtask(false)

    }

    //Update the new change data according to the information selected by index
    const fetchUpdateSubtask = async (index) => {
        try {
            const response = await axios.put(`http://localhost:8000/api/task/success/${subtaskIndex.subtaskIndex}/${index}/${data[subtaskIndex.index]._id}`)
            fetchData()

            toast.success('Task Completed', {
                position: "top-right",
                autoClose: 5000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined,
                theme: "colored",
            });

        } catch (error) {
            toast.error('Something went wrong', {
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

    //To activate the API on click and perform the function as required
    const handaleSubTask = (index) => {
        fetchUpdateSubtask(index)
    }

    const changeToAnotherColumn = async () => {

        try {
            const response = await axios.put(`http://localhost:8000/api/task/${subtaskIndex.subtaskIndex}/${data[subtaskIndex.index]._id}`, {
                column: changeColumn
            })
            fetchData()

            toast.success('The task has been transferred', {
                position: "top-right",
                autoClose: 5000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined,
                theme: "colored",
            });
            setSubtask(false)

        } catch (error) {
            toast.error('Something went wrong', {
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

    const handalechangeToAnotherColumn = (index) => {
        changeToAnotherColumn(index)
    }

    return (
        <>
            <div className='show-subtask'>
                <div className='Modal'>
                    <div className='title-close'>
                        <p className='title'>
                            {data[subtaskIndex.index].list[subtaskIndex.subtaskIndex].title}
                        </p>
                        <i className="fa-solid fa-xmark" onClick={() => handleModalClose()}></i>
                    </div>

                    <div className='proposition'>
                        <p>
                            We know what we're planning to build foe version one. Now we need to handLe the first
                            pnc ing model we-II use. Keep iter ating the suot.yake, until we have a coherent proposition
                        </p>
                    </div>
                    <div className='subtask'>
                        <p>Subtasks ({data[subtaskIndex.index].list[subtaskIndex.subtaskIndex].success.length} of {data[subtaskIndex.index].list[subtaskIndex.subtaskIndex].task.length})</p>
                        <div className='center-subtask' >

                            {data[subtaskIndex.index].list[subtaskIndex.subtaskIndex].success.map((item, index) => (
                                <div className='inline' key={index}>
                                    <input type='checkbox'
                                        checked
                                    />
                                    <p>{item.title}</p>
                                </div>
                            ))}

                            {data[subtaskIndex.index].list[subtaskIndex.subtaskIndex].task.map((item, index) => (
                                <div className='inline' key={index}>
                                    <input
                                        type='checkbox'
                                        checked={checkedStates[index]}
                                        onChange={() => handaleSubTask(index)} // Pass the index to the handler
                                    />
                                    <p>{item.title}</p>
                                </div>
                            ))}

                        </div>
                    </div>

                    <div className='control-from'>
                        <label htmlFor="status">Status <span>( Do you want to transfer it to another column? )</span></label>
                        <select id="status" onChange={(e) => setChangeColumn(e.target.value)} >
                            <option value="">Please select a status</option>
                            {data.map((item, index) => (
                                <option key={index} value={item.title}>{item.title}</option>
                            ))}

                        </select>
                    </div>

                    <div className='change-column'>
                        <button onClick={() => handalechangeToAnotherColumn()} >Move to another column</button>
                    </div>
                </div>
            </div>
        </>
    )
}

