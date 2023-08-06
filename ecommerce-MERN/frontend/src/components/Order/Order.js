import { Card, Text, Group, createStyles, Button, rem } from '@mantine/core';
import { Link } from 'react-router-dom';

const useStyles = createStyles((theme) => ({
    card: {
        backgroundColor: theme.colorScheme === 'dark' ? theme.colors.dark[7] : theme.white,
    },


    label: {
        marginBottom: theme.spacing.xs,
        lineHeight: 1,
        fontWeight: 700,
        fontSize: theme.fontSizes.xs,
        letterSpacing: rem(-0.25),
        textTransform: 'uppercase',
    },

    section: {
        padding: theme.spacing.sm,
        borderTop: `${rem(1)} solid ${theme.colorScheme === 'dark' ? theme.colors.dark[4] : theme.colors.gray[3]
            }`,
    },

    icon: {
        marginRight: rem(5),
        color: theme.colorScheme === 'dark' ? theme.colors.dark[2] : theme.colors.gray[5],
    },
}));


export function Order() {
    const { classes } = useStyles();

    return (
        <Card withBorder radius="md" className={classes.card} id='order-container'>
            <Group position="apart" mt="md">
                <div>
                    <Text fw={800}>YOUR ORDER</Text>
                    <br></br>
                    <Text fz="sm" c="dimmed">
                        Products
                    </Text>
                </div>
            </Group>

            <div style={{ display: "flex", justifyContent: "space-between" }}>
                <p>Casual Spring Blue Shoes</p>
                <p>$55.00</p>
            </div>
            <div style={{ display: "flex", justifyContent: "space-between" }}>
                <p>Men Black Sports Shoes</p>
                <p>$65.00</p>
            </div>

            <div className={classes.section}>
                <Text fw={700}>Payment Method</Text>
                <label>
                    <input type="radio" value="option1" checked={true} style={{ marginTop: "20px" }} />
                    Cash on Delivery
                </label>

            </div>

            <Card.Section className={classes.section}>
                <div style={{ display: "flex", justifyContent: "space-between" }}>
                    <p>Total</p>
                    <Text fz="xl" fw={700} >
                        $120.00
                    </Text>
                </div>
            </Card.Section>

        </Card>
    );
}