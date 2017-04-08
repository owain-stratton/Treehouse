import os
import random

# draw grid
# pick a random location for player
# pick a random location fpr the monster
# pick random location for the exit door
# draw player in the grid
# take input for movement
# check for win lose
# clear screen


CELLS = list((x, y) for x in range(5) for y in range(5))

def clear_screen():
    os.system('cls' if os.name == 'nt' else 'clear')

def get_locations():
    return random.sample(CELLS, 3)

def move_player(player, move):
    # get players position
    x, y = player

    # if move == LEFT, x-1
    if move == "LEFT":
        y -= 1
    # if move == RIGHT, x+1
    if move == "RIGHT":
        y += 1
    # if move == DOWN, y-1
    if move == "DOWN":
        x += 1
    # if move == UP, y+1
    if move == "UP":
        x -= 1

    return x, y

def get_moves(player):
    moves = ["LEFT", "RIGHT", "UP", "DOWN"]

    # unpack player tuple
    x, y = player

    # if y == 0 can't go UP
    if x == 0:
        moves.remove("UP")
    # if y == 4 can't go DOWN
    if x == 4:
        moves.remove("DOWN")
    # if x == 0 can't go LEFT
    if y == 0:
        moves.remove("LEFT")
    # if x == 4 can't go RIGHT
    if y == 4:
        moves.remove("RIGHT")

    return moves


def draw_map(player):
    print(" _" * 5)
    tile = "|{}"

    for cell in CELLS:
        x, y = cell
        if y < 4:
            line_end = ""
            if cell == player:
                output = tile.format("X")
            else:
                output = tile.format("_")
        else:
            line_end = "\n"
            if cell == player:
                output = tile.format("X|")
            else:
                output = tile.format("_|")

        print(output, end=line_end)


def game_loop():
    # get the locations
    monster, door, player = get_locations()
    playing = True

    while playing:
        clear_screen()
        draw_map(player)
        valid_moves = get_moves(player)

        print("You're currently in room {}".format(player))
        print("You can move {}".format(", ".join(valid_moves)))
        print("Enter QUIT to quit")

        move = input("> ")
        move = move.upper()

        if move == "QUIT":
            print("See yaaa Warrior!!!! \n\n\n")
            break

        if move in valid_moves:
            player = move_player(player, move)
            if player == monster:
                print("\n ** HOLY SHITSNACKS!!! You ran into the Monster dude!!!! :-( **\n")
                playing = False
            if player == door:
                print("\n ** KAZAAAM!!!! You escaped to freedom.... LEGEND!!!! ;-D **\n")
                playing = False

        else:
            input("\n ** Walls are hard don't run into them you silly sausage!!\n")
    else:
        if input("Play again? [Y/n] ").lower() != "n":
            game_loop()



clear_screen()

print("Welcome to the Dungeon")
starter = input("Press return to commence gaming!!!!")
print(starter)

clear_screen()
game_loop()
