import Header from './components/Header';
import Main from './components/Main';
import Basket from './components/Basket';
import data from './components/data';
import { useState } from 'react';

function App() {
  //i just made some placeholder products. this should be coming from server
  const {products} = data;
  //cartItems as a state
  const [cartItems, setCartItems] = useState([]);

  //function for adding to cart. this will be used by main view product add 
  //and the increase quantity in the cart itself
  const onAdd = (product) => {
    //checks if product is already in cart
    const inCart = cartItems.find(x => x.id === product.id);
    if(inCart) {
      //++ quantity value of item in cart, leave other items as is 
      setCartItems(
        cartItems.map((x) =>
         x.id === product.id ? {...inCart, qty: inCart.qty + 1} : x 
        )
      );
    } else {  //item not in cart
      //concating current array of cart items with selected product 1 quantity
      setCartItems([...cartItems, {...product, qty: 1}]);
    }
  }

  //remove item from cart in a pretty similar way
  const onRemove = (product) => {
    const inCart = cartItems.find(x => x.id === product.id);    
    //if removing this item mean there are none left of this item in the cart
    if(inCart.qty === 1) {
      //update cartItems to no longer have this product
      setCartItems(cartItems.filter((x) => x.id != product.id));
    } else {
      //just decrease using same code as onAdd
      setCartItems(
        cartItems.map((x) =>
          x.id === product.id ? {...inCart, qty: inCart.qty - 1} : x 
        )
      );
    }
  };
  

  return (
    <div className="App">
     <Header cartCount={cartItems.length}></Header>
     <div className='row'>
      {/*product data and button functionality sent to main and basket as props*/}
      <Main onAdd={onAdd} products={products}></Main>
      <Basket onAdd={onAdd} onRemove={onRemove} cartItems={cartItems}></Basket>
     </div>
    </div>
  );
}

export default App;
