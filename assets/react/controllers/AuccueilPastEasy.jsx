import React from 'react';
import styled from "styled-components";
import AccueilPicture from "../../../public/pic/desk/accueil/accueil-pasteasy.png";
import { gsap } from "gsap";
import PateAccueil from "../../../public/pic/desk/accueil/pate-accueil.png"


function AuccueilPastEasy() {

    gsap.set('.animate-subtitle', { });
    setTimeout(() => {
        window.open.tween = gsap.fromTo('.animate-subtitle', {
                opacity: 0,
                x: -100,
            },
            {
                x: 0,
                scrollTrigger: '.animate-subtitle',
                duration: 0.7,
                delay: 0.7,
                opacity: 1,
                webkitFilter:"blur( 0px)",
            }
        );
    }, 1);

    return (
        <TemplateAccueil>
                <TitrePrincipal>
                    <div className="custom-title">
                        <h1>
                            Pasteasy,
                        </h1>
                        <h2>
                            Les mains dans la pâte
                        </h2>
                        <p className="animate-subtitle">
                            Fruitcake fruitcake cheesecake tootsie roll wafer jelly cake muffin oat cake. Jelly-o apple
                        </p>
                    </div>
                    <img className="pictureOne" src={AccueilPicture} alt="Accueil illustration"/>
                    <img className="pictureTwo" src={PateAccueil} alt="Accueil illustration"/>
                </TitrePrincipal>
        </TemplateAccueil>
    );
}
const TemplateAccueil = styled.div`
  position: relative;
  display: flex;
  flex-direction: column;
  z-index: -1;
  width: 100%;
  top: 15%;
  max-width: 100%;
`;
const TitrePrincipal = styled.div`
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: auto;
  flex-direction: row;
  .custom-title {
    display: flex;
    align-items: start;
    justify-content: center;
    margin: auto;
    flex-direction: column;
    text-align: start;
    margin-left: 15%;
    h1 {
      font-size: 10em;
      font-family: 'Roboto Slab', serif;
      text-shadow: -2px -2px 7px rgba(0,0,0,0.39);
    }
    h2 {
      font-size: 4em;
      margin-top: 5%;
      font-family:  'Lato', sans-serif;
      text-shadow: -2px -2px 7px rgba(0,0,0,0.39);
    }
    p {
      margin-top: 8%;
      font-size: 1.5em;
      font-family:  'Lato', sans-serif;
      text-shadow: -1px -1px 5px rgba(0,0,0,0.39);
    }
  }
  .pictureOne {
    width: 37%;
    z-index: -1;
    margin-right: 10%;
    margin-top: 2%;
  }
  .pictureTwo {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 40%;
    z-index: -1;

  }
`;


export default AuccueilPastEasy;
