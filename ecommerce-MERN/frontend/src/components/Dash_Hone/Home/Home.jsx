import React from "react";

import { createStyles, Text, SimpleGrid, Container, rem } from "@mantine/core";
import { IconTruck, IconCertificate, IconCoin } from "@tabler/icons-react";

const useStyles = createStyles((theme) => ({
  feature: {
    position: "relative",
    paddingTop: theme.spacing.xl,
    paddingLeft: theme.spacing.xl,
  },

  overlay: {
    position: "absolute",
    height: rem(100),
    width: rem(160),
    top: 0,
    left: 0,
    backgroundColor: theme.fn.variant({
      variant: "light",
      color: theme.primaryColor,
    }).background,
    zIndex: 1,
  },

  content: {
    position: "relative",
    zIndex: 2,
  },

  icon: {
    color: theme.fn.variant({ variant: "light", color: theme.primaryColor })
      .color,
  },

  title: {
    color: theme.colorScheme === "dark" ? theme.white : theme.black,
  },
}));

interface FeatureProps extends React.ComponentPropsWithoutRef<"div"> {
  icon: React.FC<any>;
  title: string;
  description: string;
}

function Feature({
  icon: Icon,
  title,
  description,
  className,
  ...others
}: FeatureProps) {
  const { classes, cx } = useStyles();

  return (
    <div className={cx(classes.feature, className)} {...others}>
      <div className={classes.overlay} />

      <div className={classes.content}>
        <Icon size={rem(38)} className={classes.icon} stroke={1.5} />
        <Text fw={700} fz="lg" mb="xs" mt={5} className={classes.title}>
          {title}
        </Text>
        <Text c="dimmed" fz="sm">
          {description}
        </Text>
      </div>
    </div>
  );
}

const mockdata = [
  {
    icon: IconTruck,
    title: "Number Of Products",
    description: "55 Product",
  },
  {
    icon: IconCertificate,
    title: "Number Of Orderes",
    description: "11 Order",
  },
  {
    icon: IconCoin,
    title: "Delevered",
    description: "2 Delevered",
  },
];

export default function Home() {
  const items = mockdata.map((item) => <Feature {...item} key={item.title} />);

  return (
    <Container mt={30} mb={30} size="lg">
      <SimpleGrid
        cols={3}
        breakpoints={[{ maxWidth: "sm", cols: 1 }]}
        spacing={50}
      >
        {items}
      </SimpleGrid>
    </Container>
  );
}

// //    <div>
// <h5>number off products</h5>
// {/* <h5>{number off products}</h5> */}
// <h5>5</h5>
// </div>

// <div>
// <h5>Orders</h5>
// {/* <h5>{number off products}</h5> */}
// <h5>5</h5>
// </div>
