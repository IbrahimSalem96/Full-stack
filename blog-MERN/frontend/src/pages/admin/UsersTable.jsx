import "./admin-table.css";
import AdminSidebar from "./AdminSidebar";
import { Link } from "react-router-dom";
import swal from "sweetalert";
import { useDispatch, useSelector } from 'react-redux'
import { useEffect } from "react";
import { getAllUsers, deleteProfile } from '../../apiCalls/profileApiCalls'
const UsersTable = () => {
  const dispatch = useDispatch()
  const { profiles, isProfileDeleted } = useSelector(state => state.profile)

  useEffect(() => {
    dispatch(getAllUsers())
  }, [isProfileDeleted])

  // Delete User Handler
  const deleteUserHandler = (userId) => {
    swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this user!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((isOk) => {
      if (isOk) {
        dispatch(deleteProfile(userId))
      }
    });
  };

  return (
    <div className="table-container">
      <AdminSidebar />
      <div className="table-wrapper">
        <h1 className="table-title">Users</h1>
        <table className="table">
          <thead>
            <tr>
              <th>Count</th>
              <th>User</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            {profiles.map((user, index) => (
              <tr key={user._id}>
                <td>{index + 1}</td>
                <td>
                  <div className="table-image">
                    <img
                      src={user.profilePhoto.url}
                      alt=""
                      className="table-user-image"
                    />
                    <span className="table-username">{user.username}</span>
                  </div>
                </td>
                <td>
                  <b className="user-email">{user.email}</b>
                </td>
                <td>
                  <div className="table-button-group">
                    <button>
                      <Link to={`/profile/${user._id}`}>View Profile</Link>
                    </button>
                    <button onClick={() => deleteUserHandler(user._id)}>Delete User</button>
                  </div>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
};

export default UsersTable;
