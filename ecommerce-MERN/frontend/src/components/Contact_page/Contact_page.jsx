import "./style.css";
import React, { useRef, useState } from 'react';
import emailjs from '@emailjs/browser';
import { ToastContainer, toast } from 'react-toastify'


function Contact_page() {
  const formRef = useRef();
  const [form, setForm] = useState({
    user_name: "",
    user_email: "",
    subject: "",
    message: "",
  });

  const [loading, setLoading] = useState(false);

  const handleChange = (e) => {
    const { name, value } = e.target;

    setForm({
      ...form,
      [name]: value,
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    setLoading(true);

    emailjs
      .sendForm("service_8t122pr", "template_pd4mc8i", formRef.current, "v21qQrRPppkQMBeJz")
      .then(
        (result) => {
          console.log(result.text);
          setLoading(false);
          setForm({
            user_name: "",
            user_email: "",
            subject: "",
            message: "",
          });


          toast.success('Email has been sent', {
            position: "bottom-left",
            autoClose: 5000,
            hideProgressBar: false,
            closeOnClick: true,
            pauseOnHover: true,
            draggable: true,
            progress: undefined,
            theme: "colored",
          });
        },
        (error) => {
          console.log(error.text);
          setLoading(false);
        }
      );
  };

  return (
    <div className="containerr">
      <ToastContainer
        position="top-right"
        autoClose={5000}
        hideProgressBar={false}
        newestOnTop={false}
        closeOnClick
        rtl={false}
        pauseOnFocusLoss
        draggable
        pauseOnHover
        theme="light"
      />
      <div className="contact">
        <div className="text">
          <span>CONTACT</span>
          <h1>Let’s stay connected</h1>
          <p>
            Call us, use our live chat widget or email and we'll get back to you
            as soon as possible!
          </p>
        </div>
      </div>
      <div className="icons">
        <div className="section">
          <div className="icon-info">
            <img src="email.png" alt="" />
            <h3>Email</h3>
            <p>brahimsalemtest@gmail.com</p>
          </div>
          <div className="icon-info">
            <img src="phone.png" alt="" />
            <h3>Phone</h3>
            <p>+962 7 9661 8504</p>
          </div>
        </div>
        <div className="section2">
          <div className="icon-info">
            <img src="Location.png" alt="" />
            <h3>Location</h3>
            <p>Jordan, Amman</p>
          </div>
          <div className="icon-info">
            <img src="socials.png" alt="" />
            <h3>Socials</h3>
            <p className="imgs">
              <a href="">
                <img src="Facebook.png" width="25px" />{" "}
              </a>
              <a href="">
                <img src="Twitter.png" width="25px" />{" "}
              </a>
              <a href="">
                <img src="Instagram.png" width="25px" />{" "}
              </a>
              <a href="">
                <img src="LinkedIn.png" width="25px" />{" "}
              </a>
            </p>
          </div>
        </div>
        <div className="form">
          <form ref={formRef} onSubmit={handleSubmit}>
            <label>Name </label>
            <input
              type="text"
              name="user_name"
              placeholder="username"
              className="username"
              value={form.user_name}
              onChange={handleChange}
            />

            <label>Email </label>
            <input
              type="email"
              name="user_email"
              className="email"
              placeholder="Ab@gmail.com"
              value={form.user_email}
              onChange={handleChange}
            />

            <label>Subject </label>
            <input
              type="text"
              name="subject"
              className="subject"
              placeholder="Request"
              value={form.subject}
              onChange={handleChange}
            />

            <label>Message </label>
            <input
              type="text"
              name="message"
              className="message"
              placeholder="Your Message .."
              value={form.message}
              onChange={handleChange}
              required
            />
            <button>Send Message</button>
          </form>
        </div>
      </div>
    </div>
  );
}

export default Contact_page;
