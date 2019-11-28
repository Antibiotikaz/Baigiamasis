
let GameManager = {
  setgameStart: function(classType){
    this.showHero(classType);
    this.setPreFight();
  },
  showHero: function(classType){
    switch (classType) {
      case "Warrior":
        player = new Player(classType, 200, 50);
        break;
    case "Archer":
      player = new Player(classType, 100, 100);
      break;
    case "Druid":
      player = new Player(classType, 150, 99);
      break;

    }
    let getInterface = document.querySelector(".interface");
    getInterface.innerHTML = '<img src="img/' + classType.toLowerCase() + '.jpg" class="img-avatar"><div><h3>' + classType + '</h3><p class="health-player">Health: ' + player.health +'</p><p>Damage: ' + player.damage +'</p></div>';
  },

  setPreFight: function(){
    let getHeader = document.querySelector(".header");
    let getAction = document.querySelector(".Actions");
    let getArena = document.querySelector(".Arena");

    getHeader.innerHTML = '<p>Find an enemy</p>';
    getAction.innerHTML = '<a href="#" onclick="GameManager.setFight()">Search for an enemy</a>';
    getArena.style.visibility = "visible";


  },

  setFight: function(){
    let getHeader = document.querySelector(".header");
    let getAction = document.querySelector(".Actions");
    let getEnemy = document.querySelector(".Enemy");



    let enemy00 = new Enemy("Goblin", 50, 5);
    let enemy01 = new Enemy("Troll", 75, 9);
    let chooseEnemy = Math.floor(Math.random() * Math.floor(2));

    switch (chooseEnemy) {
      case 0:
        enemy = enemy00;
        break;
      case 1:
        enemy = enemy01;
        break;
  }

  getHeader.innerHTML = '<p>Choose your move</p>';
  getAction.innerHTML = '<a href="#" class="btn-prefight">Attack</a>';
  getEnemy.innerHTML = '<img src="img/' + enemy.enemyType.toLowerCase() + '.jpg" ><div><h3>' + enemy.enemyType + '</h3><p class="health-enemy">Health:' + enemy.health + '</p><p>Damage:' + enemy.damage + '</p></div> ';




    }
  }
