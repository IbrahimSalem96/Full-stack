import { useState, useEffect } from 'react';
import './App.css';
import { Header, Sidebar, Column, AddTask, MarketingPlan, Subtask, ModalColumn, ModalDeleteColumn } from './components/index';
import { Routes, Route } from "react-router-dom";
import { ToastContainer } from 'react-toastify'
import { useTodoContext } from './context/Data';

function App() {
  //To change the state of the sidebar from closed to open
  const [hidden, setHidden] = useState(false);

  // To change the order of tasks according to ASC or DESC, they were sent to the
  //component column in addition to the header to change the status as desired
  const [sortDirection, setSortDirection] = useState(true);

  //Moodle to add tasks
  const [modal, setModal] = useState(false);

  //
  const [modalDelete, setModalDelete] = useState(false);
  const [columnId, setColumnId] = useState();

  //To open the modules for modifying the task end, it has been shared with the ( Subtask and Column components )
  const [subtask, setSubtask] = useState(false);

  //To specify the column to be modified in addition to specifying which task we want to modify 
  //setSubtaskIndex is shared with the Column component to get the index
  const [subtaskIndex, setSubtaskIndex] = useState({
    index: '',
    subtaskIndex: ''
  });

  //To open the module for creating a new column that has been shared with the ( Column Component )
  const [modalColumn, setModalColumn] = useState(false)

  //Fetch Data
  const { fetchData } = useTodoContext();

  const toggleHidden = () => {
    setHidden(!hidden);
  };


  return (
    <div className="wrapper">
      <ToastContainer
        position="top-right"
        autoClose={5000}
        hideProgressBar={false}
        newestOnTop={false}
        closeOnClick
        rtl={false}
        pauseOnFocusLoss
        draggable
        pauseOnHover
        theme="colored"
      />



      {modal && (
        <AddTask setModal={setModal} />
      )}

      {subtask && (
        <Subtask setSubtask={setSubtask} subtaskIndex={subtaskIndex} />
      )}

      {modalColumn && (
        <ModalColumn setModalColumn={setModalColumn} fetchData={fetchData} />
      )}

      {modalDelete && (
        <ModalDeleteColumn setModalDelete={setModalDelete} columnId={columnId} fetchData={fetchData} />
      )}




      <div className={hidden ? 'sidebar hidden' : 'sidebar'}>
        <Sidebar setHidden={setHidden} />
      </div>

      {hidden && (
        <div className={`toggle`}>
          <button onClick={toggleHidden}>
            <i class="fa-regular fa-eye"></i> Show Sidebar
          </button>
        </div>
      )}

      <div className='content'>
        <Header setModal={setModal} setSortDirection={setSortDirection} />

        <main className='container'>
          <Routes>
            <Route path="/" element={<Column setSubtask={setSubtask} sortDirection={sortDirection} setColumnId={setColumnId}
              setModalDelete={setModalDelete} setModalColumn={setModalColumn} setSubtaskIndex={setSubtaskIndex} />} />
            <Route path="/Marketing-Plan" element={<MarketingPlan />} />
          </Routes>

        </main>

      </div>
    </div>
  );
}


export default App;
