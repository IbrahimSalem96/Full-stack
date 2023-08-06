import { createStyles, Text, SimpleGrid, Container, rem } from '@mantine/core';
import { IconTruck, IconCertificate, IconCoin } from '@tabler/icons-react';

const useStyles = createStyles((theme) => ({
  feature: {
    position: 'relative',
    paddingTop: theme.spacing.xl,
    marginTop: theme.spacing.lg,
    marginBottom: "2rem",
    paddingLeft: theme.spacing.xl,
  },

  overlay: {
    position: 'absolute',
    height: rem(100),
    width: rem(160),
    top: 0,
    left: 0,
    backgroundColor: theme.fn.variant({
      variant: 'light',
      color: theme.primaryColor,
    }).background,
    zIndex: 1,
  },

  content: {
    position: 'relative',
    zIndex: 2,
  },

  icon: {
    color: theme.fn.variant({ variant: 'light', color: theme.primaryColor })
      .color,
  },

  title: {
    color: theme.colorScheme === 'dark' ? theme.white : theme.black,
  },
}));

function Feature({ icon: Icon, title, description, className, ...others }) {
  const { classes, cx } = useStyles();

  return (
    <div className={cx(classes.feature, className)} {...others}>
      <div className={classes.overlay} />

      <div className={classes.content}>
        <Icon size={rem(38)} className={classes.icon} stroke={1.5} />
        <Text fw={700} fz='lg' mb='xs' mt={5} className={classes.title}>
          {title}
        </Text>
        <Text c='dimmed' fz='sm'>
          {description}
        </Text>
      </div>
    </div>
  );
}

const mockdata = [
  {
    icon: IconTruck,
    title: 'Free Worldwide Shipping',
    description:
      'Get your dream furniture delivered to your doorstep with our hassle-free worldwide shipping service. No matter where you are, we ensure your order reaches you promptly and securely.',
  },
  {
    icon: IconCertificate,
    title: 'Best Quality Products',
    description:
      'Experience the epitome of comfort and style with our handpicked selection of top-quality furniture. Each piece is meticulously chosen to meet our high standards, ensuring your home is adorned with nothing but the best.',
  },
  {
    icon: IconCoin,
    title: 'Very Affordable Pricing',
    description:
      'Discover modern luxury without breaking the bank. We offer competitive and affordable pricing, so you can furnish your home with sleek and comfortable furniture, all within your budget.',
  },
];


export default function FeaturesAsymmetrical() {
  const items = mockdata.map((item) => <Feature {...item} key={item.title} />);

  return (
    <Container mt={100} mb={30} size='lg'>
      <SimpleGrid
        cols={3}
        breakpoints={[{ maxWidth: 'sm', cols: 1 }]}
        spacing={50}
      >
        {items}
      </SimpleGrid>
    </Container>
  );
}
