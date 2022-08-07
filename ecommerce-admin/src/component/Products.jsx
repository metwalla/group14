import React, { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';
import { Modal } from 'bootstrap';

const Products = () => {

    const [data, setData] = useState({ data: [] });
    const [loading, setLoading] = useState(false);
    const [productToDelete, setProductToDelete] = useState({});
    const [productToUpdate, setProductToUpdate] = useState({});
    const [name, setName] = useState("");
    const [price, setPrice] = useState(0);
    const navigate = useNavigate();
    let componentMounted = true;
    var deleteModal;
    var updateModal;

    useEffect(() => {
        if (sessionStorage.getItem("token") === null) {
            navigate('/');
            return;
        }
        const getProducts = async () => {
            setLoading(true);
            const response = await fetch(`https://muslemah.myweb.cs.uwindsor.ca/comp3340/ecommerce_api/public/api/products`, {
                method: 'GET',
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json",
                    "Authorization": "Bearer " + sessionStorage.getItem("token")
                }
            });
            if (componentMounted) {
                setData(await response.json());
                setLoading(false);
            }
            return () => {
                componentMounted = false;
            }
        }
        getProducts();
    }, []);

    const deleteProduct = async () => {
        const response = await fetch(`https://muslemah.myweb.cs.uwindsor.ca/comp3340/ecommerce_api/public/api/products/${productToDelete.id}`, {
            method: 'DELETE',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + sessionStorage.getItem("token")
            }
        });
        deleteModal.hide();
    }

    const updateProduct = async () => {
        let product = {id: productToUpdate.id, name, category: productToUpdate.category, img_url: productToUpdate.img_url, price, quantity: productToUpdate.quantity}
        const response = await fetch(`https://muslemah.myweb.cs.uwindsor.ca/comp3340/ecommerce_api/public/api/products/${productToUpdate.id}`, {
            method: 'PUT',
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": "Bearer " + sessionStorage.getItem("token")
            },
            body: JSON.stringify(product)
        });
        updateModal.hide();
    }

    return (
        <div>
            <div className="table-responsive p-4">
                <table className="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        {data.data.map((product) => {
                            return (
                                <>
                                    <tr>
                                        <td>{product.id}</td>
                                        <td>{product.name}</td>
                                        <td>${product.price}</td>
                                        <td><button type="button" class="btn btn-primary" aria-label="Update" onClick={() => {
                                            setProductToUpdate(product);
                                            setName(product.name);
                                            setPrice(product.price);
                                            updateModal = new Modal(document.getElementById('updateProductModal'));
                                            updateModal.show();
                                        }}>Update</button></td>
                                        <td><button type="button" class="btn btn-danger" aria-label="Delete" onClick={() => {
                                            setProductToDelete(product);
                                            deleteModal = new Modal(document.getElementById('deleteProductModal'));
                                            deleteModal.show();
                                        }}>Delete</button></td>
                                    </tr>
                                </>
                            )
                        })}
                    </tbody>
                </table>
            </div>
            <div class="modal fade" id="deleteProductModal" tabIndex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteProductModalLabel">Delete Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to delete {productToDelete.name}.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" onClick={() => { deleteProduct(); }}>Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="updateProductModal" tabIndex="-1" aria-labelledby="updateProductModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateProductModalLabel">Update Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control mb-2" placeholder="Name" value={name} onChange={(e) => setName(e.target.value)} />
                            <input type="number" step=".01" class="form-control mb-2" placeholder="Price" value={price} onChange={(e) => setPrice(parseFloat(e.target.value))} />
                            {/* {error === "" ? null : <div className="error mt-2">{error}</div>} */}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" onClick={() => { updateProduct(); }}>Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Products;
