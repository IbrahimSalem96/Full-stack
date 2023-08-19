import './addColumn.css'
export default function AddColumn({ setModalColumn }) {

    const handleModuleOpen = () => {
        setModalColumn(true)
    }

    return (
        <>
            <div className='add-column'>
                <button onClick={() => handleModuleOpen()}>+ New Column</button>
            </div>
        </>
    )
}
