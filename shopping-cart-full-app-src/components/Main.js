import React from "react";
import Product from "./Product";

export default function Main(props) {
    //define const containing product data recieved in props
    const {products, onAdd} = props;
    return (
        <main className="block col-2">
            <h2>Products</h2>
            <div className="window-content">
            <div className="row">
            {/*for each item in products, map to Prduct component and display as JSX*/}
            {products.map((product) => (
                <Product key={product.id} product={product} onAdd={onAdd}></Product>
            ))}
            </div>
            </div>

        </main>
    )
}