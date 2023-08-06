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

export function ShowProducts({ show, setShowProduct }) {
    const { classes, theme } = useStyles();
    const menuIconColor = theme.colors[theme.primaryColor][theme.colorScheme === 'dark' ? 5 : 6];

    // Handler to update the number show Product
    const handleOptionShow = (option) => {
        setShowProduct(option)
    };


    return (
        <Group noWrap spacing={0}>
            <Button className={classes.button}>Show</Button>
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
                    <Menu.Item onClick={() => handleOptionShow(6)}>
                        6
                    </Menu.Item>
                    <Menu.Item onClick={() => handleOptionShow(12)}>
                        12
                    </Menu.Item>
                    <Menu.Item onClick={() => handleOptionShow(18)}>
                        18
                    </Menu.Item>
                    <Menu.Item onClick={() => handleOptionShow(24)}>
                        24
                    </Menu.Item>
                </Menu.Dropdown>
            </Menu>
        </Group>
    );
}