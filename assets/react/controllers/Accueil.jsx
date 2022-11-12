import React from 'react';
import styled from "styled-components";
import Icone from "../../../public/pic/icone/icone-easycook.png";
import Info from "../../../public/pic/icone/icons-info.png";
import { gsap } from "gsap";

//Responsive
    //Mobile
import mobileBack from "../../../public/pic/mobile/accueil/accueil-mobile.jpg";

    //Desktop
import desktopBack from "../../../public/pic/desk/accueil/accueil-desktop.jpg";



const Accueil = () => {
    gsap.set('.title, .icone-help', { });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.title, .icone-help', {
                opacity: 0,
            },
            {
                scrollTrigger: '.title, .icone-help',
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
                <li className="nav-2"><a href="www.google.com">Actu</a></li>
                <li className="nav-3" ><a href="#">Recettes</a></li>
                <li className="nav-4" ><a href="#">Recette au hasard</a></li>
                <li className="nav-5" ><a href="#">Connexion/Inscription</a></li>
            </Nav>
            <ModalInfo>
                <img className="icone-help" src={Info} alt="Icone info"/>
            </ModalInfo>
        </ReponsiveTemplate>
    )
};
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
  img {
    transition: all 0.6s ease-in-out;
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
