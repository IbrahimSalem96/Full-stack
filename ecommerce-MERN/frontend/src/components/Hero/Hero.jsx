import React from 'react';
import { createStyles, rem, em, Box } from '@mantine/core';
import { Link } from 'react-router-dom';
import "./Hero.css"

const useStyles = createStyles((theme) => ({
  inner: {
    display: 'flex',
    justifyContent: 'space-between',
    paddingBottom: `calc(${theme.spacing.xl})`,
    // Static media query
    [`@media (max-width: ${em(800)})`]: {
      flexDirection: "column"
    },
  },


  content: {
    maxWidth: rem(480),
    marginRight: `calc(${theme.spacing.xl} * 2)`,
  },

  title: {
    fontFamily: `Greycliff CF, ${theme.fontFamily}`,
    fontSize: rem(44),
    lineHeight: 1.2,
    fontWeight: 500,
    // Static media query
    [`@media (max-width: ${em(800)})`]: {
      right: "0",
      left:"9px"
    },
  },

  image: {
    width: '62vw',
    height: '100%',
    // Static media query
    [`@media (max-width: ${em(800)})`]: {
      width: "100%"
    },
  },

  secondImage: {
    // Static media query
    [`@media (max-width: ${em(800)})`]: {
      display: "none"
    },
  }



}));




export default function Hero() {
  const { classes } = useStyles();
  return (
    <div>
      <div className={classes.inner}>
        <img
          src="https://onea.qodeinteractive.com/wp-content/uploads/2018/09/furniture-h-slider-1.jpg"
          className={classes.image}
        />
        <div className={classes.content}>
          <div style={{ display: 'flex', flexDirection: 'column' }}>
            <h1  className={classes.title}
              style={{
                display: 'flex',
                justifyContent: 'flex-start',
                fontFamily: 'monospace',
                fontWeight: 500,
                position: 'relative',
                right: '4rem',
                top: '6rem',
                fontSize: '20px',
              }}
             
            >
              NEW COLLECTION
            </h1>
            <h1
              style={{
                display: 'flex',
                justifyContent: 'flex-start',
                fontFamily: 'sans-serif',
                fontWeight: 800,
                position: 'relative',
                right: '4rem',
                top: '3rem',
                fontSize: '50px',
                width: '35vw',
              }}
              className={classes.title}

            >
              BEST SELLING PRODUCTS
            </h1>
            <h4
              style={{
                color: 'grey',
                marginLeft: '15px',
                fontWeight: 500,
                fontFamily: 'sans-serif',

              }}
            >
              We believe that your home should be a sanctuary of style, functionality, and relaxation. Our
              mission is to provide you with an unparalleled selection of modern furniture that not only
              adds a touch of elegance to your living spaces but also ensures utmost comfort.
            </h4>
          </div>
        </div>
      </div>

      <div className={classes.inner}>
        <div className={classes.content}>
          <div style={{ display: 'flex', flexDirection: 'column' }} >
            <img src="https://bidsanddibs.com/wp-content/uploads/2018/10/furniture-h-img-1.jpg" alt="Blue armchair" className={classes.secondImage} />
          </div>
        </div>
        <div>
          <img
            src="https://onea.qodeinteractive.com/wp-content/uploads/2018/09/h-4-img-2.jpg"
            className={classes.image}
          />
          <div
            style={{
              display: 'flex',
              flexDirection: 'column',
              justifyContent: 'center',
              position: 'relative',
              bottom: '12rem',
              fontFamily: 'sans-serif',
              color: 'white',
            }}
          >
            <h1 style={{ display: 'flex', justifyContent: 'center', fontSize: '2.5rem', margin: '0' }}>Modern Design</h1>
            <Link to="/products" style={{ display: 'flex', justifyContent: 'center', fontSize: '12px', color: 'white' }}>
              See Whole Collection
            </Link>
          </div>
        </div>
      </div>

      <div className={classes.inner}>
        <div>
          <img
            src="https://onea.qodeinteractive.com/wp-content/uploads/2018/09/h-4-img-3-768x514.jpg"
            className={classes.image}
          />
          <div
            style={{
              display: 'flex',
              flexDirection: 'column',
              position: 'relative',
              bottom: '15rem',
              right: '4rem',
              fontFamily: 'sans-serif',
              color: 'white',
            }}
          >
            <h1 style={{ display: 'flex', justifyContent: 'flex-end', color: 'white', fontSize: '2.5rem', margin: '0' }}>
              Wooden Magic
            </h1>
            <Link to="/products" style={{ display: 'flex', justifyContent: 'flex-end', fontSize: '12px', color: 'white' }}>
              See Whole Collection
            </Link>
          </div>
        </div>
        <div className={classes.content}>
          <div style={{ display: 'flex', flexDirection: 'column' }}>
            <img src="https://onea.qodeinteractive.com/wp-content/uploads/2018/10/furniture-h-img-2.jpg" className={classes.secondImage} />
           
          </div>
        </div>
      </div>
    </div>
  );
}
