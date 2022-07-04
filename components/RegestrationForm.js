import React from 'react'
import reg from './reg.css'
export default function Form(){
    return(
        <section>
            <div className='register'>
                <div className='col-1'>
                   <h2>Sign up</h2>
                   <span>regestration form</span>
                   <form id='form' classname='flex flex-col'>
                    <input type='text' placeholder='Email'/>
                    <input type='text' placeholder='First name'>
                        <input type='text' placeholder='Last name'>
                            <input type='text' placeholder='password'>
                                <input type='text' placeholder='reenter password'>

                                </input>
                            </input>
                        </input>
                    </input>
                   </form>
                   <button className='btn'>Sign up</button>
                </div>
            </div>
        </section>
    )
}