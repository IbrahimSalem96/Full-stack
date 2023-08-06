import { createStyles, Title, Text, Button, Container, Group, rem } from '@mantine/core';
import axios from 'axios'
import { useNavigate } from 'react-router-dom';
import { toast, ToastContainer } from 'react-toastify'
import { useParams } from 'react-router-dom'
import './VerifyEmail.css'

const useStyles = createStyles((theme) => ({
  root: {
    height: '100%',
    display: 'grid',
    placeContent: 'center',
  },
  title: {
    fontFamily: `Greycliff CF, ${theme.fontFamily}`,
    textAlign: 'center',
    fontWeight: 900,
    fontSize: rem(38),
    color: theme.black,
    [theme.fn.smallerThan('sm')]: {
      fontSize: rem(32),
    },
  },

  description: {
    maxWidth: rem(540),
    margin: 'auto',
    marginTop: theme.spacing.xl,
    marginBottom: `calc(${theme.spacing.xl} * 1.5)`,
    color: theme.black,
  },
}));

export default function VerifyEmail() {
  const { classes } = useStyles();
  let { userId } = useParams()
  let { token } = useParams()
  let navigate = useNavigate()

  // Confirm Email
  const fetchConfirmEmail = async (productID) => {
    try {
      const response = await axios.get(`http://localhost:8000/api/auth/${userId}/verify/${token}`)
      toast.success(response.data.message, {
        position: "bottom-left",
        autoClose: 5000,
        hideProgressBar: false,
        closeOnClick: true,
        pauseOnHover: true,
        draggable: true,
        progress: undefined,
        theme: "colored",
      });
      navigate('/login')
    } catch (error) {
      toast.error(error.response.data.message, {
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




  return (
    <div className='h-Page-footer'>
      <Container className={classes.root}>
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
        <Title className={classes.title}>Confirm Email</Title>
        <Text size="lg" align="center" className={classes.description}>
          Let's go great browsing press confirm
        </Text>
        <Group position="center">
          <Button variant="white" size="md" style={{ backgroundColor: '#228be6', color: 'white' }} onClick={() => fetchConfirmEmail()}>
            Confirm
          </Button>
        </Group>
      </Container>
    </div>
  );
}