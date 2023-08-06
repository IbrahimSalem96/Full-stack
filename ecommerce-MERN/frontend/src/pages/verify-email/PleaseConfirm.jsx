import { createStyles, Container, Title, Text, Button, Group, rem } from '@mantine/core';
import { Link } from 'react-router-dom';
import './PleaseConfirm.css'

const useStyles = createStyles((theme) => ({


    inner: {
        position: 'relative',
    },

    image: {
        ...theme.fn.cover(),
        opacity: 0.75,
    },

    content: {
        paddingTop: rem(220),
        position: 'relative',
        zIndex: 1,

        [theme.fn.smallerThan('sm')]: {
            paddingTop: rem(120),
        },
    },

    title: {
        fontFamily: `Greycliff CF, ${theme.fontFamily}`,
        textAlign: 'center',
        fontWeight: 900,
        fontSize: rem(38),

        [theme.fn.smallerThan('sm')]: {
            fontSize: rem(32),
        },
    },

    description: {
        maxWidth: rem(540),
        margin: 'auto',
        marginTop: theme.spacing.xl,
        marginBottom: `calc(${theme.spacing.xl} * 1.5)`,
    },
}));

export default function NothingFoundBackground() {
    const { classes } = useStyles();

    return (
        <Container className='h-Page-footer'>
            <div className={classes.inner}>
                <div className={classes.content}>
                    <Title className={classes.title}>Verify the account</Title>
                    <Text color="dimmed" size="lg" align="center" className={classes.description}>
                        You must go to verify the account in order to be able to log in. We have sent you a notification
                    </Text>
                    <Group position="center">
                        <Link to='/'><Button size="md">Take me back to home page</Button></Link>
                    </Group>
                </div>
            </div>
        </Container>
    );
}