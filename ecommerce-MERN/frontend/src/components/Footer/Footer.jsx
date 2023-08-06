import { createStyles, Anchor, Group, ActionIcon, rem } from '@mantine/core';
import {
  IconBrandTwitter,
  IconBrandYoutube,
  IconBrandInstagram,
} from '@tabler/icons-react';
import { Link } from 'react-router-dom';

const useStyles = createStyles((theme) => ({
  footer: {
    marginTop: `calc(${theme.spacing.md} )`,
    paddingTop: `calc(${theme.spacing.sm} )`,
    paddingBottom: `calc(${theme.spacing.sm} )`,
    borderTop: `${rem(1)} solid ${theme.colorScheme === 'dark' ? theme.colors.dark[5] : theme.colors.gray[2]
      }`,
  },

  inner: {
    display: 'flex',
    justifyContent: 'space-between',
    alignItems: 'center',
    padding: `${theme.spacing.md} ${theme.spacing.md}`,
    [theme.fn.smallerThan('sm')]: {
      flexDirection: 'column',
    },
  },

  links: {
    [theme.fn.smallerThan('sm')]: {
      marginTop: theme.spacing.lg,
      marginBottom: theme.spacing.md,
      paddingTop: rem(1),
      paddingBottom: rem(3),
    },
  },
}));

const links = [
  {
    link: '#',
    label: 'Contact',
  },
  {
    link: '#',
    label: 'Privacy',
  },
  {
    link: '#',
    label: 'Blog',
  },
  {
    link: '#',
    label: 'Store',
  },
  {
    link: '#',
    label: 'Careers',
  },
];

export default function FooterCentered() {
  const { classes } = useStyles();
  const items = links.map((link) => (
    <>
      <Anchor
        color='dimmed'
        key={link.label}
        href={link.link}
        sx={{ lineHeight: 1 }}
        onClick={(event) => event.preventDefault()}
        size='sm'
      >
        {link.label}
      </Anchor>
    </>
  ));

  return (
    <div className={classes.footer}>
      <div className={classes.inner}>
      <Link to="/">
            <img src="logo.png" width={"150px"} alt="" />
          </Link>

        <Group className={classes.links}>{items}</Group>

        <Group spacing='xs' position='right' noWrap>
          <ActionIcon size='lg' variant='default' radius='xl'>
            <IconBrandTwitter size='1.05rem' stroke={1.5} />
          </ActionIcon>
          <ActionIcon size='lg' variant='default' radius='xl'>
            <IconBrandYoutube size='1.05rem' stroke={1.5} />
          </ActionIcon>
          <ActionIcon size='lg' variant='default' radius='xl'>
            <IconBrandInstagram size='1.05rem' stroke={1.5} />
          </ActionIcon>
        </Group>
      </div>
    </div>
  );
}
