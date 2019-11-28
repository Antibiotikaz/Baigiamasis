
let GameManager = {
  setgameStart: function(classType){
    this.showHero(classType);
    this.setPreFight();
  },
  showHero: function(classType){
    switch (classType) {
      case "Warrior":
        player = new Player(classType, 200, 15);
        break;
    case "Archer":
      player = new Player(classType, 100, 20);
      break;
    case "Druid":
      player = new Player(classType, 150, 8);
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
  getAction.innerHTML = '<a href="#" class="btn-prefight" onclick="GameManager.Attack()">Attack</a>';
  getEnemy.innerHTML = '<img src="img/' + enemy.enemyType.toLowerCase() + '.jpg" ><div><h3>' + enemy.enemyType + '</h3><p class="health-enemy">Health:' + enemy.health + '</p><p>Damage:' + enemy.damage + '</p></div> ';

    },
  Attack: function(){
    player.health -= enemy.damage;
    enemy.health -= player.damage;
    console.log(player.health);
    //WHen monster attacks
    let getHealth = document.querySelector(".health-player");
    getHealth.innerHTML = '<p class="health-player">Health: ' + player.health +'</p>';
    if (player.health  <= 0) {
      getHealth.innerHTML ='<p class="health-player">Health: 0</p>';
      alert("You are dead Hero! Go home...");
    }

    //When Hero attacks
    let getEnemyHealth =document.querySelector(".health-enemy");
    getEnemyHealth.innerHTML = '<p class="health-enemy">Health:' + enemy.health + '</p>';
    if (enemy.health <= 0)
    {
      getEnemyHealth.innerHTML = '<p class="health-enemy">Health: 0</p>';
      alert("You won hero! You killed poor creature you wanker...");
    }
  }


  }