import { createStyles, Container, Grid, SimpleGrid } from '@mantine/core';
import { SortProducts } from './SortProducts';
import { SearchProducts } from './SearchProducts';
import { ShowProducts } from './ShowProducts';

const useStyles = createStyles((theme) => ({
    show: {
        display: 'flex',
        justifyContent: 'end',
        '@media (max-width: 767px)': {
            justifyContent: 'start',
        },
    },
    search: {
        display: 'flex',
        justifyContent: 'center',
    },
}));

export function LeadGrid({ selectedOption, setSelectedOption, search, setSearch, show, setShowProduct }) {
    const { classes, theme } = useStyles();

    return (
        <Container my="md" size="xl">
            <SimpleGrid cols={3} spacing="md" breakpoints={[{ maxWidth: 'sm', cols: 1 }]}>
                <Grid gutter="md">
                    <Grid.Col>
                        <SortProducts selectedOption={selectedOption} setSelectedOption={setSelectedOption} />
                    </Grid.Col>
                </Grid>

                <Grid gutter="md">
                    <Grid.Col className={classes.search}>
                        <SearchProducts search={search} setSearch={setSearch} />
                    </Grid.Col>
                </Grid>

                <Grid gutter="md">
                    <Grid.Col className={classes.show}>
                        <ShowProducts show={show} setShowProduct={setShowProduct} />
                    </Grid.Col>
                </Grid>
            </SimpleGrid>
        </Container>
    );
}
