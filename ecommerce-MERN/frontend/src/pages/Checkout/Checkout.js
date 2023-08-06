import React from 'react'
import { BillingDetails } from '../../components/BillingDetails/BillingDetails'
import { Order } from '../../components/Order/Order'
import { Grid } from '@mantine/core';

function Checkout() {
  return (
    <div style={{ display: "flex", justifyContent: "center", gap: "10px", flexWrap: "wrap", margin: "4rem" }}>

      <BillingDetails />
      <Order />
    </div>
  )
}

export default Checkout