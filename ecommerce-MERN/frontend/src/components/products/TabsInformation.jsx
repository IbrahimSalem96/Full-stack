import { Table } from '@mantine/core';


export function TabsInformation() {

    const elements = [
        {
            name: 'Weight',
            position: '23 kg',
        },
        {
            name: 'Dimensions',
            position: '12 × 24 × 35 cm',
        },
        {
            name: 'Color',
            position: 'Black, Green, Indigo',
        },
        {
            name: 'Size	',
            position: '	Large, Medium, Small',
        }
    ]

    const rows = elements.map((element) => (
        <tr key={element.name}>
            <td fw={700}>{element.name}</td>
            <td fw={700}>{element.position}</td>
        </tr>
    ));

    return (
        <Table captionSide="bottom" striped withBorder>
            <tbody>{rows}</tbody>
        </Table>
    );
}