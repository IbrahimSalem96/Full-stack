import { createStyles, Button, Menu, Group, ActionIcon, rem } from '@mantine/core';
import { IconChevronDown } from '@tabler/icons-react';


const useStyles = createStyles((theme) => ({
    button: {
        borderTopRightRadius: 0,
        borderBottomRightRadius: 0,
    },

    menuControl: {
        borderTopLeftRadius: 0,
        borderBottomLeftRadius: 0,
        border: 0,
        borderLeft: `${rem(1)} solid ${theme.colorScheme === 'dark' ? theme.colors.dark[7] : theme.white
            }`,
    },
}));

export function SortProducts({ setSelectedOption }) {
    const { classes, theme } = useStyles();
    const menuIconColor = theme.colors[theme.primaryColor][theme.colorScheme === 'dark' ? 5 : 6];


    // Handler to update the selected option
    const handleOptionSelect = (option) => {
        setSelectedOption(option);
    };

    // console.log(selectedOption);

    return (
        <Group noWrap spacing={0}>
            <Button className={classes.button}>Sort By</Button>
            <Menu transitionProps={{ transition: 'pop' }} position="bottom-end" withinPortal>
                <Menu.Target>
                    <ActionIcon
                        variant="filled"
                        color={theme.primaryColor}
                        size={36}
                        className={classes.menuControl}
                    >
                        <IconChevronDown size="1rem" stroke={1.5} />
                    </ActionIcon>
                </Menu.Target>
                <Menu.Dropdown>
                    <Menu.Item onClick={() => handleOptionSelect('Default sorting')}>
                        Default sorting
                    </Menu.Item>
                    <Menu.Item onClick={() => handleOptionSelect('Sort by Oldest')}>
                        Sort by Oldest
                    </Menu.Item>
                    <Menu.Item onClick={() => handleOptionSelect('Sort by highest price')}>
                        Sort by highest price
                    </Menu.Item>
                    <Menu.Item onClick={() => handleOptionSelect('Sort by lowest price')}>
                        Sort by lowest price
                    </Menu.Item>
                </Menu.Dropdown>
            </Menu>
        </Group>
    );
}