import React from "react";
import "./reg.css";
export default function Form() {
  return (
    <section>
      <div className="register">
        <div className="col-1">
          <h2>Sign up</h2>
          <span>registration form</span>
          <form id="form" classname="flex flex-col">
            <input type="text" placeholder="Email"></input>
            <input type="text" placeholder="First name"></input>
            <input type="text" placeholder="Last name"></input>
            <input type="text" placeholder="password"></input>
            <input type="text" placeholder="reenter password"></input>
          </form>
          <button className="btn">Sign up</button>
        </div>
      </div>
    </section>
  );
}
