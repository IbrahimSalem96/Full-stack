import { useState } from "react";
import { Link } from "react-router-dom";

import {
  Navbar,
  Center,
  Tooltip,
  UnstyledButton,
  createStyles,
  Stack,
  rem,
  Flex,
} from "@mantine/core";
import {
  IconHome2,
  IconGauge,
  IconDeviceDesktopAnalytics,
  IconFingerprint,
  IconCalendarStats,
  IconUser,
  IconSettings,
  IconLogout,
  IconSwitchHorizontal,
} from "@tabler/icons-react";
// import { MantineLogo } sfrom '@mantine/ds';

import React from "react";

const useStyles = createStyles((theme) => ({
  link: {
    width: rem(50),
    height: rem(50),

    borderRadius: theme.radius.md,
    display: "flex",
    alignItems: "center",
    justifyContent: "center",
    color:
      theme.colorScheme === "dark"
        ? theme.colors.dark[0]
        : theme.colors.gray[7],

    "&:hover": {
      backgroundColor:
        theme.colorScheme === "dark"
          ? theme.colors.dark[5]
          : theme.colors.gray[0],
    },
  },

  active: {
    "&, &:hover": {
      backgroundColor: theme.fn.variant({
        variant: "light",
        color: theme.primaryColor,
      }).background,
      color: theme.fn.variant({ variant: "light", color: theme.primaryColor })
        .color,
    },
  },
}));

function NavbarLink({ icon: Icon, label, active, to }) {
  const { classes, cx } = useStyles();
  return (
    <Tooltip label={label} position="right" transitionProps={{ duration: 0 }}>
      <Link to={to} className={cx(classes.link, { [classes.active]: active })}>
        <Icon size="1.2rem" stroke={1.5} />
      </Link>
    </Tooltip>
  );
}

const mockdata = [
  { icon: IconHome2, label: "home_dashbord" },
  { icon: IconGauge, label: "products_dashbord" },
  { icon: IconDeviceDesktopAnalytics, label: "orders_dashbord" },
  { icon: IconCalendarStats, label: "setting" },
  // { icon: IconUser, label: "Account" },
  // { icon: IconFingerprint, label: "Security" },
  // { icon: IconSettings, label: "Settings" },
];

export default function NavbarMinimal() {
  const [active, setActive] = useState(0);

  const links = mockdata.map((link, index) => (
    <NavbarLink
      {...link}
      key={link.label}
      active={index === active}
      to={`/${link.label.toLowerCase()}`} // Use the label as the route path
    />
  ));
  const { classes } = useStyles();

  return (
    <Navbar
      style={{ display: Flex, color: "red" }}
      height={"Auto"}
      width={{ base: 80 }}
      p="md"
    >
      <Center>{/* <MantineLogo type="mark" size={30} /> */}</Center>
      <Navbar.Section grow mt={50}>
        <Stack justify="flexStart" spacing={0}>
          <Link to="/" className={classes.link}>
            {/* Replace the MantineLogo here */}
          </Link>
          {links}
        </Stack>
      </Navbar.Section>
      <Navbar.Section>
        <Stack justify="flexStart" spacing={0}>
          <NavbarLink icon={IconSwitchHorizontal} label="Change account" />
          <NavbarLink icon={IconLogout} label="Logout" />
        </Stack>
      </Navbar.Section>
    </Navbar>
  );
}
