
let GameManager = {
  setgameStart: function(classType){
    this.showHero(classType);
  },
  showHero: function(classType){
    switch (classType) {
      case "Warrior":
        player = new Player(classType, 200, 50);
        break;
    case "Archer":
      player = new Player(classType, 100, 100);
      break;

    }
    let getInterface = document.querySelector(".interface");
    getInterface.innerHTML = '<img src="img/' + classType.toLowerCase() + '.jpg" class="img-avatar"><div><h3>' + classType + '</h3><p class="health-player">Health: ' + player.health +'</p><p>Damage: ' + player.damage +'</p></div>';
  }
}
