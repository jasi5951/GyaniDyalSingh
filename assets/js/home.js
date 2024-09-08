backgroundpicture = document.getElementById("hero");
randomint = Math.floor(Math.random() * 2);
if (window.innerWidth > 750) {
  if (randomint == 0) {
    backgroundpicture.style.background = 'linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("assets/img/HomePagePic.jpeg") left';
    backgroundpicture.style.backgroundSize = 'cover';
  } else {
    backgroundpicture.style.background = 'linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("assets/img/gsd2 gyaniji1.JPG") no-repeat fixed';
    backgroundpicture.style.backgroundSize = 'cover';
  }
} else {
  backgroundpicture.style.background = 'linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("assets/img/DyalSingh.jpg") center';
  backgroundpicture.style.backgroundSize = 'cover';
}