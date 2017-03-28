import random

def number_guess():
    # Generate a random number between 1 and 10
    secret_num = random.randint(1, 10)
    count = 3

    while count > 0:

        try:
            # get a number guess from the player
            guess = int(input("Guess a number between 1 and 10. You have {} guesses: ".format(count)))

        except ValueError:
            print("That's not a number sorry, please type a number to guess")
            continue

        # Compare the guess to the secret_num
        if guess == secret_num:
            print("You got it right. The number was {0}".format(secret_num))
            break
        else:
            # Check if guess is too high or too low
            if guess > secret_num:
                print("Your guess was greater than the number, try a lower number :)")
            else:
                print("Your guess was lower than the number, try a higher number :)")

        count -= 1
        
    try_again = input("Type 'AGAIN' to try again or 'QUIT' to exit the game > ")
    if try_again == 'AGAIN':
        number_guess()
    elif try_again == 'QUIT':
        print("Thanks for playing, come back soon :) !!!!!!!!!!!")

number_guess()
