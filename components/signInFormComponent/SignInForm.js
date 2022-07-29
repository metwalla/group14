import React, {useState} from "react";
import "./SignInForm.css";

function SignInForm() {
    //states for whether credentials were accepted and err alerts
    const [isAccepted, setIsAccepted] = useState(false); 
    const [errorAlert, setErrorAlert] = useState({});

    //text to be displayed for error alerts
    const errorText = {
        email: "invalid email address",
        password: "invalid password"
    };

    //generates code for displaying the correct error alert
    //will display an error if a field matches the current errorAlert obj state
    const createErrorAlert = (field) =>
        field === errorAlert.field && (
            <div className="error">{errorAlert.message}</div>
        );

    
    //TODO: this is just a placeholder
    //actual info needs to come from database
    const userCredentials = [
        {email: "fakeemail@gmail.com", password: "1234abcd"},
        {email: "example@yahoo.ca", password: "passcode"},
    ];

    const handleSubmit = (event) => {
        //stops instant clearing off error messages
        event.preventDefault();

        //grab user submitted info
        let {email, password} = document.forms[0];

        //search through database information for entry with this email
        const userData = userCredentials.find((user) => user.email === email.value);

        //authenticate
        if(userData) {      //if account associated with this email exists
            //check password
            if(userData.password !== password.value) {
                //set password error alert
                setErrorAlert({field: "password", message: errorText.password});
            } else {
                //credentials accepted
                setIsAccepted(true);
            }
        } else {            //no account associated with this email found
            setErrorAlert({field: "email", message: errorText.email})
        }
    }           
    
    //the actual form to be displayed
    const createForm = (
        <div className="form">
            <form onSubmit={handleSubmit}>
                <div className="input-container">
                    <label>Email</label>
                    <input type="text" name="email" required/>
                    {createErrorAlert("email")}
                </div>
                <div className="input-container">
                    <label>Password</label>
                    <input type="password" name="password" required/>
                    {createErrorAlert("password")}
                </div>
                <div className="submit-button-container">
                    <input type="submit" />
                </div>
            </form>
        </div>
    );
    
    //main comonent structure
    return (
        <div className="signin-form">
            <div className="form-body">
                <div className="title">Sign In</div>
                {//if submission isn't hasn't been accepted display form
                isAccepted ? <div>Sign in successful</div> : createForm}
            </div>
        </div>
    )
}

export default SignInForm;