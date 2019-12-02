
let GameManager = {
  setgameStart: function(classType){
    this.showHero(classType);
    this.setPreFight();
  },
  showHero: function(classType){
    switch (classType) {
      case "Warrior":
        player = new Player(classType, 200, 15, 0);
        break;
    case "Archer":
      player = new Player(classType, 100, 20, 0);
      break;
    case "Druid":
      player = new Player(classType, 150, 8, 0);
      break;

    }
    let getInterface = document.querySelector(".interface");
    getInterface.innerHTML = '<img src="img/' + classType.toLowerCase() + '.jpg" class="img-avatar"><div><h3 class="testas">' + classType + '</h3><p class="health-player">Health: ' + player.health +'</p><p>Damage: ' + player.damage +'</p><p class="goldBar">Gold: ' + player.gold +'</p></div>';

  },

  setPreFight: function(){

    let getAction = document.querySelector(".Actions");
    let getArena = document.querySelector(".Arena");
    getAction.innerHTML = '<a href="#" onclick="GameManager.setFight()">Search for an enemy</a>';
    getArena.style.visibility = "visible";


  },

  setFight: function(){
    let getAction = document.querySelector(".Actions");
    let getEnemy = document.querySelector(".Enemy");



    let enemy00 = new Enemy("Goblin", 50, 5, Math.floor(Math.random() * Math.floor(100)));
    let enemy01 = new Enemy("Troll", 75, 9, Math.floor(Math.random() * Math.floor(100)));
    let chooseEnemy = Math.floor(Math.random() * Math.floor(2));

    switch (chooseEnemy) {
      case 0:
        enemy = enemy00;
        break;
      case 1:
        enemy = enemy01;
        break;
  }

  getAction.innerHTML = '<a href="#" class="btn-prefight" onclick="GameManager.Attack()">Attack</a>';
  getEnemy.innerHTML = '<img src="img/' + enemy.enemyType.toLowerCase() + '.jpg" ><div><h3>' + enemy.enemyType + '</h3><p class="health-enemy">Health:' + enemy.health + '</p><p>Damage:' + enemy.damage + '</p><p>Gold Drop: 0-100gold</p></div> ';

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
    let getGoldBar = document.querySelector(".goldBar");

    getEnemyHealth.innerHTML = '<p class="health-enemy">Health:' + enemy.health + '</p>';
    if (enemy.health <= 0)
    {
      player.gold += enemy.goldDrop;
      getGoldBar.innerHTML = '<p class="goldBar">Gold: ' + player.gold +'</p>';
      getEnemyHealth.innerHTML = '<p class="health-enemy">Health: 0</p>';
      alert("You won hero! You killed poor creature you wanker...");

    }
  }


  }
