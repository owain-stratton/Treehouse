#  make a list to hold our items
shopping_list = []

# print instructions on how to use the app
print("What should we pick up at the store?")
print("Enter 'DONE' to stop adding items.")

# print help message to user
def print_user_help_message():
    print("""
Enter items that you want to add to your shopping list :) ....
When you're finished enter the phrase 'DONE' to exit.
Enter the phrase 'SHOW' to list the items in your shopping list.
""")

def show_list_items():
    # print out the list
    print("Here's your list:")

    for item in shopping_list:
        print(item)

def add_to_list(new_item):
    # add new items to the list
    shopping_list.append(new_item)
    print("Added {0}. List now has {1} number of items".format(new_item, len(shopping_list)))

while True:
    # ask for new items
    new_item = input("> ")

    # be able to quit the app
    if new_item == 'DONE':
        break
    elif new_item == 'HELP':
        print_user_help_message()
        continue
    elif new_item == 'SHOW':
        show_list_items()
        continue

    add_to_list(new_item)


show_list_items()
