import sys
from character import Character
from monster import Dragon, Troll, Goblin


class Game:
    def setup(self):
        self.player = Character()
        self.monsters = [
            Goblin(),
            Troll(),
            Dragon()
        ]
        self.monster = self.get_next_monster()
    


    def get_next_monster(self):
        try:
            return self.monsters.pop(0)
        except IndexError:
            return None
    


    def player_hit(self):
        self.player.hp -= 1



    def monster_turn(self):
        if self.monster.attack():
            print("{} is attacking!!".format(self.monster))

            if input("Dodge? Y/N ").lower() == 'y':
                if self.player.dodge():
                    print("Like a graceful elf you dodged the attack!!")
                else:
                    print("Ahhhhh you took a beating!")
                    self.player_hit()
            else:
                print("{} hit you for 1 point!".format(self.monster))
                self.player_hit()
        else:
            print("{} isn't attacking this turn.".format(self.monster))



    def player_turn(self):
        player_choice = input ("[A]ttack, [R]est, [Q]uit? ".lower())

        if player_choice == "a":
            print("You're attacking, go forth and conquer {}!".format(self.monster))

            if self.player.attack():
                if self.monster.dodge():
                    print("The sneaky {} dodged your attack!".format(self.monster))
                else:
                    if self.player.leveled_up():
                        self.monster.hp -= 2
                    else:
                        self.monster.hp -= 1
                
                print("You hit {} with your {}!".format(self.monster, self.player.weapon))
            else:
                print("You missed!")

        elif player_choice == "r":
            self.player.rest()
        elif player_choice == "q":
            sys.exit()
        else:
            self.player_turn()



    def clean_up(self):
        if self.monster.hp <= 0:
            self.player.xp += self.monster.xp
            print("You annihilated {}!".format(self.monster))
            self.monster = self.get_next_monster()



    def __init__(self):
        self.setup()

        while self.player.hp and (self.monster or self.monsters):
            print("\n" + "=" * 20)
            print(self.player)
            self.monster_turn()
            print("-" * 20)
            self.player_turn()
            self.clean_up()
            print("\n" + "=" * 20)

        if self.player.hp:
            print("You slayed all the monsters!!")
        elif self.monsters or self.monster:
            print("You were slain by {}!".format(self.monster))
        sys.exit()

Game()