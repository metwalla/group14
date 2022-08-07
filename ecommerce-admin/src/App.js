import {Routes, Route} from 'react-router-dom';
import './App.css';
import Navbar from './component/Navbar';
import Users from './component/Users';
import Home from './component/Home';
import Themes from './component/Themes';
import Products from './component/Products';

function App() {
  return (
    <>
      <Navbar/>
      <Routes>
        <Route path="/" element={<Home/>} />
        <Route path="/users" element={<Users/>} />
        <Route path="/products" element={<Products/>} />
        <Route path="/themes" element={<Themes/>} />
      </Routes>
    </>
  );
}

export default App;
