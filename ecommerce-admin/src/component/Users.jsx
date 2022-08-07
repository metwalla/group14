import React, { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';

const Users = () => {

    const [data, setData] = useState({ data: [] });
    const [loading, setLoading] = useState(false);
    const [first_name, setFirst] = useState("");
    const [last_name, setLast] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState("");
    const [success, setSuccess] = useState("");
    const navigate = useNavigate();
    let componentMounted = true;

    useEffect(() => {
        if (sessionStorage.getItem("token") === null) {
            navigate('/');
            return;
        }
        const getUsers = async () => {
            setLoading(true);
            const response = await fetch(`https://muslemah.myweb.cs.uwindsor.ca/comp3340/ecommerce_api/public/api/users`, {
                method: 'GET',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "Authorization": "Bearer " + sessionStorage.getItem("token")
                }
            });
            if (componentMounted) {
                setData(await response.json());
                setLoading(false);
            }
            return () => {
                componentMounted = false;
            }
        }
        getUsers();
    }, []);

    const addUser = async () => {
        if (first_name == "" || last_name == "" || email == "" || password == "") {
            setError("Please fill in all the fields.");
        }
        else {
            let userObject = { first_name, last_name, email, password };
            let response = await fetch("https://muslemah.myweb.cs.uwindsor.ca/comp3340/ecommerce_api/public/api/register", {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                },
                body: JSON.stringify(userObject)
            });
            if (response.status >= 200 && response.status <= 299) {
                setError("");
                setSuccess("New user added successfully.");
            }
            else if (response.status == 422) {
                setError("Email is already taken.");
            }
            else {
                setError("An unexpected error has occured.");
            }
        }
    }

    return (
        <div>
            <div className="table-responsive p-4">
                <table className="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        {data.data.map((user) => {
                            return (
                                <>
                                    <tr>
                                        <td>{user.id}</td>
                                        <td>{user.first_name + " " + user.last_name}</td>
                                        <td>{user.email}</td>
                                    </tr>
                                </>
                            )
                        })}
                    </tbody>
                </table>
            </div>
            <div className="d-flex justify-content-center">
                <button className="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
            </div>
            <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUserModalLabel">Add New User </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control mb-2" placeholder="First name" onChange={(e) => setFirst(e.target.value)} />
                            <input type="email" class="form-control mb-2" placeholder="Last name" onChange={(e) => setLast(e.target.value)} />
                            <input type="email" class="form-control mb-2" placeholder="Email address" onChange={(e) => setEmail(e.target.value)} />
                            <input type="password" class="form-control" placeholder="Password" onChange={(e) => setPassword(e.target.value)} />
                            {error === "" ? null : <div className="error mt-2">{error}</div>}
                            {success === "" ? null : <div className="success mt-2">{success}</div>}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onClick={() => { addUser(); }}>Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Users;
