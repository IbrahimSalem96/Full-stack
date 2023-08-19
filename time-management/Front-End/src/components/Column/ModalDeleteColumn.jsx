import axios from 'axios';
import { toast } from 'react-toastify';
import './modalDelete.css'

export default function ModalDeleteColumn({ setModalDelete, columnId, fetchData }) {

    const handleModalDeleteClose = () => {
        setModalDelete(false)
    }


    const deleteColumn = async (id) => {
        try {
            const response = await axios.delete(`http://localhost:8000/api/task/${id}`);
            fetchData();
            setModalDelete(false)
            toast.success('Deleted successfully');

        } catch (error) {
            console.log(error)
            toast.error('Something went wrong');

        }
    }

    const deleteCancal = () => {
        setModalDelete(false)
    }

    return (
        <div className='form-deletetask'>
            <div className='Modal'>
                <div className='titl-close'>
                    <p className='title'>Delete Column</p>
                    <i className="fa-solid fa-xmark" onClick={handleModalDeleteClose}></i>
                </div>

                <div className='description'>
                    <p>Are you sure you want to delete this column? <br></br> After confirmation, you cannot transcribe</p>
                </div>

                <div className='control-from'>
                    <button className='btn-cancal' onClick={() => deleteCancal(columnId)}>cancal</button>

                    <button className='btn-delete' onClick={() => deleteColumn(columnId)}>Delete </button>
                </div>

            </div>
        </div>
    );
}
