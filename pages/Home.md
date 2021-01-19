---
permalink: /wiki
permalink: /wiki/
layout: wikiPage
---

{% include_relative _Sidebar.md %}

* * *

### How to Play _(Minecraft 1.16.4 Java Edition)_

This server features a custom game mode similar to manhunt where players (_**Heroes**_) must clear out dungeons while fighting monsters controlled by other players (_**Ghosts**_). Each dungeon has progressive levels with custom loot and bosses.

Players must play as either a _**Hero**_ or _**Ghost**_. _**Ghosts**_ play in spectator mode with the ability to control mobs/monsters. _Ghosts_ must kill a Hero, in order to become a Hero. _Ghosts_ can unlock artifacts as well as spawn and upgrade monsters using experience levels.

_**Heroes**_ play in survival mode and must defeat dungeon levels in order to win. _Heroes_ are able to purchase custom kits, items and enchantments using experience levels. Heroes are also able to craft custom spells. Learn more at the server wiki page.

* * *

### Gamemode Commands

- `/ghost` Respawn as a Ghost in spectator mode.
- `/help` Opens up the Mine-Crawl in game GUI help menu
- `/hero` Respawn as a Hero at spawn (or bed) in survival mode.
- `/premium` Opens up in game premium GUI menu

### Teleportation Commands

- `/spawn` Teleports the player to spawn. Heroes have a cooldown.
- `/find` Teleport to Heroes. Heroes can teleport to other Heroes but it will cost an ender pearl.

### Hero Commands
Upon a Ghost killing a Hero: The Ghost will take the Heroes place and inventory. The slain Hero will become a Ghost.
Ghosts spawn in spectator mode and can possess mobs by (Right) clicking on them. Use a creatures ability by Sneaking and (Left) clicking.

- `/bl [<list/reset>]` Allows selected items or blocks to be blacklisted from the players inventory, making it easier to manage.
- - Hold the item you wish to blacklist and type `/blocklist` Easy as that! To remove an item from the blocklist simply click on it!
- - List blacklisted items with `/blocklist list`.
- `/home` Teleports the players to their bed if it exists. Heroes must pay one ender pearl to use.
- `/recipes` Lists craft able spell recipes for Heroes.

### Ghost Commands
If a Hero dies they will respawn as a Ghost in spectator mode that can possess mobs/monsters.
Heroes must make it to The End to slay the Ender Dragon by collecting enough artifacts inside the dungeons.
Heroes are able to purchase custom weapons and more at the shop using experience levels

- `/artifacts` Opens up the Ghost artifacts in game GUI menu
- `/view` Toggles the mob model display while disguised

* * *

![](https://www.crawl-survival.com/assets/Custom+artifacts+&+items.png)

Heroes can purchase 50+ custom items, kits, effects, and more in the store. Everything costs experience levels, so spend wisely.

Ghosts can spawn monster bosses and upgrade them using artifacts that cost experience levels. The Artifacts menu can be found in /shop in the top left corner

* * *

![](https://www.crawl-survival.com/assets/Using+craftable+spells.png)

Heroes can craft custom spells using raw materials bound with paper or books. Pull up the crafting recipes in game using the **/recipes** command. Once a spell is crafted, right click whilst in your hand to activate.

* * *

# Server Status

![](https://camo.githubusercontent.com/5032f4f77c432e23d79f3f3cc30d35cbaa7438a76efda32f89997e6a975fcc08/687474703a2f2f7374617475732e6d636c6976652e65752f4d696e656372616674253230312e31362e332532304a61766125323045646974696f6e2f706c61792e637261776c2d737572766976616c2e636f6d2f32353536352f62616e6e65722e706e67?raw=true)

* * *

# Server Updates
<html>
<ul>
  {% for post in site.posts %}
    <hr><br> {{ post }} <br>
  {% endfor %}
</ul>
</html>