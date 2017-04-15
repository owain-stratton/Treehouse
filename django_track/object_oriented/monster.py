import random

from combat import Combat

COLORS = ["yellow", "red", "blue", "green"]

class Monster(Combat):
    min_hp = 1
    max_hp = 1
    min_xp = 1
    max_xp = 1
    weapon = "sword"
    sound = "roar"

    def __init__(self, **kwargs):
        self.hp = random.randint(self.max_hp, self.max_hp)
        self.xp = random.randint(self.min_xp, self.max_xp)
        self.color = random.choice(COLORS)

        for key, value in kwargs.items():
            setattr(self, key, value)

        # self.hit_points = kwargs.get("hit_points", 1)
        # self.color = kwargs.get("color", "yellow")
        # self.weapon = kwargs.get("weapon", "sword")
        # self.sound = kwargs.get("sound", "roar")
    
    def __str__(self):
        return "{} {}, HP: {}, XP: {}".format(self.color.title(),
                                            self.__class__.__name__,
                                            self.hp,
                                            self.xp)
    

    def battle_cry(self):
        return self.sound.upper()



# Passing Monster class to Goblin class extends the Monster class
# Goblin == subclass of Monster
class Goblin(Monster):
    max_hp = 3
    max_xp = 2
    sound = "squeek"







troll = Monster(hp=500)
troll.hp

azog = Goblin()
azog.hp
