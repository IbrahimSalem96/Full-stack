import { Container, createStyles, rem, Select, TextInput } from '@mantine/core';


const useStyles = createStyles((theme) => ({
    root: {
        position: 'relative',
    },

    input: {
        height: rem(54),
        paddingTop: rem(18),
    },

    label: {
        position: 'absolute',
        pointerEvents: 'none',
        fontSize: theme.fontSizes.xs,
        paddingLeft: theme.spacing.sm,
        paddingTop: `calc(${theme.spacing.sm} / 2)`,
        zIndex: 1,
    },
}));

export function BillingDetails() {
    const { classes } = useStyles();
    return (
        <Container>
            <h2>Billing Address</h2>
            <div style={{ display: "flex", gap: "1rem" }}>
                <TextInput label="First Name" placeholder="John" classNames={classes} style={{ width: "25vw" }} />
                <TextInput label="Last Name" placeholder="Doe " classNames={classes} style={{ width: "25vw" }} />
            </div>
            <Select
                mt="md"
                withinPortal
                data={['Jordan']}
                placeholder="Choose one"
                label="Country/Region"
                classNames={classes}
                style={{ width: "51vw" }}
            />
            <div style={{ display: "flex", flexDirection: "column", gap: "1rem" }}>
                <Select
                    mt="md"
                    withinPortal
                    data={['Amman', 'Irbid', 'Zarqa', 'AlSalt', 'Mafraq', "Ajloun", 'Karaak', "Ma'an", 'AlTafilah']}
                    placeholder="Choose one"
                    label="City"
                    classNames={classes}
                    style={{ width: "51vw" }}
                />
                <TextInput label="Shipping Address" placeholder="Street Name/house Number" classNames={classes} style={{ width: "51vw" }} />
                <TextInput label="Post Code/Zip" classNames={classes} style={{ width: "51vw" }} />
                <TextInput label="Phone" placeholder="+962 7** *** ***" classNames={classes} style={{ width: "51vw" }} />
                <TextInput label="Email" placeholder="John.doe@gmail.com" classNames={classes} style={{ width: "51vw" }} />
            </div>
        </Container>
    );
}


