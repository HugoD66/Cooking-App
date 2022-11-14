import React from 'react';
import styled from "styled-components";
import Icone from "../../../public/pic/icone/icone-easycook.png";
import Info from "../../../public/pic/icone/icons-info.png";
import { gsap } from "gsap";
import {forwardRef, useImperativeHandle, useRef, useState} from "react";
import {motion, AnimatePresence} from "framer-motion";

//Responsive
    //Mobile
import mobileBack from "../../../public/pic/mobile/accueil/accueil-mobile.jpg";

    //Desktop
import desktopBack from "../../../public/pic/desk/accueil/accueil-desktop.jpg";



const Accueil = (props) => {
//Modal Connexion Inscription
    const modalConnexion = useRef();
    const modalInfo = useRef();

    const Modal = forwardRef((props, ref) => {
        const [open, setOpen] = useState(false);

        useImperativeHandle(
            ref,
            () => {
                return {
                    open: () => setOpen(true),
                    close: () => setOpen(false)
                }
            })

        return (
            <AnimatePresence>
                {open && <motion.div
                    initial={{
                        opacity:0
                    }}
                    animate={{
                        opacity:1,
                        transition: {
                            duration: 0.3
                        }
                    }}
                    exit={{
                        opacity: 0,
                        transition: {
                            duration: 0.4
                        }
                    }}
                    onClick={() => setOpen(false)}
                    className="modal-backdrop">
                    <motion.div
                        initial={{
                            scale: 0
                        }}
                        animate={{
                            scale: 1,
                            transition: {
                                duration: 0.5
                            }
                        }}
                        exit={{
                            scale: 0,
                            transition: {
                                delay: 0.3
                            }
                        }}
                        className="modal-content-wrapper">
                        <motion.div
                            className="modal-content"
                            initial={{
                                x: 80,
                                opacity: 0
                            }}
                            animate={{
                                x: 0,
                                opacity: 1,
                                transition: {
                                    delay: 0.3,
                                    duration: 1
                                }
                            }}
                            exit={{
                                x: 100,
                                opacity: 0,
                                transition: {
                                    duration: 0.3
                                }
                            }}
                        >
                            {props.children}
                        </motion.div>
                    </motion.div>
                </motion.div>}
            </AnimatePresence>
        );
    })

//Animations
    gsap.set('.icone-help', { });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.icone-help', {
                opacity: 0,
            },
            {
                scrollTrigger: '.icone-help',
                duration: 0.7,
                delay: 0.7,
                opacity: 1,
                webkitFilter:"blur( 0px)",
            }
        );
    }, 1);
    gsap.set('.title', { });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.title', {
                opacity: 0,
            },
            {
                scrollTrigger: '.title',
                duration: 1,
                delay: 1.5,
                opacity: 1,
                webkitFilter:"blur( 0px)",
            }
        );
    }, 1);
    gsap.set('.nav-2', {  });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.nav-2', {
                opacity: 0,
                x: -100,
            },
            {
                x: 0,
                scrollTrigger: '.nav-2',
                duration: 1.7,
                delay: 0.8,
                opacity: 1,
            }
        );
    }, 1);
    gsap.set('.nav-3', {  });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.nav-3', {
                opacity: 0,
                x: -100,
            },
            {
                x: 0,
                scrollTrigger: '.nav-3',
                duration: 1.7,
                delay: 0.6,
                opacity: 1,
            }
        );
    }, 1);
    gsap.set('.nav-4', {  });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.nav-4', {
                opacity: 0,
                x: -100,
            },
            {
                x: 0,
                scrollTrigger: '.nav-4',
                duration: 1.7,
                delay: 0.4,
                opacity: 1,
            }
        );
    }, 1);
    gsap.set('.nav-5', {  });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.nav-5', {
                opacity: 0,
                x: -100,
            },
            {
                x: 0,
                scrollTrigger: '.nav-5',
                duration: 1.7,
                delay: 0.2,
                opacity: 1,
            }
        );
    }, 1);


    return (
        <ReponsiveTemplate>
            <img src={Icone} className="icone-pasta"  alt="Icone de l'application"/>
            <TemplateAccueil />
            <h1 className="title"> PastEasy </h1>
            <Nav>
                <li className="nav-2"><a href="/PastEasy-Accueil">Accueil</a></li>
                <li className="nav-3" ><a href="/PastEasy-Recettes">Nos recettes</a></li>
                <li className="nav-4" ><a href="/PastEasy-Recette-Aleatoire">Recette au hasard</a></li>
                <li className="nav-5" onClick={() => modalConnexion.current.open()}><a href="#">Connexion/Inscription</a></li>
            </Nav>
            <ModalInfo>
                <img className="icone-help" src={Info} alt="Icone info"  onClick={() => modalInfo.current.open()}/>
            </ModalInfo>
{/* Modal Connexion */}
            <ModalCustom>
                <Modal ref={modalConnexion}>
                    <ModalTitleAndLogo>
                        <img src={Icone} alt=""/>
                    </ModalTitleAndLogo>
                    <div className="connec-regist">
                        <div className="button-list">
                            <h2>Se Connecter</h2>
                            <button type="button">
                                <a href="/PastEasy-Connexion">
                                    Connexion
                                </a>
                            </button>
                        </div>
                        <span className="vertical-line"></span>

                        <div className="button-list">
                            <h2>Nous Rejoindre</h2>
                            <button type="button">
                                <a href="/PastEasy-Enregistrement">
                                    Inscription
                                </a>
                            </button>
                        </div>
                    </div>
                </Modal>
            </ModalCustom>
{/* Modal Information */}
            <ModalCustom>
                <Modal ref={modalInfo}>
                    <ModalTitleAndLogo>
                        <h2>Comment faire</h2>
                        <img src={Icone} alt=""/>
                    </ModalTitleAndLogo>
                    <p>Veuillez .....Veuillez .....Veuillez .....Veuillez .....Veuillez .....Veuillez .....Veuillez .....Veuillez .....Veuillez .....</p>
                </Modal>
            </ModalCustom>
        </ReponsiveTemplate>


    )
};

const ModalCustom = styled.div`
  .modal-content-wrapper {
    height: 50%;
  }
  .modal-backdrop {
    position: fixed;
    height: 100vh;
    top: 0;
    left: 0;
    background: rgba(86, 83, 83, 0.43);
  }
  .modal-content-wrapper {
    position: fixed;
    width: 75%;
    background: white;
    margin: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px;
    border-radius: 15px;
  }
  .connec-regist {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    flex-direction: row;
    width: 100%;
    height: 20em;
    border: 1px solid black;
    .button-list {
        width: 50%; 
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
    .vertical-line{
      border-left: 2px solid #000;
      display: inline-block;
      height: 130px;
    }
  }
`;
const ModalTitleAndLogo = styled.div`
  display: flex;
  justify-content: space-around;
  align-items: center;
  max-height: 20%;
  h1 {
    color: #343434;
    font-size: 1.4em;
    text-decoration: underline 1px solid rgba(5, 13, 11, 0.82);
  }
  h2 {
    color: black;
  }
  img {
    max-width: 20%;
    margin-left: 70%;
    @media (min-width: 1500px) {
      max-width: 5%;
    }
  }
`;
const ReponsiveTemplate = styled.div`
  h1 {
    position: absolute;
    text-align: center;
    top: 15%;
    color: white;
    width: 100%;
    font-size: 8em;
    font-family: 'Mate', serif;
    text-shadow: 2px 0 #353535, -2px 0 #353535, 0 2px #353535, 0 -2px #353535,
    1px 1px #353535, -1px -1px #353535, 1px -1px #353535, -1px 1px #353535;
    filter: blur(4px);
    @media (min-width: 1200px) {
      letter-spacing: 0.4em;
    }
  }
  .icone-pasta {
    position: absolute;
    top: 5%;
    left: 5%;
    background-color: rgba(240, 237, 237, 0.41);
    border-radius: 90%;
    z-index: 1;
  }
`;
const TemplateAccueil= styled.div`
  width: 100%;
  height: 100vh;
  margin: auto;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  clear: both;
  overflow-x: hidden;
  overflow-y: hidden;
  position: relative;
  background-image: url(${mobileBack});
  @media (min-width: 1200px) {
    background-image: url(${desktopBack});
  }
`;
const Nav = styled.ul`
  position: absolute;
  bottom: 10%;
  left: 10%;
  li {
    list-style: none;
    font-weight: bolder;
    text-shadow: 2px 0 #353535, -2px 0 #353535, 0 2px #353535, 0 -2px #353535,
    1px 1px #353535, -1px -1px #353535, 1px -1px #353535, -1px 1px #353535;
    &:hover {
      text-decoration: underline solid 1px blanchedalmond;
      text-underline-position: under;
    }
  }
  a{
    text-decoration: none;
    font-size: 2.2em;
    color: white;
    line-height: 3.5em;
    
  }
`;
const ModalInfo = styled.div`
  position: absolute;
  bottom: 10%;
  right: 5%;
  background-color: rgba(240, 237, 237, 0.41);
  border-radius: 90%;
  cursor: pointer;
  img {
    transition: all 0.6s ease-in-out;
    filter: blur(6px);

    &:hover {
      transform: scale(1.3);
      transition: all 0.6s ease-in-out;
    }
    @media (min-width: 1200px) {
      width: 10em;
    }
  }
`;
export default Accueil;
