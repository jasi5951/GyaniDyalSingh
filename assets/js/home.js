backgroundpicture = document.getElementById("hero");
randomint = Math.floor(Math.random() * 2);
if (window.innerWidth > 750) {
  if (randomint == 0) {
    backgroundpicture.style.background = 'linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("assets/img/PricipalDayalSingh.png")';
    backgroundpicture.style.backgroundSize = 'cover';
  } else {
    backgroundpicture.style.background = 'linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("assets/img/PricipalDayalSingh.png")';
    backgroundpicture.style.backgroundSize = 'cover';
  }
} else {
  backgroundpicture.style.background = 'linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("assets/img/DyalSingh.jpg") center';
  backgroundpicture.style.backgroundSize = 'cover';
}