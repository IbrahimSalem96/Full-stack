import React, { createContext, useState, useEffect } from 'react';

const UserInfoContext = createContext();

const UserInfoProvider = ({ children }) => {
    const [userInfo, setUserInfo] = useState(() => {
        const storedUserInfo = localStorage.getItem('userInfo');
        return storedUserInfo ? JSON.parse(storedUserInfo) : null;
    });

    useEffect(() => {
        localStorage.setItem('userInfo', JSON.stringify(userInfo));
    }, [userInfo]);

    return (
        <UserInfoContext.Provider value={{ userInfo, setUserInfo }}>
            {children}
        </UserInfoContext.Provider>
    );
};

export { UserInfoContext, UserInfoProvider };
