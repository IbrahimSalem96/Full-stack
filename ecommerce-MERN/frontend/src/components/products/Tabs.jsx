import { Tabs, createStyles } from '@mantine/core';
import { TabsInformation } from './TabsInformation'
import { TabsReviews } from './TabsReviews'
import { TabsSize } from './TabsSize'
import { TabsDescription } from './TabsDescription'


const useStyles = createStyles((theme) => ({
    tabs: {
        padding: '20px 10px'
    },

}));




export function Tab() {
    const { classes, theme } = useStyles();


    return (
        <Tabs keepMounted={false} defaultValue="DESCRIPTION" >
            <Tabs.List>
                <Tabs.Tab fw={700} value="DESCRIPTION">DESCRIPTION</Tabs.Tab>
                <Tabs.Tab fw={700} value="SIZE">SIZE GUIDE</Tabs.Tab>
                <Tabs.Tab fw={700} value="ADDITIONAL">ADDITIONAL INFORMATION</Tabs.Tab>
                <Tabs.Tab fw={700} value="REVIEWS">REVIEWS (0)</Tabs.Tab>
            </Tabs.List>

            <Tabs.Panel value="DESCRIPTION" className={classes.tabs}>
                <TabsDescription />
            </Tabs.Panel>

            <Tabs.Panel value="SIZE" className={classes.tabs}>
                <TabsSize />
            </Tabs.Panel>

            <Tabs.Panel value="ADDITIONAL" className={classes.tabs}>
                <TabsInformation />
            </Tabs.Panel>

            <Tabs.Panel value="REVIEWS" className={classes.tabs}>
                <TabsReviews />
            </Tabs.Panel>
        </Tabs>
    );
}
