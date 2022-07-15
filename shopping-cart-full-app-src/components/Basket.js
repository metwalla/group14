import React from "react";

export default function Basket(props) {
    //received from the cartItems state in main
    const { cartItems, onAdd, onRemove } = props;    
    const priceBeforeFees = cartItems.reduce(
        (accumulator, curr) => accumulator + curr.price * curr.qty, 0); 
    //this can be anything
    const tax = priceBeforeFees * 0.13;
    //made it $25 flat fee unless order is over $1000. Again can change this to anything 
    const shipping = priceBeforeFees > 1000 ? 0 : 25;
    const orderTotal = priceBeforeFees + tax + shipping;   
    return (
    //i set this to flex 1 assuming the main window is flex 2
    //(cart will take up 1/3 of screen). this will have to be changed based on how 
    //the main layout is being created
    <aside className="block col-1">
        
        <h2 className="window-header">Shopping Cart</h2>
        
        <div className="window-content">
        {/*check if cartItems is empty and display if true*/}
        <div>{cartItems.length === 0 && <div>Cart is Empty</div>}</div>
        {/*render each item in cart*/}
        {cartItems.map((item) => (
            <div key={item.id} className="row">
                <div className="col-2">{item.name}</div>
                <div className="col-2">
                    <button onClick={() => onAdd(item)} className="add">
                        +
                    </button>
                    <button onClick={() => onRemove(item)} className="remove">
                        -
                    </button>
                </div>
                <div className="col-2 text-right"> 
                    {item.qty} x ${item.price.toFixed(2)}
                </div>
            </div>            
        ))}
        {/*render order details only if cart has items*/}
        {cartItems.length !== 0 && (
            <>
                <hr></hr>
                <div className="row">
                    <div className="col-2">Subtotal</div>
                    <div className="col-1 text-right">${priceBeforeFees.toFixed(2)}</div>                    
                </div>
                <div className="row">
                    <div className="col-2">Tax</div>
                    <div className="col-1 text-right">${tax.toFixed(2)}</div>                    
                </div>
                <div className="row">
                    <div className="col-2">Shipping</div>
                    <div className="col-1 text-right">${shipping.toFixed(2)}</div>                    
                </div>
                <div className="row">
                    <div className="col-2"><strong>Total Price</strong></div>
                    <div className="col-1 text-right"><strong>${priceBeforeFees.toFixed(2)}</strong></div>                    
                </div>
                <hr></hr>
                <div className="row">
                    <button onClick={() => alert("not implemnted yet")}>CheckOut</button>
                </div>
                
            </>
        )}
        </div>
    </aside>
    );
}