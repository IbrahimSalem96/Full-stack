import { useTodoContext } from '../../context/Data';
import { toast } from 'react-toastify'
import axios from 'axios';
import './column.css';
import AddColumn from '../AddColumn/AddColumn';

export default function Column({ setSubtask, sortDirection, setColumnId, setModalColumn, setModalDelete, setSubtaskIndex }) {
    const { data, fetchData } = useTodoContext();

    const handleModalOpen = (index, indexSubtask) => {
        setSubtask(true);
        setSubtaskIndex({
            index: index,
            subtaskIndex: indexSubtask
        });
    };


    const handleDeleteColumn = async (columnId) => {
        setModalDelete(true)
        setColumnId(columnId)
    }



    return (
        <>
            <div className='column'>
                {/* Get All Column */}
                {data.map((item, index) => (
                    <div className='col' key={index}>
                        <div className='title'>
                            <i className="fa-solid fa-circle" style={{ color: `${item.color}` }} ></i>
                            <p className='column-trash'>{item.title} ({item.list.length})
                                <i className="fa-regular fa-trash-can" onClick={() => handleDeleteColumn(item._id)}></i></p>
                        </div>

                        {/* sort Data */}
                        {sortDirection ? (
                            item.list
                                .map((arr, indexSubtask) => (
                                    <div className='content' key={indexSubtask} onClick={() => handleModalOpen(index, indexSubtask)}>
                                        <p className='card'>{arr.title}</p>
                                        <div className='Subtask'>
                                            <p>{arr.success.length} of {arr.task.length}</p>
                                        </div>
                                    </div>
                                ))
                        ) : (
                            item.list
                                .slice()
                                .sort((a, b) => b - a)
                                .reverse()
                                .map((arr, indexSubtask) => (
                                    <div className='content' key={indexSubtask} onClick={() => handleModalOpen(index, indexSubtask)}>
                                        <p className='card'>{arr.title}</p>
                                        <div className='Subtask'>
                                            <p>{arr.success.length} of {arr.task.length}</p>
                                        </div>
                                    </div>
                                ))
                        )}

                    </div>
                ))}
                <AddColumn setModalColumn={setModalColumn} />
            </div>
        </>
    );
}
