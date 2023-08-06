import { useState, useContext } from 'react';
import { Stepper, Button, Group, Container } from '@mantine/core';
import { Link } from 'react-router-dom';
import Cart from '../../pages/Cart/Cart';
import Checkout from '../../pages/Checkout/Checkout';
import Confirmation from '../../pages/Confirmation/Confirmation';
import { UserInfoContext } from '../../context//UserInfoProvider'
import { toast, ToastContainer } from 'react-toastify'
import axios from 'axios'

const FirstStep = ({ userInfo, setUserInfo }) => {
  return (
    <div>
      <Cart userInfo={userInfo} setUserInfo={setUserInfo} />
    </div>
  );
};
const SecondStep = () => {
  return (
    <div>
      <Checkout />
    </div>
  );
};

const FinalStep = () => {
  return (
    <div>
      <Confirmation />
    </div>
  );
};


export default function Progress() {
  const [active, setActive] = useState(0);
  const { userInfo, setUserInfo } = useContext(UserInfoContext);

  const steps = [
    <FirstStep userInfo={userInfo} setUserInfo={setUserInfo} />,
    <SecondStep />,
    <FinalStep />,
  ];


  //fetch Past Orders Cart
  const fetchPastOrders = async () => {
    try {
      const token = JSON.parse(localStorage.getItem('userInfo')).token;

      //Send to the request past orders
      const response = await axios.post(`http://localhost:8000/api/pastorder`, {}, {
        headers: {
          token: token,
        },
      });

      // Retrieving and saving new data from the user
      const updatedUserInfo = {
        ...response.data.user,
        token: token,
      };
      localStorage.setItem('userInfo', JSON.stringify(updatedUserInfo));
      setUserInfo(updatedUserInfo);

      toast.success('Your request has been sent. Thank you for dealing with us', {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      });
    } catch (error) {
      toast.error('There is an error with the data or you are not logged in, try again later', {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      });
    }
  };

  //Transmitter activation
  const pastOrders = () => {
    if (userInfo) {
      fetchPastOrders()
    } else {
      toast.error('👮 You must be logged in!', {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      });
    }
  }

  //nex step start function fetch
  const nextStep = () => {
    setActive((current) => {
      if (current < 2) {
        return current + 1;
      } else if (current === 2) {
        return pastOrders()
      }
    });
  };



  return (
    <Container size='xl' className='h-Page-footer'>
      <ToastContainer
        position="bottom-left"
        autoClose={5000}
        hideProgressBar={false}
        newestOnTop={false}
        closeOnClick
        rtl={false}
        pauseOnFocusLoss
        draggable
        pauseOnHover
        theme="colored"
      />
      <Stepper active={active} onStepClick={false} breakpoint="sm" allowNextStepsSelect={false} style={{ width: "50%", margin: 'auto', padding: '20px' }} >
        <Stepper.Step label="First step" description="Shopping Cart">
          Step 1: Shopping Cart
        </Stepper.Step>
        <Stepper.Step label="Second step" description="Shipping Address">
          Step 2: Shipping Address
        </Stepper.Step>
        <Stepper.Step label="Final step" description="Confirmation">
          Step 3: Confirmation
        </Stepper.Step>
        <Stepper.Completed>
          Completed, click back button to get to the previous step
        </Stepper.Completed>
      </Stepper>

      {steps[active]}

      <Group position="center" mt="xl" mb='xl'>

        {userInfo.cart.length > 0 && (
          <Button onClick={nextStep}>Next</Button>
        )}

      </Group>
    </Container >
  );
}