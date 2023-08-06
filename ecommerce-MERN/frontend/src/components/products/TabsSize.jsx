import { Grid, Image, Table } from '@mantine/core';

export function TabsSize() {

    const elements = [
        {
            size: 'XS',
            chest: '34-36',
            waist: '27-29',
            hips: '34.5-36.5',
        },

        {
            size: 'S',
            chest: '36-38',
            waist: '29-31',
            hips: '36.5-38.5',
        },

        {
            size: 'M',
            chest: '38-40',
            waist: '31-33	',
            hips: '38.5-40.5',
        },

        {
            size: 'L',
            chest: '40-42',
            waist: '33-36',
            hips: '40.5-43.5',
        },

        {
            size: 'XL',
            chest: '42-45',
            waist: '36-40',
            hips: '43.5-47.5',
        },

        {
            size: 'XLL',
            chest: '45-48',
            waist: '40-44',
            hips: '47.5-51.5',
        },
    ]

    const rows = elements.map((element) => (
        <tr key={element.size}>
            <td fw={700}>{element.size}</td>
            <td fw={700}>{element.chest}</td>
            <td fw={700}>{element.waist}</td>
            <td fw={700}>{element.hips}</td>
        </tr>
    ));


    return (
        <Grid gutter={5} gutterXs="md" gutterMd="xl" gutterXl={50}>
            <Grid.Col span={4}>
                <Image maw={240} mx="auto" radius="md" src="https://d-themes.com/react/porto/demo8/images/products/single/body-shape.png" alt="Random image" />
            </Grid.Col>
            <Grid.Col span={8} style={{ display: 'flex' }}>
                <Table captionSide="bottom" striped withBorder>
                    <thead>
                        <tr>
                            <th>SIZE</th>
                            <th>CHEST (IN.)	</th>
                            <th>WAIST (IN.)</th>
                            <th>HIPS (IN.)</th>
                        </tr>
                    </thead>
                    <tbody>{rows}</tbody>
                </Table>
            </Grid.Col>
        </Grid>
    );
}