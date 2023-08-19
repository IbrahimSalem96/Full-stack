import React, { createContext, useContext, useEffect, useState } from 'react';
import axios from 'axios';


const TodoContext = createContext();
export const TodoProvider = ({ children }) => {
    const [data, setDate] = useState([])


    //Call and display data information
    const fetchData = async () => {
        try {

            const response = await axios.get(`http://localhost:8000/api/task`)
            setDate(response.data)

        } catch (error) {
            console.log("Erorr Fetch Data " + error)
        }
    }

    useEffect(() => {
        fetchData()
    }, [])

    return (
        <TodoContext.Provider value={{ data, setDate, fetchData }}>
            {children}
        </TodoContext.Provider>
    );
};

export const useTodoContext = () => {
    return useContext(TodoContext);
};
