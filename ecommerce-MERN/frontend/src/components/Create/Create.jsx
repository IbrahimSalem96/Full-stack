import { useState } from "react";
import { useNavigate } from 'react-router-dom'
import "./create.css"
const Create = () => {
    const [name, setname] = useState('')
    const [body, setBody] = useState('')
    const [price, setprice] = useState('mario')
    const [isPending, setIsPending] = useState(false)
    const [imagePreview, setImagePreview] = useState(null);
    const [selectedImage, setSelectedImage] = useState(null);

    const navigate = useNavigate()

    const handleImageChange = (event) => {
        const file = event.target.files[0];
        setSelectedImage(file);
        // Create a preview URL for the selected image
        setImagePreview(URL.createObjectURL(file));
    };



    const handleSubmit = (e) => {
        e.preventDefault();
        const product = { name, body, price };
        setIsPending(true)
        fetch('http://localhost:8000/products', {
            method: 'POST',
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(product)
        }).then(() => {
            console.log("New product added");
            setIsPending(false)
            navigate("/")
        })
    }
    return (
        <div className="create">
            <h2>Add a New product</h2>
            <form onSubmit={handleSubmit}>
                <label>Product name:</label>
                <input
                    type="text"
                    required
                    value={name}
                    onChange={(e) => setname(e.target.value)}
                />
                <label>Product description:</label>
                <textarea required
                    onChange={(e) => setBody(e.target.value)}>

                </textarea>
                <label>Product price:</label>
                <input type="text" required onChange={(e) => setprice(e.target.value)} />
                <label>Product Image:</label>
                <input type="file" onChange={handleImageChange} />
                {imagePreview && <img src={imagePreview} alt="Preview" style={{ width: '300px', display: "block", margin: "20px auto" }} />}
                {!isPending && <button>Add product</button>}
                {isPending && <button disabled>Adding product...</button>}
            </form>
        </div>
    )
};

export default Create;
