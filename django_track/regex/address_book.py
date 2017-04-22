import re

# names_file = open("names.txt", encoding="utf-8")
# data = names_file.read()
# names_file.close()

with open("names.txt", encoding="utf-8") as open_file:
    data = open_file.read()

print(data)

# print(re.match(r"Love", data))
# print(re.search(r"Kenneth", data))

# print(re.findall(r'\(?\d{3}\)?-?\s?\d{3}-\d{4}', data))

# print(re.findall(r'\w*, \w+', data))

# print(re.findall(r'[-\w\d+.]+@[-\w\d.]+', data))

# print(re.findall(r'\b[trehous]{9}\b', data, re.IGNORECASE)) # ignorecase with re.I also

# print(re.findall(r'''
#     \b@[-\w\d.]* # first a word boundary and an @
#     [^gov\t]+ # ignore 1+ instances of the letters 'g', 'o', 'v' and a tab
#     \b
# ''', data, re.VERBOSE|re.IGNORECASE))

# print(re.findall(r'''
#     \b[-\w]*, # find a word boundary, 1+ hyphens or characters, and commas
#     \s
#     [-\w ]+ # 1+ hyphens characters and explicit characters
#     [^\t\n] # ignore tabs and new lines
# ''', data, re.VERBOSE)) # verbose with re.X also

# line = re.search(r'''
#     ^(?P<name>[\w ]*,\s[-\w ]+)\t # last and first names
#     (?P<email>[-\w\d.+]+@[-\w\d.]+)\t # email
#     (?P<phone>\(?\d{3}\)?-?\s?\d{3}-\d{4})?\t # phone numbers
#     (?P<job>[\w\s]+,\s[\w\s.]+)\t? # job and company
#     (?P<twitter>@[\w\d]+)?$ # twitter
# ''', data, re.X|re.MULTILINE)

line = re.compile(r'''
    ^(?P<name>(?P<last>[\w ]*),\s(?P<first>[-\w ]+))\t # last and first names
    (?P<email>[-\w\d.+]+@[-\w\d.]+)\t # email
    (?P<phone>\(?\d{3}\)?-?\s?\d{3}-\d{4})?\t # phone numbers
    (?P<job>[\w\s]+,\s[\w\s.]+)\t? # job and company
    (?P<twitter>@[\w\d]+)?$ # twitter
''', re.X|re.MULTILINE)

# print(re.search(line, data).groupdict()) 

# print(line.search(data).groupdict())

for match in line.finditer(data):
    print("{first} {last} <{email}>".format(**match.groupdict()))