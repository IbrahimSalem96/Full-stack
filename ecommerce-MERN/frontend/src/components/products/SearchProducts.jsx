import { TextInput, TextInputProps, useMantineTheme } from '@mantine/core';
import { IconSearch } from '@tabler/icons-react';

export function SearchProducts(props: TextInputProps) {
    const theme = useMantineTheme();


    // console.log(props.search)


    return (
        <TextInput
            onChange={(e) => props.setSearch(e.target.value)}
            icon={<IconSearch size="1.1rem" stroke={1.5} />}
            radius="xl"
            size="md"
            // rightSection={
            //     <ActionIcon size={32} radius="xl" color={theme.primaryColor} variant="filled">
            //         {theme.dir === 'ltr' ? (
            //             <IconArrowRight size="1.1rem" stroke={1.5} />
            //         ) : (
            //             <IconArrowLeft size="1.1rem" stroke={1.5} />
            //         )}
            //     </ActionIcon>
            // }
            placeholder="Search questions"
            rightSectionWidth={42}
            {...props}
        />
    );
}