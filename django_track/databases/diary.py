#!/usr/bin/env python3

from collections import OrderedDict
import datetime
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


def menu_loop():
    """Show the Menu"""
    choice = None

    while choice != 'q':
        print('Enter [q] to quit!')
        for key, value in menu.items():
            print('{} {}'.format(key, value.__doc__))
        
        choice = input('Action: ').lower().strip()

        if choice in menu:
            menu[choice]()



def add_entry():
    """Add an Entry"""
    # add an entry

def view_entries():
    """View Entries"""
    # view entries

def delete_entry():
    """Delete an Entry"""
    # delete an entry

menu = OrderedDict([
    ('a', add_entry),
    ('v', view_entries),
])

if __name__ == '__main__':
    initialize()
    menu_loop()