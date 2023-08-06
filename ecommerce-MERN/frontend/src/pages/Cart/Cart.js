import React from "react";
import ShoppingCart from "../../components/ShoppingCart/ShoppingCart";
import { CartTotal } from "../../components/CartTotal/CartTotal";
import { UserInfoContext } from '../../context/UserInfoProvider';

function Cart({ userInfo, setUserInfo }) {

  return (
    <div className="container">
      <ShoppingCart userInfo={userInfo} setUserInfo={setUserInfo} />
    </div>
  );
}

export default Cart;
