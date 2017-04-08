import random
import os
import sys

# make a list of words
words = [
    "football",
    "rugby",
    "hockey",
    "skiing",
    "surfing",
    "cricket",
    "basketball"
]

def clear():
    if os.name == 'nt':
        os.system('cls')
    else:
        os.system('clear')

def draw(bad_guesses, good_guesses, random_word):
    clear()

    print("Strikes: {}/7".format(len(bad_guesses)))
    print("")

    for letter in bad_guesses:
        print(letter, end=" ")
    print("\n\n")

    # draw spaces
    for letter in random_word:
        if letter in good_guesses:
            print(letter, end="")
        else:
            print("_", end="")

    print("")


def get_guess(bad_guesses, good_guesses):
    while True:
        guess = input("Guess a letter: ").lower()

        if len(guess) != 1:
            print("You can only guess a single letter!")
        elif guess in bad_guesses or guess in good_guesses:
            print("You have already guessed that letter!")
        elif not guess.isalpha():
            print("You can only guess letters!")
        else:
            return guess

def play(done):
    clear()
    random_word = random.choice(words)
    bad_guesses = set()
    good_guesses = set()
    word_set = set(random_word)

    while True:
        draw(bad_guesses, good_guesses, random_word)
        guess = get_guess(bad_guesses, good_guesses)

        if guess in random_word:
            good_guesses.append(guess)
            found = True
            for letter in random_word:
                if letter not in good_guesses:
                    found = False
            if found:
                print("You win!!!")
                print("The word was {}".format(random_word))
                done = True
        else:
            bad_guesses.append(guess)
            if len(bad_guesses) == 7:
                draw(bad_guesses, good_guesses, random_word)
                print("You lost!")
                print("The secret word was {}".format(random_word))
                done = True

        if done:
            play_again = input("Play again? Y/n ").lower()
            if play_again == 'y':
                return play(done=True)
            elif play_again == 'n':
                sys.exit()

def welcome():
    start = input("Press enter/return to start or Q to quit ").lower
    if start == 'q':
        print("Bye!")
        sys.exit()
    else:
        return True

print("Welcom to the ultimate Hangman game!!")

done = False

while True:
    clear()
    welcome()
    play(done)
