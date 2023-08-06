import { createStyles, Text, rem } from '@mantine/core';


const useStyles = createStyles((theme) => ({
    title: {
        lineHeight: rem(30),
    },
    points: {
        paddingLeft: '20px',
        lineHeight: rem(30),
        marginTop: '20px',
        marginBottom: '20px'
    },
    descContent: {
        lineHeight: rem(30),
    },
}));




export function TabsDescription() {
    const { classes, theme } = useStyles();


    const data = [
        {
            text: 'Any Product types that You want - Simple, Configurable',
        },
        {
            text: 'Downloadable/Digital Products, Virtual Products',
        },
        {
            text: 'Inventory Management with Backordered items',
        },
        ,
    ]


    const text = data.map((item) => {
        return (
            <Text key={item.text} className={classes.points}>
                <i className="bi bi-check-circle-fill" style={{ paddingRight: "10px" }}></i>  {item.text}
            </Text>
        )
    })

    return (
        <>
            <Text className={classes.title}>
                Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies
                eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
            </Text>

            {text}

            <Text className={classes.descContent}>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </Text>
        </>
    )
}
