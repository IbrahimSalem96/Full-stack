const { Carousel } = require('@mantine/carousel');
const { useMediaQuery } = require('@mantine/hooks');
const { createStyles, Paper, Text, Title, Button, useMantineTheme, rem, Container } = require('@mantine/core');

const useStyles = createStyles((theme) => ({
  card: {
    marginTop:"1rem",
    height: rem(600),
    backgroundSize: 'cover',
    backgroundPosition: 'center',
    display: 'flex',
    alignItems: 'baseline',
    flexDirection: 'column',
    justifyContent: 'flex-end',
  },

  title: {
    fontFamily: `Greycliff CF, ${theme.fontFamily}`,
    fontWeight: 900,
    color: theme.white,
    lineHeight: 1.2,
    fontSize: rem(32),
    marginBottom: '15px',
    padding: rem(10),
    paddingRight: rem(100),
    // backgroundColor: '#1c7ed6',
    textTransform: 'uppercase',
  },

  category: {
    color: theme.white,
    fontWeight: 600,
    fontSize: rem(16),
    textTransform: 'uppercase',
    letterSpacing: rem(6),
    // backgroundColor: '#1c7ed6',
  },

  button: {
    height: '10%',
    fontFamily: 'Open Sans, sans-serif',
    fontSize: rem(16),
    fontWeight: 500,
    letterSpacing: rem(4),
    lineHeight: '1.3333',
    color: 'white',
    backgroundColor: '#1c7ed6',
    textTransform: 'uppercase',
  },
}));

function Card({ image, title, category }) {
  const { classes } = useStyles();

  return (
    <Paper
      shadow="md"
      p="xl"
      radius="md"
      sx={{ backgroundImage: `url(${image})` }} 
      className={classes.card}
    >
      <div className={classes.content_button}>
        <Title order={3} className={classes.title}>
          <Text className={classes.category}>{category}</Text>
          {title}
        </Title>
      </div>
      {/* <Button variant="white" className={classes.button}>
        Shop Now!
      </Button> */}
    </Paper>
  );
}

const data = [
  {
    key: '1',
    image:"https://media.discordapp.net/attachments/1126046728156631072/1134929917709140068/blue-armchair-against-blue-wall-living-room-interior-elegant-interior-design-with-copy-space-ai-generative.jpg?width=993&height=662",
    title: 'New Arrival',
 },
  {
    key: '2',
    image: 'https://cdn.discordapp.com/attachments/1126046728156631072/1134935289492684840/Untitle222222-4.png',
    title: 'New Arrival',

  },
  {
    key: '3',
    image: 'https://cdn.discordapp.com/attachments/1126046728156631072/1134934016898908261/dsadsa.png',
    title: 'New Arrival',

  },
  {
    key: '4',
    image: 'https://cdn.discordapp.com/attachments/1126046728156631072/1134934519535915129/Untitled-4.png',
    title: 'New Arrival',

  },
];

export  function CardsCarousel() {
  const theme = useMantineTheme();
  const mobile = useMediaQuery(`(max-width: ${theme.breakpoints.sm})`);
  const slides = data.map((item) => (
    <Carousel.Slide key={item.key}>
      <Card {...item} />
    </Carousel.Slide>
  ));

  return (
    <Container size="xl">
      <Carousel
        slideSize="100%"
        breakpoints={[{ maxWidth: 'sm', slideSize: '100%', slideGap: rem(2) }]}
        slideGap="xl"
        align="start"
        slidesToScroll={mobile ? 1 : 1}
      >
        {slides}
      </Carousel>
    </Container>
  );
}

// Export the component if needed
// module.exports = { CardsCarousel };
