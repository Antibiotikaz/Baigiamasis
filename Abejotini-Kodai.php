<!-- //Game manager
let GameManager = {
  setGameStart: function(classType){
    this.resetPlayer(classType);
    this.setPreFight();

  },
  resetPlayer: function(classType){
    switch (classType) {
      case "Warrior":
          player = new Player(classType, 200, 0, 200, 100, 50);
        break;
      case "Archer":
          player = new Player(classType, 100, 0, 100, 150, 200);
        break;
      case "Mage":
          player = new Player(classType, 80, 0, 50, 200, 50);
        break;
      case "Druid":
            player = new Player(classType, 200, 0, 50, 200, 100);
        break;
    }
    let getInterface = document.querySelector(".interface");
    getInterface.innerHTML = '<img src="img/' + classType.toLowerCase() + '.jpg" class="img-avatar"><div><h3>' + classType + '</h3><p class="health-player">Health: ' + player.health +'</p><p>Mana: ' + player.mana +'</p><p>Strength: ' + player.strength +'</p><p>Agility: ' + player.agility +'</p><p>Speed: ' + player.speed +'</p></div>';
  },
  setPreFight: function(){
let getHeader = document.querySelector(".header");
let getAction = document.querySelector(".Actions");
let getArena = document.querySelector(".Arena");

getHeader.innerHTML = '<p>Task: Find an enemy!</p>';
getAction.innerHTML = '<a href="#" class="btn-prefight" onclick="GameManager.setFight()">Search for an enemy</a>';
getArena.style.visibility = "visible";

},

setFight: function(){
  let getHeader = document.querySelector(".header");
  let getAction = document.querySelector(".Actions");
  let getEnemy = document.querySelector(".Enemy");
  // Create Enemy!
  let enemy00 = new Enemy("Goblin", 100, 0, 50, 100, 100);
  let enemy01 = new Enemy("Troll", 200, 0, 150, 80, 150);
  let chooseRandomEnemy = Math.floor(Math.random() * Math.floor(2));
  switch (chooseRandomEnemy) {
    case 0:
      enemy = enemy00;
      break;
    case 1:
      enemy = enemy01;
      break;
  }
  getHeader.innerHTML = '<p>Choose your move</p>';
  getAction.innerHTML = '<a href="#" class="btn-prefight" onclick="PlayerMoves.calcAttack()">Attack</a>';
  getEnemy.innerHTML = '<img src="img/' + enemy.enemyType.toLowerCase() + '.jpg" alt="' + enemy.enemyType + '" class= "img-avatar"><div><h3>' + enemy.enemyType + '</h3><p class="health-enemy">Health:' + enemy.health + '</p><p>Mana:' + enemy.mana + '</p><p >Strength:' + enemy.strength + '</p><p>Agility:' + enemy.agility + '</p><p>Speed:' + enemy.speed + '</p></div> ';
}
}

//////////////////////////////////////////////////////////////////////////
//Player

let player;

function Player(classType, health, mana, strength, agility, speed){
  this.classType = classType;
  this.health = health;
  this.mana = mana;
  this.strength = strength;
  this.agility = agility;
  this.speed = speed;

  }



let PlayerMoves = {
  calcAttack: function(){
    //Who attacks first?
    let getPlayerSpeed = player.speed;
    let getEnemySpeed = enemy.speed;
    // Player attacks
      let playerAttack = function () {
        let calcBaseDamage;
        if (player.mana > 0) {
          calcBaseDamage = player.strength * player.mana / 1000;
        }else {
          calcBaseDamage = player.strength * player.agility / 1000;
        }
        let offsetDamage = Math.floor(Math.random() * Math.floor(10));
        let calcOutPutDamage = calcBaseDamage + offsetDamage;
        // Number of Hits
        let numberOfHits = Math.floor(Math.random() * Math.floor(player.agility / 10) / 2) + 1;
        let attackValues = [calcOutPutDamage, numberOfHits];
        return attackValues;
      }

      // Enemy attacks
        let enemyAttack = function () {
          let calcBaseDamage;
          if (enemy.mana > 0) {
            calcBaseDamage = enemy.strength * enemy.mana / 1000;
          }else {
            calcBaseDamage = enemy.strength * enemy.agility / 1000;
          }
          let offsetDamage = Math.florr(Math.random() * Math.floor(10));
          let calcOutPutDamage = calcBaseDamage + offsetDamage;
          // Number of Hits
          let numberOfHits = Math.florr(Math.random() * Math.floor(enemy.agility / 10) / 2) + 1;
          let attackValues = [calcOutPutDamage, numberOfHits];
          return attackValues;
        }
    //Get Player - Enemy health to change later!
        let getPlayerHealth = document.querySelector(".health-player");
        let getEnemyHealth = document.querySelector(".health-enemy");
        //Initiate attacks!
        if (getPlayerSpeed >= getEnemySpeed) {
          let playerAttackValues = playerAttack();
          let totalDamage = playerAttackValues[0] * playerAttackValues[1];
          enemy.health = enemy.health - totalDamage;
          alert("You hit" + playerAttackValues[0] + " damage" + playerAttackValues[1] + "times.");
          if (enemy.health <= 0) {
            alert("You win!Refresh browser to play again");
            getPlayerHealth.innerHTML = 'Health: 0' + player.health;
            getEnemyHealth.innerHTML = 'Health: 0';

          } else {
            getEnemyHealth.innerHTML = 'Health: 0' + enemy.health;
            //Enemy attacks
            let enemyAttackValues = enemyAttack();
            let totalDamage = enemyAttackValues[0] * enemyAttackValues[1];
            player.health = player.health - totalDamage;
            alert("Enemy hit" + enemyAttackValues[0] + " damage" + enemyAttackValues[1] + "times.");
            if (player.health <= 0) {
              alert("You lost!Refresh browser to play again");
              getPlayerHealth.innerHTML = 'Health: 0';
              getEnemyHealth.innerHTML = 'Health: ' + enemy.health;
          } else {
            getPlayerHealth.innerHTML = 'Health: ' + player.health;
          }
        }
  }

}
}

////////////////////////////////////////////////////////////////////////////////////////
//ENEMY



let enemy;

function Enemy(enemyType, health, mana, strength, agility, speed){
  this.enemyType = enemyType;
  this.health = health;
  this.mana = mana;
  this.strength = strength;
  this.agility = agility;
  this.speed = speed;

  } -->
