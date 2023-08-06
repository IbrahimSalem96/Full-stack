import React from 'react';
import { Group, Text, createStyles } from '@mantine/core';
import { Link } from 'react-router-dom'

const useStyles = createStyles((theme) => ({
    socialIcon: {
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'center',
        width: '35px',
        height: '35px',
        border: '1px solid #bababa',
        borderRadius: '50%',
    },
    wishlist: {
        fontWeight: 700,
        fontSize: '14px',
        cursor: 'pointer',
        transition: 'all 0.3s',
        '&:hover': {
            color: '#e13b3f',
        },
    },
}));


export function SocialIcons() {
    const { classes, theme } = useStyles();


    return (
        <Group direction="column" align="center" spacing="xs">
            <i className={`bi bi-facebook ${classes.socialIcon}`} style={{ color: '#3b5998' }}></i>
            <i className={`bi bi-twitter ${classes.socialIcon}`} style={{ color: '#1da1f2' }}></i>
            <i className={`bi bi-linkedin ${classes.socialIcon}`} style={{ color: '#0077b5' }}></i>
            <i className={`bi bi-envelope-fill ${classes.socialIcon}`} style={{ color: '#b21237' }}></i>

            <Text className={classes.wishlist}>
                <i className="bi bi-balloon-heart-fill" style={{ fontSize: '24px', color: '#ff0077', }}></i>
                Go to cart
            </Text>
        </Group>
    );
};
