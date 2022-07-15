import React from 'react'

export default function Product(props) {
    //onAdd is passed all the way from the state in App.js,
    //so that it can pass to basket as well, but be affected by buttons here
    const {product, onAdd} = props;
    return (
        <div>
            <img className='small' src={product.image} alt={product.name}></img>
            <h3>{product.name}</h3>
            <div>${product.price}</div>
            <div>
                <button onClick={() => onAdd(product)}>Add to Cart</button>
            </div>
        </div>
    )
}
