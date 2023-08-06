import {
    Menu,
    Group,
    Text,
    Avatar,
    ActionIcon,
} from '@mantine/core';
import {
    Link, useNavigate,
} from 'react-router-dom';
import {
    IconLogout,
    IconChevronRight,
} from '@tabler/icons-react';
import { IconSettings } from '@tabler/icons-react';
import { UserInfoContext } from '../../context/UserInfoProvider';
import { useContext } from 'react'
export default function UserMenu() {
    const { userInfo, setUserInfo } = useContext(UserInfoContext);

    let navigate = useNavigate({ userInfo })
    const logout = () => {
        localStorage.removeItem('userInfo')
        setUserInfo(null)
        navigate('/login')
    }
    return (
        <Group position="center">
            <Menu
                withArrow
                width={300}
                position="bottom"
                transitionProps={{ transition: 'pop' }}
                withinPortal
            >
                <Menu.Target>
                    <ActionIcon>
                        <IconSettings size="1.5rem" stroke={2} color="#333" />
                    </ActionIcon>
                </Menu.Target>


                <Menu.Dropdown>
                    <Link
                        to="profile"
                    >
                        <Menu.Item
                            rightSection={<IconChevronRight size="1.2rem" stroke={1.5} />}
                        >
                            <Group>
                                <Avatar
                                    radius="xl"
                                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                                />

                                <div>
                                    <Text weight={500}>{userInfo.username} </Text>
                                    <Text size="xs" color="dimmed">
                                        {userInfo.email}
                                    </Text>
                                </div>

                            </Group>
                        </Menu.Item>
                    </Link>

                    <Menu.Divider />

                    <Menu.Label>Settings</Menu.Label>

                    <Menu.Item
                        icon={<IconLogout size="0.9rem" stroke={1.5} />}
                        onClick={() => logout()}>
                        Logout
                    </Menu.Item>
                </Menu.Dropdown>
            </Menu>
        </Group>
    )
} 