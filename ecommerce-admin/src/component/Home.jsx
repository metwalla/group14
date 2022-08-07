import React, {useState, useEffect} from 'react';
import {useNavigate} from 'react-router-dom';

const Home = () => {

    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState("");
    const navigate = useNavigate();

    useEffect(() => {
        if(sessionStorage.getItem("token") !== null) {
            navigate('/users');
            return () => {}
        }
    }, []);

    async function login() {
        let userObject = {email, password};
        let response = await fetch("https://muslemah.myweb.cs.uwindsor.ca/comp3340/ecommerce_api/public/api/login", {
            method: 'POST',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
            },
            body: JSON.stringify(userObject)
        });
        if(response.status != 201) {
            setError("Invalid credentials.")
        }
        else {
            setError("");
            let userJson = await response.json();
            sessionStorage.setItem("token", userJson.token);
            navigate('/users');
        }
    }

    return (
        <div className="form-container">
            <div class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal">Please login</h1>
                <input type="email" class="form-control mb-2" placeholder="Email address" required="" autoFocus="" onChange={(e)=>setEmail(e.target.value)} />
                <input type="password" class="form-control" placeholder="Password" required=""  onChange={(e)=>setPassword(e.target.value)} />
                {error === "" ? null : <div className="error">{error}</div>}
                <button class="btn btn-lg btn-primary btn-block" onClick={() => {login();}}>Login</button>
            </div>
        </div>
    );
}

export default Home;