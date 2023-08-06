import { Card, Text, Group, Badge, createStyles, Center, Button, rem } from '@mantine/core';
import { IconGasStation, IconGauge, IconManualGearbox, IconUsers } from '@tabler/icons-react';
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
        padding: theme.spacing.md,
        borderTop: `${rem(1)} solid ${theme.colorScheme === 'dark' ? theme.colors.dark[4] : theme.colors.gray[3]
            }`,
    },

    icon: {
        marginRight: rem(5),
        color: theme.colorScheme === 'dark' ? theme.colors.dark[2] : theme.colors.gray[5],
    },
}));

const mockdata = [
    { label: '4 passengers', icon: IconUsers },
    { label: '100 km/h in 4 seconds', icon: IconGauge },
    { label: 'Automatic gearbox', icon: IconManualGearbox },
    { label: 'Electric', icon: IconGasStation },
];

export function CartTotal() {
    const { classes } = useStyles();
    const features = mockdata.map((feature) => (
        <Center key={feature.label}>
            <feature.icon size="1.05rem" className={classes.icon} stroke={1.5} />
            <Text size="xs">{feature.label}</Text>
        </Center>
    ));

    return (
        <Card withBorder radius="md" className={classes.card} >
            <Group position="apart" mt="md">
                <div>
                    <Text fw={800}>CART TOTAL</Text>
                    <br></br>
                    <Text fz="md" c="dimmed">
                        Total
                    </Text>
                </div>
            </Group>



            <Card.Section className={classes.section}>
                <Group spacing={30}>
                    <div>
                        <Text fz="xl" fw={700} sx={{ lineHeight: 1 }}>
                            $168.00
                        </Text>
                    </div>
                    {/* <Link to={"/checkout"}>
                        <Button radius="sm" style={{ flex: 1 }}>
                            Proceed to Checkout
                        </Button>
                    </Link> */}
                </Group>
            </Card.Section>
        </Card>
    );
}