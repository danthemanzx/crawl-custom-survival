---
permalink: /wiki
permalink: /wiki/
layout: wikiPage
---

# How to Play _(Minecraft Java Edition)_

This server features a custom game mode where "_**Heroes**_" must clear out dungeons while fighting monsters controlled by "_**Ghosts**_". Each dungeon has progressive levels with custom loot and bosses. Custom artifacts spawn on the final level that must be collected.

_**Ghosts**_  play in spectator mode with the ability to possess all mobs and monsters. Ghosts must kill a hero, in order to become a hero. Ghosts can unlock artifacts as well as spawn and upgrade monsters using experience levels.

_**Heroes**_  play in survival mode and must defeat dungeon levels in order to win. Heroes are able to purchase custom kits, items and enchantments using experience levels. Heroes are also able to craft custom spells.

<html><img align="center" src="https://camo.githubusercontent.com/ad5238f1e93274e0cc3fbd3918897ec3e4a8b8fec53d3d4277538b210d974007/687474703a2f2f7374617475732e6d636c6976652e65752f4d696e656372616674253230312e31362e342532304a61766125323045646974696f6e2f706c61792e637261776c2d737572766976616c2e636f6d2f32353536352f62616e6e65722e706e67"></html>

* * *

## Gamemode Commands

- **`/find [<player>]`** Teleport to other players. Leaving the argument blank fill open the GUI. Heroes can teleport to other Heroes but it will cost an ender pearl.
- **`/ghost`** Respawn as a Ghost in spectator mode.
- **`/help`** Opens up the Mine-Crawl in game GUI help menu
- **`/hero`** Respawn as a Hero at spawn (or bed) in survival mode.
- **`/premium`** Opens up in game premium GUI menu
- **`/spawn`** Teleports the player to spawn. Heroes have a cooldown.

## Hero Commands
Upon a Ghost killing a Hero: The Ghost will take the Heroes place and inventory. The slain Hero will become a Ghost.
Ghosts spawn in spectator mode and can possess mobs by (Right) clicking on them. Use a creatures ability by Sneaking and (Left) clicking.

- **`/bl [<list/reset>]`**  Allows selected items or blocks to be blacklisted from the players inventory, making it easier to manage.
  - Hold the item you wish to blacklist and type **`/blocklist`** Easy as that! To remove an item from the blocklist simply click on it!
  - List blacklisted items with **`/blocklist list`**
- **`/home`**  Teleports the players to their bed if it exists. Heroes must pay one ender pearl to use.
- **`/recipes`**  Lists craft able spell recipes for Heroes.

## Ghost Commands
If a ghost is able to kill a hero, they will take the hero's place and inventory and the fallen hero will re-spawn as ghost. Ghosts spawn in spectator mode and can possess mobs by **right clicking** on them. To use a mob's ability, **sneak whilst left clicking**. Ghosts can also spawn and upgrade monsters using experience levels via the artifacts menu.

- **`/artifacts`**  Opens up the Ghost artifacts in game GUI menu
- **`/view`**  Toggles the mob model display while disguised

* * *

![](https://www.crawl-survival.com/assets/Craftable+spells+++more.png)

Heroes can purchase 50+ custom items, kits, effects, artifacts, charms, and more by visiting the villager at spawn. Everything costs experience levels, so spend wisely! Charms have very unique effects and lore, most need to be equipped to the offhand slot to take effect. Heroes should also be on the look out for beds, anvils and brewing stands while going through dungeon levels. These are normally found on the first level. Ghosts are able to unlock and upgrade artifacts with unique monster bosses and more, likewise cost experience levels. To see more information regarding crafting recipes for spells, use the command `/recipes` while in game.

* * *

# Server Updates
<html>
<ul>
  {% for post in site.posts %}
    <br> {{ post }} <br>
  {% endfor %}
</ul>
</html>