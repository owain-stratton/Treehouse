#!/usr/bin/env python3

from collections import OrderedDict
import datetime
import sys
import os

from peewee import *

db = SqliteDatabase('diary.db')

class Entry(Model):
    # content
    content = TextField()
    # timestamp
    timestamp = DateTimeField(default=datetime.datetime.now)

    class Meta: 
        database = db
    


def initialize():
    """Create the database and the table if they dont't exist"""
    db.connect()
    db.create_tables([Entry], safe=True)


def clear():
    os.system('cls' if os.name == 'nt' else 'clear')


def menu_loop():
    """Show the Menu"""
    choice = None

    while choice != 'q':
        clear()
        print('Enter [q] to quit!')
        for key, value in menu.items():
            print('{} {}'.format(key, value.__doc__))
        
        choice = input('Action: ').lower().strip()

        if choice in menu:
            clear()
            menu[choice]()



def add_entry():
    """Add an Entry"""
    print("Enter your entry. Press ctrl+d when finished")
    data = sys.stdin.read().strip()

    if data:
        if input('Save entry? Y[n] ').lower() != 'n':
            Entry.create(content=data)
            print('Saved successfully')


def view_entries(search_query=None):
    """View Entries"""
    entries = Entry.select().order_by(Entry.timestamp.desc())
    if search_query:
        entries = entries.where(Entry.content.contains(search_query))

    for entry in entries:
        timestamp = entry.timestamp.strftime('%A %B %d, %Y %I:%M%p')
        clear()
        print(timestamp)
        print('=' * len(timestamp))
        print(entry.content)
        print('\n' * 2)
        print('=' * len(timestamp))
        print('[N] next entry')
        print('[d] delete entry')
        print('[q] return to main menu')

        next_action = input('Action: [Ndq] ').lower().strip()

        if next_action == 'q':
            break
        elif next_action == 'd':
            delete_entry(entry)


def find_entries():
    """Find entries for a string."""
    view_entries(input('Find query: '))

def delete_entry(entry):
    """Delete an Entry"""
    if input('Are you sure? [yN]').lower() == 'y':
        entry.delete_instance()
        print('Entry has been deleted.')
        print('\n' * 2)

menu = OrderedDict([
    ('a', add_entry),
    ('v', view_entries),
    ('f', find_entries),
])

if __name__ == '__main__':
    initialize()
    menu_loop()