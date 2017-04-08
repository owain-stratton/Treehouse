import os

#  make a list to hold our items
shopping_list = []

# print instructions on how to use the app
print("What should we pick up at the store?")
print("Enter 'DONE' to stop adding items.")


def clear_screen():
    os.system('cls' if os.name == 'nt' else 'clear')

# print help message to user
def print_user_help_message():
    clear_screen()
    print("""
Enter items that you want to add to your shopping list :) ....
When you're finished enter the phrase 'DONE' to exit.
Enter the phrase 'SHOW' to list the items in your shopping list.
Enter 'REMOVE' to delete an item from your list.
""")

def show_list_items():
    clear_screen()
    # print out the list
    print("Here's your list:")

    for index, item in enumerate(shopping_list):
        print("{}. {}".format(index,item))

    print("-" * 10)


def add_to_list(new_item):
    show_list_items()

    if len(shopping_list):
        position = input("Where should I add {}?\n"
                         "Press ENTER to add to the end of the list\n"
                         "> ".format(new_item))
    else:
        position = 0

    try:
        position = abs(int(position))
    except ValueError:
        position = None

    if position is not None:
        shopping_list.insert(position - 1, new_item)
    else:
        shopping_list.append(new_item)

    show_list_items()
    # print("Added {0}. List now has {1} number of items".format(new_item, len(shopping_list)))

def remove_from_list():
    show_list_items()
    what_to_remove = input("What would you like to remove from the list?\n")

    try:
        shopping_list.remove(what_to_remove)
    except ValueError:
        pass

    show_list_items()


while True:
    # ask for new items
    new_item = input("> ")

    # be able to quit the app
    if new_item.upper() == 'DONE' or new_item.upper() == 'QUIT':
        break
    elif new_item.upper() == 'HELP':
        print_user_help_message()
        continue
    elif new_item.upper() == 'SHOW':
        show_list_items()
        continue
    elif new_item.upper() == 'REMOVE':
        remove_from_list()
    else:
        add_to_list(new_item)


show_list_items()
