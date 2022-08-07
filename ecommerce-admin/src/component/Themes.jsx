import React, {useEffect} from 'react';
import { useNavigate } from 'react-router-dom';

const Themes = () => {

    const navigate = useNavigate();

    useEffect(() => {
        if (sessionStorage.getItem("token") === null) {
            navigate('/');
            return;
        }
    }, []);

    const changeTheme = async (theme) => {
        const colourObject = {colour: theme};
        console.log(colourObject);
        const response = await fetch(`https://muslemah.myweb.cs.uwindsor.ca/comp3340/ecommerce_api/public/api/colour`, {
            method: 'PUT',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + sessionStorage.getItem("token")
            },
            body: JSON.stringify(colourObject)
        });
        console.log(await response.json());
    }

    return (
        <div className="p-4">
            <h2>Choose the theme for the DudeMarket Ecommerce Site!</h2>
            <div class="dropdown p-2">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Choose Theme
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" onClick={() => { changeTheme("white"); }}>White Theme</a></li>
                    <li><a class="dropdown-item" onClick={() => { changeTheme("red"); }}>Red Theme</a></li>
                    <li><a class="dropdown-item" onClick={() => { changeTheme("yellow"); }}>Yellow Theme</a></li>
                </ul>
            </div>
            
        </div>
        
    );
}

export default Themes;
