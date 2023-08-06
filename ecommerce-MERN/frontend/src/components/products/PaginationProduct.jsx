import { Group, Pagination } from '@mantine/core';

export function PaginationProduct({ pageNmbers, setCurrentPage }) {

    const handlePageChange = (page) => {
        setCurrentPage(page);
    };
    return (
        <div style={{ marginTop: '50px', marginBottom: '50px' }}>
            <Pagination.Root total={pageNmbers.length} onChange={handlePageChange}>
                <Group spacing={5} position="center">
                    <Pagination.Previous />
                    <Pagination.Items />
                    <Pagination.Next />
                </Group>
            </Pagination.Root>
        </div>
    );
}
