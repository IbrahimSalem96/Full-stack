import { Link } from "react-router-dom";
import { useDispatch, useSelector } from 'react-redux'
import { useState } from "react";
import { logout } from '../../apiCalls/authApiCalls'

const HeaderRight = () => {
  const [dropdown, setDropdown] = useState(false)
  const dispatch = useDispatch()
  const { user } = useSelector((stata) => stata.auth)


  // Logout Handler
  const logoutHandler = () => {
    setDropdown(false)
    dispatch(logout())
  }


  return (
    <div className="header-right">
      {user ? (
        <>
          <div className="header-right-user-info">
            <span className="header-right-username" onClick={() => setDropdown((prev) => !prev)} >
              {user?.username}
            </span>
            <img src={user?.profilePhoto.url} alt="image Profile" className="header-right-user-photo" />
            {dropdown && (
              <div className="header-righth-dcopdown">
                <Link to={`/profile/${user?._id}`} className="header-dropdown-item" style={{ color: "black" }}>
                  <i className="bi bi-file-person"></i>
                  <span onClick={() => setDropdown((prev) => !prev)}>Profile</span>
                </Link>
                <div className="header-dropdown-item" onClick={logoutHandler}>
                  <i className="bi bi-box-arrow-in-left"></i>
                  <span>logout</span>
                </div>
              </div>)
            }
          </div>
        </>
      ) : (
        <>
          <Link className="header-right-link" to="/login">
            <i className="bi bi-box-arrow-in-right"></i>
            <span>Login</span>
          </Link>
          <Link className="header-right-link" to="/register">
            <i className="bi bi-person-plus"></i>
            <span>Register</span>
          </Link>
        </>
      )

      }
    </div >
  );
};

export default HeaderRight;
