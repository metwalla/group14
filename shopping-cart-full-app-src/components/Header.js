import React from "react";

export default function Header(props) {
    //this is sent as the cartItems.length in the main app
    const {cartCount} = props;
    return (
        <header className="row block center navbar">
            <div>
                
                <h1>Sample NavBar</h1>
                
            </div>
            <div>                
                Cart {" "}
                {/*render an alert if cart has items. otherwise nothing*/}
                {cartCount? (
                    <button className="badge">{cartCount}</button>
                ) : (
                    
                    ""
                )}
                {" "} 
                {/*This can activate the signin component*/}
                <a href="#/signin">SignIn</a>
            </div>
        </header>
    );
}