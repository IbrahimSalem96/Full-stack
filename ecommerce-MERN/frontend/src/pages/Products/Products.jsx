import { CardsCarousel } from '../../components/products/Carousels'
import { LeadGrid } from '../../components/products/NavProducts'
import { AllProducts } from '../../components/products/Products'
import { useState } from 'react';


function Products() {

    const [selectedOption, setSelectedOption] = useState('Default sorting');
    const [search, setSearch] = useState('')
    const [show, setShowProduct] = useState(6)



    return (
        <>
            <CardsCarousel />
            <LeadGrid selectedOption={selectedOption} setSelectedOption={setSelectedOption} search={search} setSearch={setSearch} show={show} setShowProduct={setShowProduct} />
            < AllProducts selectedOption={selectedOption} search={search} show={show} />
        </ >
    )
}

export default Products
